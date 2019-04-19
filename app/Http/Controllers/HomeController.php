<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $currency;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Currency $currency)
    {
        $this->middleware('auth');
        $this->currency = $currency;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'conversionResult' => $this->currency->getCurrentCurrencies()
        ]);
    }
}
