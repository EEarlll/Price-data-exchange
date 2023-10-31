<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function categoryCurrency(string $category)
    {
        $model = app("App\Models\\{$category}");

        $Currencyitems = $model::all();

        return view('Currency', ['Category' => $category, "Currency" => $Currencyitems]);
    }
    public function currencyhistory(string $category, string $id)
    {
        $model = app("App\Models\\{$category}");
        $Currencyitems = $model::find($id);
        $close = $Currencyitems['close'];
        $referenceValue = end($close);
        $currentValue = $close[0];
        $percentage_change[] = sprintf('%+.2f%%', (($currentValue - $referenceValue) / $referenceValue) * 100);
        return view('history', ['Category' => $category, 'Currency' => $Currencyitems, 'conf' => $percentage_change]);
    }
    public function search(string $category, Request $request)
    {
        $search = $request->input('search');

        $model = app("App\Models\\{$category}");
        $base = $category == 'Stock' ? 'currency' : 'currency_base';
        $quote = $category == 'Stock' ? 'exchange' : 'currency_quote';
        $Currencyitems = $model::where(function ($query) use ($search, $base, $quote) {
            $query->where('symbol', 'LIKE', '%' . $search . '%')
                ->orWhere($base, 'LIKE', '%' . $search . '%')
                ->orWhere($quote, 'LIKE', '%' . $search . '%');
        })->get();

        return view('Currency', ['Category' => $category, "Currency" => $Currencyitems]);
    }
    public function export(string $category, string $type, Request $request)
    {
        $model = app("App\Models\\{$category}");
        $Data = $model::all();
        $fileName = $type == 'json' ? $category . '.json' : $category . 'csv';
        
        return response()->stream(function () use ($Data, $fileName) {
            echo $Data->ToJson();
        }, 200, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"'
        ]);
    }
}
