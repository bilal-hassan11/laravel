<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\category;


class ProductsController extends Controller
{
    public function new_product(){

        $categories = category::all();

        
        return view('add_product',['categories'=>$categories]);
    }
    
    public function store_products(REQUEST $req){    

        $req->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'product_color' => 'required',
            'product_image' => 'required',
        ]);
       
        $product = new Product;
        $imageName = time().'.'.$req->product_image->extension();

        $image_name = $req->product_image->move(public_path('images'), $imageName);
        
        $product->name = $req->product_name;  
        $product->description = $req->product_description;  
        $product->category = $req->parent_id;  
        $product->quantity = $req->product_quantity;  
        $product->price = $req->product_price;
        $product->color = $req->product_color;
        $product->photo = $imageName;    
        
        $product->save();
    
        return redirect('/')->with('status', 'Form Data Has Been validated and insert');
   
    }

    public function search(Request $req){

        $colors = $req->colors;
        $category = $req->category;
        
        DB::table('categories');

        dd($req->all());

    } 

    public function generatetxt(){

        $products = Product::all();

        Storage::disk('local')->put('product/s1.txt',$products);
        
        $file_name = "app\product\s1.txt";

        $file_path = storage_path($file_name);
        
        return response()->download($file_path);

    }

    public function uploadImage($filename){

        $path = storage_public('images/' . $filename);
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }

    public function index(){

        $products = Product::all();//retrieve all products from database
        // foreach($products as $product){
        
        //     echo"<pre>";
        //     print_r($product->photo);
        //     die();
                
        // }
        
        // $orders = DB::table('products')
        //         ->select('*')
        //         ->groupBy('color')
        //         ->get();
        // echo"<pre>";
        // print_r($orders);
        // die();
                
        //         foreach($products as $product){
        // echo"<pre>";
        // print_r($product->color);
        // die();
        // }
        return view('products', compact('products'));
    }

    public function cart(){
        
        return view('cart');//view the cart 
    }

    public function addToCart($id){
        
        $product = Product::find($id);//find if the product is available 
        
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');//to store a cart in session
        
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo,
                        "total" => $product->price
                    ]
            ];
            session()->put('cart', $cart);//store the product in cart
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo,
            "total" => $product->price,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request){

        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request){
        
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkout(){

        return view('checkout');
    }
    //update an image 
    public function update_image(Request $request, $id){

        $employee = Employee::find($id);
   
        if($request->file != ''){        
             $path = public_path().'/uploads/images/';
   
             //code for remove old file
             if($employee->file != ''  && $employee->file != null){
                  $file_old = $path.$employee->file;
                  unlink($file_old);
             }
   
             //upload new file
             $file = $request->file;
             $filename = $file->getClientOriginalName();
             $file->move($path, $filename);
   
             //for update in table
             $employee->update(['file' => $filename]);
        }
   }
}
