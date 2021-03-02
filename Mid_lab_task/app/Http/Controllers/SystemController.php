<?php

namespace App\Http\Controllers;
use App\Physical_channel;
use App\Ecommerce_channel;
use App\Social_media_channel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(){
        return view('system.sales');
    }
    public function physical_index(){
        return view('system.physical');
    }
    public function social_index(){
        return view('system.social');
    }
    public function ecommerce_index(){
        return view('system.ecommerce');
    }

    public function sellCount(){

        //7day

        $date_7 = \Carbon\Carbon::today()->subDays(7);

        $physical_products_7 = Physical_channel::where('sell_date','>=',$date_7)->get();
        $physical_counter_7 = count($physical_products_7);

        $ecommerce_products_7 = Ecommerce_channel::where('sell_date','>=',$date_7)->get();
        $ecommerce_counter_7 = count($ecommerce_products_7);

        $social_products_7 = Social_media_channel::where('sell_date','>=',$date_7)->get();
        $social_counter_7 = count($social_products_7);

        //1day

        $date = \Carbon\Carbon::today();
        $physical_products = Physical_channel::where('sell_date','>=',$date)->get();
        $physical_counter = count($physical_products);

        $ecommerce_products = Ecommerce_channel::where('sell_date','>=',$date)->get();;
        $ecommerce_counter = count($ecommerce_products);

        $social_products = Social_media_channel::where('sell_date','>=',$date)->get();
        $social_counter = count($social_products);


        return view('system.sales')
                    ->with('data',['physical_counter_7'=>$physical_counter_7,
                                    'ecommerce_counter_7'=>$ecommerce_counter_7,
                                       'social_counter_7'=>$social_counter_7,
                                            'physical_counter'=>$physical_counter,
                                                'ecommerce_counter'=>$ecommerce_counter,
                                                    'social_counter'=>$social_counter]);

    }

        
}
