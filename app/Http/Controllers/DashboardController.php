<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Cart;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard.index');
    }
//////// Tăng giảm giá sản phẩm ////////
    public function shop(Request $request)
{
    $sortField = $request->query('sort', 'created_at');
    $sortOrder = $request->query('order', 'desc');
    
    $query = Product::query();
    
    switch ($sortField) {
        case 'price':
            $query->orderBy('price', $sortOrder);
            break;
        case 'discount':
            $query->orderBy('discount', 'desc');
            break;
        case 'created_at':
            $query->orderBy('created_at', $sortOrder);
            break;
        default:
            $query->orderBy('position', 'asc');
    }
    
    $products = $query->paginate(10);
    
    return view('backend.dashboard.products', compact('products', 'sortField', 'sortOrder'));
}

    public function cart($id){
        // session()->flush('cart');
        $products = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $products->name,
                'quantity' => 1,
                'price' => $products->price,
                'image' => $products->image
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'message'=>'success',
        ],200);
        // echo"<pre>";
        // print_r(session()->get('cart'));
    }

    public function showCart(){
        $products = Product::all();
        $carts = session()->get('cart');
        return view('backend.dashboard.cart',compact(
            'carts',
            'products'
        ));
    }

    public function updateCart(Request $request){
        if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cartDashboard = view('backend.dashboard.showCart',compact(
                'carts'
            ))->render();
            return response()->json(['showCart'=>$cartDashboard,'code' => 200],200);
        }
    }

    public function deleteCart(Request $request){
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cartDashboard = view('backend.dashboard.showCart',compact(
                'carts'
            ))->render();
            return response()->json(['showCart'=>$cartDashboard,'code' => 200],200);
        }
    }

    public function Productsdetail($id){
        $product = Product::find($id);
        $discountedPrice = $product->discounted_price;
        return view('backend.dashboard.productDetails',compact(
            'product', 'discountedPrice'
        ));
    }

    public function Contact(){
        return view('backend.contact.contactUs');
    }
}
