<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    private $rules = [
        'description_tr' => 'required|string|min:10',
        'description_en' => 'required|string|min:10',
        'title_en' => 'required|string|min:10',
        'title_tr' => 'required|string|min:10'
    ];

    public function index()
    {
        $announcements = Announcement::all();
        return view('admin.announcement.index',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.announcement.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title_tr' => 'required',
            'title_eng' => 'required',
            'description_tr' => 'required',
            'description_en' => 'required',
            'photo_path' => 'required',
        ]);

        $announcement = new Announcement();
        $announcement->title_tr = $request->input('title_tr');
        $announcement->title_eng = request('title_eng');
        $announcement->description_tr = request('description_tr');
        $announcement->description_en = request('description_en');


        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/uploads/dosyalar', request()->file('photo_path'));
            $announcement->photo_path = $path;
        }
        $announcement->save();
        if ($announcement) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(2000);
            return redirect()->route('announcement.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        try {
            $announcement = Announcement::findOrFail($id);

            return view('admin.announcement.edit', compact('announcement'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('AnnouncementController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $announcements = Announcement::find($id);
        $announcements->title_tr = $request->input('title_tr');
        $announcements->title_eng = request('title_eng');
        $announcements->description_tr = strip_tags(request('description_tr'));
        $announcements->description_en = strip_tags(request('description_en'));
        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/uploads/dosyalar', request()->file('photo_path'));
            $announcements->photo_path = $path;
        }
        $announcements->save();

        if ($announcements) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(1000);
            return redirect()->route('announcement.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }
    }

    public function destroy($id)
    {
        Announcement::destroy($id);

        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('announcement.index');
    }
}
