<?php

namespace App\Http\Controllers\Api;

use App\Models\ShopItem\ShopItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $shopItemsQuery = ShopItem::query();

        if (\request()->has('shop_item_type')) {
            $shopItemsQuery->where('type', \request()->get('shop_item_type'));
        }

        if (\request()->has('book_category_id')) {
            $shopItemsQuery->where('book_category_id', \request()->get('book_category_id'));
        }

        $shopItems = $shopItemsQuery->paginate(4);

        return \App\Http\Resources\ShopItem\ShopItem::collection($shopItems);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
