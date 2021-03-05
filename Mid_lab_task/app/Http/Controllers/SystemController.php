<?php

namespace App\Http\Controllers;
use App\Physical_channel;
use App\Ecommerce_channel;
use App\Social_media_channel;
use App\Product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
//use Illuminate\Http\Requests\ProductRequest;

class SystemController extends Controller
{
    public function index(){
        return view('system.sales');
    }
    public function physical_index(){

        $date_7 = \Carbon\Carbon::today()->subDays(7);

        $physical_products_7 = Physical_channel::where('sell_date','>=',$date_7)->get();
        $physical_counter_7 = count($physical_products_7);

        $date = \Carbon\Carbon::today();
        $physical_products = Physical_channel::where('sell_date','>=',$date)->get();
        $physical_counter = count($physical_products);

        return view('system.physical')
                    ->with('data',['physical_counter_7'=>$physical_counter_7,
                                            'physical_counter'=>$physical_counter]);
    }
    public function social_index(){
        return view('system.social');
    }
    public function ecommerce_index(){
        return view('system.ecommerce');
    }
    public function product_index(){

        $available_product = DB::table('products')->where('status', 'available')->get();
        $available_product_counter = count($available_product);
        
        $upcomming_product = DB::table('products')->where('status', 'upcomming')->get();
        $upcomming_product_counter = count($upcomming_product);

        return view('system.product')->with('data',['available_product_counter'=>$available_product_counter,
                                                        'upcomming_product_counter'=>$upcomming_product_counter]);
    }

    public function available_product_index(){
        $productlist = Product::where('status', 'available')->paginate(10);
        
        return view('system.availableProduct')->with('list', $productlist);
    }
    public function upcomming_product_index(){

        $productlist = Product::where('status', 'upcomming')->paginate(10);

        return view('system.upcommingProduct')->with('list', $productlist);
        
    }
    // public function available_product_quantity_sort(){
        
    //     $productlist = Product::orderBy('id')->paginate(10);
        
    //     return view('system.availableProduct')->with('list', $productlist);
    // }

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

    public function store(Request $req){
        $product = new Physical_channel();
        $product->product_id        = $req->product_id;
        $product->product_name      = $req->product_name;
        $product->sell_date         = Carbon::today()->toDateString();
        $product->customer_name     = $req->customer_name;
        $product->address           = $req->address;
        $product->phone             = $req->phone;
        $product->unit_price        = $req->unit_price;
        $product->quantity          = $req->quantity;
        $product->total_price        = (($req->unit_price)*($req->quantity));

        $product->save();

        $req->session()->put('stored', "Data stored");
        
        return redirect()->route('system.physical_store');
    }

    public function product_edit($id){

        $product = Product::find($id);

        return view('product.edit')->with('product', $product);

    }

    public function product_update($id, ProductRequest $req){

        $validated = $req->validated();

        $product = Product::find($id);

        $product->id                = $req->id;
        $product->product_name      = $req->product_name;
        $product->category          = $req->category;
        $product->quantity          = $req->quantity;
        $product->unit_price        = $req->unit_price;
        $product->last_updated      = Carbon::now();
        $product->status            = $req->status;
        $product->save();
        return redirect()->route('system.available_products');

    }

    public function product_delete($id){

        $product = Product::find($id);

        return view('product.delete')->with('product', $product);

    }

    public function product_destroy($id){

        $product = Product::destroy($id);

        return redirect()->route('system.available_products');

    }

    public function add_product_index(){
        return view('product.add');
    }

    public function store_product(ProductRequest $req){

        $validated = $req->validated();

        $product = new Product();

        $product->id                = $req->id;
        $product->product_name      = $req->product_name;
        $product->category          = $req->category;
        $product->quantity          = $req->quantity;
        $product->unit_price        = $req->unit_price;
        $product->last_updated      = Carbon::now();
        $product->status            = $req->status;
        $product->save();
        return redirect()->route('system.available_products');

    }
        
}
