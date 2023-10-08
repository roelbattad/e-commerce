<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Countries;

class UpdateExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:exchange_rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will update the exchange rates table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get(config('services.currency.api_endpoint'),[
            'apikey' => config('services.currency.api_key')
        ])->json();

        foreach ($response['data'] as $currency_code => $exchange_rate) {
            ExchangeRate::updateOrCreate([
                'currency_code' => $currency_code,
                'exchange_rate' => $exchange_rate
            ]);
        }

        // $ip = '49.150.54.157';
        //  $response = Http::get(config('services.apiip.api_endpoint').'/'.$ip,[
        //     'access_key' => config('services.apiip.access_key')
        // ])->json();

        // dump($response);

        // dump(locale()->getUserCountryDetails());

        // $france = Countries::where('name.common', 'Indonesia')->first()->currencies;
        // dump($france);
    }
}
