<?php

    namespace App\Http\Controllers;

    use App\References;
    use Illuminate\Http\Request;

    class ReferencesController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $references = References::all();

            return view('admin.references.index', compact('references'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('admin.references.create');
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

            $references = new References();
            $references->title_tr = $request->input('title_tr');
            $references->title_eng = request('title_eng');
            $references->employers = request('employers');



            $references->save();
            if ($references) {
                alert()
                    ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                    ->autoClose(2000);
                return redirect()->route('references.index');

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
                $references = References::findOrFail($id);
                return view('admin.references.edit', compact('references'));
            } catch (ModelNotFoundException $exception) {
                return redirect()->action('ReferencesController@index');
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

            $references = References::find($id);
            $references->title_tr = $request->input('title_tr');
            $references->title_eng = request('title_eng');
            $references->employers = request('employers');

            $references->save();

            if ($references) {
                alert()
                    ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                    ->autoClose(1000);
                return redirect()->route('references.index');

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
            References::destroy($id);

            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(1000);
            return redirect()->route('references.index');
        }
    }
