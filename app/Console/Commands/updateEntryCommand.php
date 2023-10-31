<?php

namespace App\Console\Commands;


use App\Models\crypto;
use App\Models\fiat;
use App\Models\stock;
use Exception;
use Illuminate\Console\Command;
use Illuminate\support\Facades\Validator;

class updateEntryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:records';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function item_entries($item, $model_name)
    {
        $entry = null;

        switch ($model_name) {
            case "fiats":
            case "cryptos":
                $entry = [
                    'symbol' => $item['meta']['symbol'],
                    'type' => $item['meta']['type'],
                    'currency_base' => $item['meta']['currency_base'],
                    'currency_quote' => $item['meta']['currency_quote'],
                    'datetime' => array_column($item['values'], 'datetime'),
                    'open' => array_column($item['values'], 'open'),
                    'high' => array_column($item['values'], 'high'),
                    'low' => array_column($item['values'], 'low'),
                    'close' => array_column($item['values'], 'close'),
                ];
                break;

            case "stocks":
                $entry = [
                    'symbol' => $item['meta']['symbol'],
                    'type' => $item['meta']['type'],
                    'currency' => $item['meta']['currency'],
                    'exchange' => $item['meta']['exchange'],
                    'datetime' => array_column($item['values'], 'datetime'),
                    'open' => array_column($item['values'], 'open'),
                    'high' => array_column($item['values'], 'high'),
                    'low' => array_column($item['values'], 'low'),
                    'close' => array_column($item['values'], 'close'),
                    'volume' => array_column($item['values'], 'volume'),
                ];
                break;


            default:
                break;
        }

        return $entry;
    }
    public function validateEntries($item, $model, $model_name, $rules, $id)
    {
        $entry = $this->item_entries($item, $model_name);
        $validator = Validator::make($entry, $rules);
        if (!$validator->fails()) {
            $currency = $model::firstOrNew(['symbol' => $entry['symbol']]);
            $currency->fill($entry);
            $currency->save();
        }
    }
    public function update_data($symbol_array, $model, $rules, $twelveData = true)
    {
        $model_instance = new $model;
        $model_name = $model_instance->getTable();
        $client = new \GuzzleHttp\Client();

        for ($i = 0; $i < count($symbol_array); $i++) {

            try {
                // fetch data
                $symbols = $symbol_array[$i];
                $response = $client->request('GET', "https://www.alphavantage.co/query?function={$symbols}&interval=monthly&apikey=7993G1N9882LNTYL");

                // process data
                if ($response !== false) {
                    $data = json_decode($response->getBody(), true);

                    foreach ($data as $item) {
                        $this->validateEntries($item, $model, $model_name, $rules, 'symbol');
                    }

                    info("update entry: $symbols");
                }
            } catch (Exception $e) {
                info("Exception occured: $e");
                info("error: $symbols");
            }
            sleep(67);
        }
        info("update model completed: $model_name");
        sleep(67);
    }

    public function handle()
    {
        //
        $this->update_data(config('constants.fiat_currency_symbols'), fiat::class, config('constants.rules.fiats'));
        $this->update_data(config('constants.crypto_currency_symbols'), crypto::class, config('constants.rules.cryptos'));
        $this->update_data(config('constants.stock_currency_symbols'), stock::class, config('constants.rules.stocks'));
    }
}
