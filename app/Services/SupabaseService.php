<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SupabaseService
{
    protected $url;
    protected $apiKey;

    public function __construct()
    {
        $this->url = env('SUPABASE_URL') . "/rest/v1/";
        $this->apiKey = env('SUPABASE_API_KEY');
    }

    public function fetchData($table)
    {
        $response = Http::withHeaders([
            'apikey' => $this->apiKey,
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->get($this->url . $table);

        return $response->json();
    }

    public function insertData($table, $data)
    {
        $response = Http::withHeaders([
            'apikey' => $this->apiKey,
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
            'Prefer' => 'return=minimal'
        ])->post($this->url . $table, $data);

        return $response->successful();
    }
}
