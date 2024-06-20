<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IpLookupController extends Controller
{
    public function lookup(Request $request)
    {
        $request->validate([
            'ip' => ['required', 'ip']
        ]);

        $ip = $request->input('ip');

        try {
            $response = Http::get("http://ip-api.com/json/{$ip}");
            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching IP information'], 500);
        }
    }
}
