<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\ExchangeRate;

class ExchangeRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get(config('services.currency.api_endpoint'),[
            'apikey' => config('services.currency.api_key')
        ])->json();

        foreach ($response['data'] as $currency_code => $exchange_rate) {
            ExchangeRate::create([
                'currency_code' => $currency_code,
                'exchange_rate' => $exchange_rate
            ]);
        }
    }
}
