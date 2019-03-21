<?php

namespace App\Http\Controllers;

use App\Menus;
use App\Solitions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolitionsController extends Controller
{
    private $rules = [
        'description_tr' => 'required|string|min:10',
        'description_en' => 'required|string|min:10',
        'title_en' => 'required|string|min:10',
        'title_tr' => 'required|string|min:10'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solitions = Solitions::all();
        $menus = Menus::get(['id', 'title_eng']);
        return view('admin.solitions.index', compact('solitions','menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menus::all();
        return view('admin.solitions.create',compact('menus'));

    }


    public function store(Request $request)
    {



        $request->validate([
            'title_tr' => 'required',
            'title_eng' => 'required',
            'description_tr' => 'required',
            'description_en' => 'required',
            'photo_path' => 'required',
            'menu_id' => 'required',
        ]);

        $solitions = new Solitions();
        $solitions->title_tr = $request->input('title_tr');
        $solitions->title_eng = request('title_eng');
        $solitions->description_tr = request('description_tr');
        $solitions->description_en = request('description_en');
        $solitions->menu_id = request('menu_id');


        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/uploads/dosyalar', request()->file('photo_path'));
            $solitions->photo_path = $path;
        }
        $solitions->save();
        if ($solitions) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(2000);
            return redirect()->route('solitions.index');

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $solitions = Solitions::findOrFail($id);
            $menus = Menus::all();
            return view('admin.solitions.edit', compact('solitions','menus'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SolitionsController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $solitions = Solitions::find($id);
        $solitions->title_tr = $request->input('title_tr');
        $solitions->title_eng = request('title_eng');
        $solitions->description_tr = strip_tags(request('description_tr'));
        $solitions->description_en = strip_tags(request('description_en'));
        $solitions->menu_id = request('menu_id');
        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/uploads/dosyalar', request()->file('photo_path'));
            $solitions->photo_path = $path;
            /*
            if($photo->isValid()){
                $photo_target_file = 'uploads/dosyalar';
                $file_path = $photo_target_file.'/'.$file_name;
                $photo->move($photo_target_file,$file_name);
                $news->photo_path = $file_path;
            }
            */
        }

        $solitions->save();

        if ($solitions) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(1000);
            return redirect()->route('solitions.index');

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Solitions::destroy($id);

        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('solitions.index');


    }
}
