<?php

namespace App\Models;


class Currency {
    
    public function getCurrentCurrencies() {
        $ch = curl_init('http://data.fixer.io/api/latest?access_key=dce3aacf4345ee36684f6289cc0aa3ea');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // get the JSON data:
        $json = curl_exec($ch);
        curl_close($ch);
        // Decode JSON response:
        return json_decode($json, true);
    }
}
