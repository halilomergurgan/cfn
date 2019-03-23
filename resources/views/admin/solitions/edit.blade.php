@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Solutions Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($solitions,['route'=>['solitions.update',$solitions->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Which Menu</label>
                        <div class="controls">
                            <select name="menu_id">
                                <option value="{{$solitions->getMenuName->id}}" selected>{{$solitions->getMenuName->title_eng}}</option>
                                @foreach($menus as $menu)
                                    <option value="{{$menu->id}}">{{$menu->title_eng}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('title_eng'))
                            <p class="alert alert-danger">
                                {{$errors->first('title_eng')}}
                            </p>
                        @endif
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{$solitions->title_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Title :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="title_eng" value="{{$solitions->title_eng}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Turkish Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_tr', $solitions->description_tr, array('id' => 'description_tr-ckeditor'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Description</label>
                        <div class="controls">
                            {{ Form::textarea( 'description_en', $solitions->description_en, array('id' => 'description_en-ckeditor'))}}

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Photo</label>
                        <div class="controls">
                            <input type="file" class="span11" name="photo_path"  value="{{$solitions->photo_path}}"/>
                        </div>
                        <div class="controls">
                            <img src="{{$solitions->photo_path}}" height="100" width="100" >
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
