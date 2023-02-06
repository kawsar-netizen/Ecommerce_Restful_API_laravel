<?php

namespace App\Http\Controllers;

use App\Models\Model\View;
use App\Models\Model\Product;
use App\Http\Requests\StoreViewRequest;
use App\Http\Requests\UpdateViewRequest;
use App\Http\Resources\ViewResource;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {

        return ViewResource::collection($product->views);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreViewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show(View $view)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\View  $view
     * @return \Illuminate\Http\Response
     */
    public function edit(View $view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateViewRequest  $request
     * @param  \App\Models\Model\View  $view
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViewRequest $request, View $view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\View  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy(View $view)
    {
        //
    }
}
