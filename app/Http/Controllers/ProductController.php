<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $brands = Product::get()->groupBy('product_brand');
        $processors = Product::get()->groupBy('product_processor');
        $displays = Product::get()->groupBy('product_screen');
        $rams = Product::get()->groupBy('product_ram');
        $storages = Product::get()->groupBy('product_storage');

        $maximum_price = Product::max('product_price');
        $minimum_price = Product::min('product_price');
        $products = DB::table('products')->get();

        
        return view('welcome', compact('brands','processors','displays','rams','storages','products','maximum_price','minimum_price'));
    }


/*     public function fetch_data($id)
    {
        $id_value = [$id];

       $data = DB::table('products')->select('Select * from products where id = $id_value')->get(); 
       echo json_encode($data);
    } */




    public function fetch_data(Request $request)
    {
        if($request->ajax() != null){

            if (isset($_GET['brand']) && !empty($_GET['brand'])) {
                $brands = $_GET['brand'];
           } else {
                $brands = [];
           }


           if (isset($_GET['processor']) && !empty($_GET['processor'])) {
                    $processors = $_GET['processor'];
            } else {
                    $processors = [];
            }


            if (isset($_GET['display']) && !empty($_GET['display'])) {
                    $displays = $_GET['display'];
            } else {
                    $displays = [];
            }


    
           if (isset($_GET['ram']) && !empty($_GET['ram'])) {
                    $rams = $_GET['ram'];
            } else {
                    $rams = [];
            }
    
    
           if (isset($_GET['storage']) && !empty($_GET['storage'])) {
                $storages = $_GET['storage'];
            } else {
                $storages = [];
            }


             if (isset($_GET['minimum_price']) && !empty($_GET['minimum_price'])) {
                $minimum_price = json_decode($_GET['minimum_price']) ;
            } 

            if (isset($_GET['maximum_price']) && !empty($_GET['maximum_price'])) {
                $maximum_price = json_decode( $_GET['maximum_price']) ;
            }  


            $data = Product::when($brands , function($q) use($brands){
                        $q->whereIn('product_brand', $brands);
                    })
                    ->when($processors , function($q) use($processors){
                        $q->whereIn('product_processor', $processors);
                    })
                    ->when($displays , function($q) use($displays){
                        $q->whereIn('product_screen', $displays);
                    })
                    ->when($rams , function($q) use($rams){
                        $q->whereIn('product_ram', $rams);
                    })
                    ->when($storages , function($q) use($storages){
                        $q->whereIn('product_storage', $storages);
                    })

                    ->whereBetween('product_price', array($minimum_price, $maximum_price))
                    ->get();   
    
                    echo json_encode($data); 

        } else {
            
            $data = Product::get();
        
        
            echo json_encode($data); 
        }


    } 
}
