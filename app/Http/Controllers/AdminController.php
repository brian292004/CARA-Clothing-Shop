<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminPage(){
        return view('adminLayout');
    }

    public function adminUser(){
        $users = User::paginate(2);
        return view('backend.adminPage.myUser',compact(
            'users'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.adminPage.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        // Tạo người dùng mới
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Gán vai trò cho người dùng
        return redirect()->route('admin.adminUser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.adminPage.editUser',compact(
            'user'
        ));
    }

    public function editProducts($id)
    {
        $products = Product::find($id);
        return view('backend.adminProduct.editProduct',compact(
            'products'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->route('admin.adminUser')->withSuccess('Cập nhật thành công người dùng');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->withSuccess('Xóa thành công người dùng');
    }

    public function adminSearch(Request $request){
        $keyword = $request->input('keyword');
        $users = User::where('name', 'like', "%$keyword%")
                 ->orWhere('email', 'like', "%$keyword%")
                 ->orWhere('role', 'like', "%$keyword%")
                 ->paginate(3);
        return view('backend.adminPage.myUser',compact(
            'users'
        ))->with('message', 'Results found.');
    }

    public function adminSearchProduct(Request $request){
        $keyword = $request->input('keyword');
        $products = Product::where('name', 'like', "%$keyword%")
        ->orWhere('price', 'like', "%$keyword%")
        ->paginate(3);
        return view('backend.adminProduct.myProduct',compact(
            'products'
        ))->with('message', 'Results found.');
    }
}
