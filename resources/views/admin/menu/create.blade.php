@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>News Create Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>['menu.store'],'method'=>'POST','class'=>'widget-content nopadding']) !!}
                        <div class="control-group">
                            <label class="control-label">Turkish Menu Title :</label>
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
                            <label class="control-label">English Menu Title :</label>
                            <div class="controls">
                                <input type="text" class="span11"  name="title_eng" value="{{old('title_eng')}}" />
                            </div>
                            @if($errors->has('title_eng'))
                                <p class="alert alert-danger">
                                    {{$errors->first('title_eng')}}
                                </p>
                            @endif
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
