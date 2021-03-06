<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShopForm;
use Illuminate\Database\Eloquent\Collection;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $shops = Shop::where('name', 'like', '%'. $keyword . '%')->paginate(2);
        }else{
            $shops = Shop::select('*')->paginate(2);
        }
        return view('index',['shops' => $shops ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name','id');
        return view('new',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Shop  $shop
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopForm $request)
    {
        $shop = new Shop();
        $user = \Auth::user();

        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->category_id = $request->category_id;
        $shop->user_id = $user->id;
        $shop->save();
        return redirect()->route('shop.detail',['id' => $shop->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        $user = \Auth::user();
        if ($user){
            $login_user_id = $user->id;
        }else{
            $login_user_id='';
        }
        return view('show', ['shop' => $shop, 'login_user_id' => $login_user_id]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop,$id)
    {
        $shop = Shop::find($id);
        $categories = Category::all()->pluck('name','id');
        return view('edit',['shop' => $shop,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(StoreShopForm $request, $id, Shop $shop)
    {
        $shop = Shop::find($id);
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->save();
        return redirect()->route('shop.detail',['id' => $shop->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/shops');
    }
}
