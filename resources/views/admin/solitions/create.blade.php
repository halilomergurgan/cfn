@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Solutions Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['solitions.store'],'method'=>'POST','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Menu Type</label>
                        <div class="controls">
                            <select name="menu_id">
                                @foreach($menus as $menu)
                                    <option value="{{$menu->id}}">{{$menu->title_eng}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('description_en'))
                            <p class="alert alert-danger">
                                {{$errors->first('description_en')}}
                            </p>
                        @endif
                    </div>
                        <div class="control-group">
                            <label class="control-label">Turkish Title :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="title_tr" value="{{old('title_tr')}}" />
                            </div>
                            @if($errors->has('title_tr'))
                                <p class="alert alert-danger">
                                    {{$errors->first('title_tr')}}
                                </p>
                            @endif
                        </div>
                        <div class="control-group">
                            <label class="control-label">English Title :</label>
                            <div class="controls">
                                <input type="text" class="span11"  name="title_eng" value="{{old('title_eng')}}" />
                            </div>
                            @if($errors->has('title_eng'))
                                <p class="alert alert-danger">
                                    {{$errors->first('title_eng')}}
                                </p>
                            @endif
                        </div>
                        <div class="control-group">
                            <label class="control-label">Turkish Description</label>
                            <div class="controls">
                                <textarea name="description_tr" id="description_tr-ckeditor" required>{{old('description_tr')}}</textarea>
                            </div>
                            @if($errors->has('description_tr'))
                                <p class="alert alert-danger">
                                    {{$errors->first('description_tr')}}
                                </p>
                            @endif
                        </div>
                        <div class="control-group">
                            <label class="control-label">English Description</label>
                            <div class="controls">
                                <textarea name="description_en" id="description_en-ckeditor" required>{{old('description_en')}}</textarea>
                            </div>
                            @if($errors->has('description_en'))
                                <p class="alert alert-danger">
                                    {{$errors->first('description_en')}}
                                </p>
                            @endif
                        </div>
                        <div class="control-group">
                            <label class="control-label">Photo</label>
                            <div class="controls">
                                <input type="file" class="span11" name="photo_path" />
                                @if($errors->has('photo_path'))
                                    <p class="alert alert-danger">
                                        {{$errors->first('photo_path')}}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description_tr-ckeditor' );
    </script>
    <script>
        CKEDITOR.replace( 'description_en-ckeditor' );
    </script>
@endsection
