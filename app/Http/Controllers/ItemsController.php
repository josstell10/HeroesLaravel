<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = item::all();
        return view('admin.items.index', ['items'=> $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->saveItem($request, null);
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
        $item = item::find($id);
        return view('admin.items.edit',['item'=>$item]);
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
        return $this->saveItem($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = item::find($id);
        $item->delete();
        return redirect()->route('items.index');
    }

    public function saveItem(Request $request, $id)
    {
        if ($id){
            $item = item::find($id);
        }else {
            $item = new item();
        }
        $item->name = $request->input('name');
        $item->hp = $request->input('hp');
        $item->atq = $request->input('atq');
        $item->def = $request->input('def');
        $item->luck = $request->input('luck');
        $item->cost = $request->input('cost');

        $item->save();

        return redirect()->route('items.index');
    }
}
