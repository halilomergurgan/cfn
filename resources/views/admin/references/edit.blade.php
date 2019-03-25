@extends('admin.template')

@section('content')

    <div class="row-fluid">
        <div class="span">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Employer Edit Page</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($references,['route'=>['references.update',$references->id],'method'=>'PUT','files'=>'true','class'=>'widget-content nopadding']) !!}
                    <div class="control-group">
                        <label class="control-label">Turkish Title :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="title_tr" value="{{$references->title_tr}}" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">English Title :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="title_eng" value="{{$references->title_eng}}"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Employe :</label>
                        <div class="controls">
                            <input type="text" class="span11"  name="employers" value="{{$references->employers}}"/>
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
