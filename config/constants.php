<?php
return [
    'rules' => [
        "fiats" =>   array(
            'symbol' => 'required',
            'type'   => 'required',
            'currency_base' => 'required',
            'currency_quote' => 'required',
            'datetime' => 'required',
            'open' => 'required',
            'high' => 'required',
            'low' => 'required',
            'close' => 'required'
        ),
        "cryptos" => array(
            'symbol' => 'required',
            'type'   => 'required',
            'currency_base' => 'required',
            'currency_quote' => 'required',
            'datetime' => 'required',
            'open' => 'required',
            'high' => 'required',
            'low' => 'required',
            'close' => 'required'
        ),
        "stocks" =>  array(
            'symbol' => 'required',
            'type'   => 'required',
            'currency' => 'required',
            'exchange' => 'required',
            'datetime' => 'required',
            'open' => 'required',
            'high' => 'required',
            'low' => 'required',
            'close' => 'required',
            'volume' =>'required'
        ),
        "commodities" =>  array(
            'symbol' => 'required',
            'unit'   => 'required',
            'datetime' => 'required',
            'value' => 'required',
        )
    ],
    "fiat_currency_symbols" => [
        ['USD/AED', 'USD/AFN', 'USD/ALL', 'USD/AMD', 'USD/ANG', 'USD/AOA', 'USD/ARS'],
        ['USD/AUD', 'USD/AZN', 'USD/BBD', 'USD/BDT', 'USD/BGN', 'USD/BHD', 'USD/BIF'],
        ['USD/BND', 'USD/BOB', 'USD/BRL', 'USD/BWP', 'USD/BYN', 'USD/BZD', 'USD/CAD'],
        ['USD/CHF', 'USD/CLP', 'USD/CNH', 'USD/CNY', 'USD/COP', 'USD/CRC', 'USD/CZK'],
        ['USD/DJF', 'USD/DKK', 'USD/DOP', 'USD/DZD', 'USD/EGP', 'USD/ETB', 'USD/EUR'],
        ['USD/FJD', 'USD/GBP', 'USD/GEL', 'USD/GHS', 'USD/GMD', 'USD/GNF', 'USD/GTQ'],
        ['USD/HKD', 'USD/HNL', 'USD/HRK', 'USD/HTG', 'USD/HUF', 'USD/IDR', 'USD/ILS'],
        ['USD/INR', 'USD/IQD', 'USD/ISK', 'USD/JMD', 'USD/JOD', 'USD/JPY', 'USD/KES'],
        ['USD/KGS', 'USD/KHR', 'USD/KMF', 'USD/KRW', 'USD/KWD', 'USD/KZT', 'USD/LAK'],
        ['USD/LBP', 'USD/LKR', 'USD/LSL', 'USD/LYD', 'USD/MAD', 'USD/MDL', 'USD/MGA'],
        ['USD/MKD', 'USD/MMK', 'USD/MNT', 'USD/MOP', 'USD/MRO', 'USD/MUR', 'USD/MVR'],
        ['USD/MWK', 'USD/MXN', 'USD/MYR', 'USD/MZN', 'USD/NAD', 'USD/NGN', 'USD/NIO'],
        ['USD/NOK', 'USD/NPR', 'USD/NZD', 'USD/OMR', 'USD/PEN', 'USD/PGK', 'USD/PHP'],
        ['USD/PKR', 'USD/PLN', 'USD/PYG', 'USD/QAR', 'USD/RON', 'USD/RSD', 'USD/RUB'],
        ['USD/RWF', 'USD/SAR', 'USD/SCR', 'USD/SDG', 'USD/SEK', 'USD/SGD', 'USD/SOS'],
        ['USD/STD', 'USD/SVC']
    ],
    "crypto_currency_symbols" => [
        ['0xBTC/USD', '1INCH/USD', '1ST/USD', '2GIVE/USD', '300/USD', '611/USD', 'ATS/USD'],
        ['888/USD', '8BIT/USD', '999/USD', 'AAC/USD', 'AAVE/USD', 'ABBC/USD', 'ABN/USD'],
        ['ABT/USD', 'ABY/USD', 'ACAT/USD', 'ACA/USD', 'ACC/USD', 'ACES/USD', 'ACH/USD'],
        ['ACN/USD', 'ACOIN/USD', 'ACP/USD', 'ACT/USD', 'AC/USD', 'ADA/USD', 'ADCN/USD'],
        ['ADC/USD', 'ADS/USD', 'ADT/USD', 'ADX/USD', 'ADZ/USD'],
        ['AEON/USD', 'AERM/USD', 'AE/USD', 'AGI/USD', 'AGRS/USD', 'AGVC/USD', 'AIB/USD'],
        ['AIDOC/USD', 'AION/USD', 'AIR/USD', 'AI/USD', 'AIX/USD', 'AKT/USD'],
        ['AKY/USD', 'ALGO/USD', 'ALICE/USD', 'ALIS/USD', 'ALPHA/USD', 'ALPINE/USD', 'ALQO/USD'],
        ['ALTCOM/USD', 'ALTC/USD', 'AMBER/USD', 'AMB/USD', 'AMMO/USD', 'AMM/USD', 'AMPL/USD'],
        ['AMPt/USD', 'AMP/USD', 'AMS/USD', 'ANCp/USD', 'ANI/USD', 'ANKR/USD', 'ATOM/USD'],
        ['ANTI/USD', 'ANT/USD', 'ANTX/USD', 'ANY/USD', 'AOAR/USD', 'APE/USD', 'API3/USD'],
        ['APIS/USD', 'APL/USD', 'APPC/USD', 'APT/USD', 'APX/USD', 'ARBIT/USD', 'ARBI/USD'],
        ['ARB/USD', 'ARCO/USD', 'ARDR/USD', 'ARG/USD', 'ARGUS/USD', 'ARI/USD', 'ARK/USD'],
        ['ARN/USD', 'ARPA/USD', 'ART/USD', 'AR/USD', 'ARV/USD', 'ASN/USD', 'ASTRO/USD'],
        ['ASTR/USD', 'AST/USD', 'ATA/USD', 'ATB/USD', 'ATLAS/USD', 'ATL/USD', 'ATMS/USD'],
        ['ATM/USD', 'ATOMc/USD']
    ],
    "stock_currency_symbols" => [
        ['002594', '005930', '1299', '2520', '2603', '2BNC', '4261'],
        ['4456', '4BD', '511880', '7203', 'A', 'A3M', 'AA'],
        ['AAALY', 'AABB', 'AABVF', 'AAC', 'AACAF', 'AACAY', 'AACG'],
        ['AACI', 'AACIU', 'AACIW', 'AACOU', 'AACS', 'AACT', 'AACTF'],
        ['AAC.UN', 'AAC.WT', 'AADI', 'AAEEF', 'AAFRF', 'AAGC', 'AAGFF'],
        ['AAGH', 'AAGIY', 'AAHIF', 'AAIC', 'AAIC.PR.B', 'AAIC.PR.C', 'AAIGF'],
        ['AAIIQ', 'AAIN', 'AAIRF', 'AAL', 'AALBF', 'AAMAF', 'AAM-B'],
        ['AAMC', 'AAME', 'AAMMF', 'AAM.PR.A', 'AAM.PR.B', 'AAMTF', 'AAN'],
        ['AANNF', 'AAOI', 'AAON', 'AAP', 'AAPJ', 'AAPL', 'AAPT'],
        ['AARTY', 'AASL', 'AASP', 'AASZF', 'AAT', 'AATGF', 'AATP'],
        ['AATRL', 'AATV', 'AAU', 'AAUGF', 'AAUKF', 'AAVMY', 'AAVVF'],
        ['AAVXF', 'AAWH', 'AAXT', 'AB', 'ABAKF', 'ABANF', 'ABAT'],
        ['ABAUF', 'ABBAF', 'ABBB', 'ABBNY', 'ABBRF', 'ABBV', 'ABBY'],
        ['ABCAF', 'ABCB', 'ABCE', 'ABCFF', 'ABCL', 'ABCM', 'ABCP'],
        ['ABCZF', 'ABDDF', 'ABDXF', 'ABEC', 'ABENU', 'ABEO', 'ABEPF'],
        ['ABEV', 'ABG', 'ABGOF', 'ABGSF']
    ],
];