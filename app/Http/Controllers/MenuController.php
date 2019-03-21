<?php

namespace App\Http\Controllers;

use App\Menus;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menus::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
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
            'title_tr' => 'required',
            'title_eng' => 'required',
        ]);

        $menu = new Menus();
        $menu->title_tr = $request->input('title_tr');
        $menu->title_eng = request('title_eng');



        $menu->save();
        if ($menu) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(2000);
            return redirect()->route('menu.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }
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
        try {
            $menu = Menus::findOrFail($id);
            return view('admin.menu.edit', compact('menu'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('MenuController@index');
        }
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
        $menu = Menus::find($id);
        $menu->title_tr = $request->input('title_tr');
        $menu->title_eng = request('title_eng');

        $menu->save();

        if ($menu) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(1000);
            return redirect()->route('menu.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menus::destroy($id);

        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('menu.index');
    }
}
