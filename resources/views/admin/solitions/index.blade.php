@extends('admin.template')

@section('content')

<div style="float: right;margin: 20px 0px 5px 0;">
    <a href="{{route('solitions.create')}}" class="btn btn-success"> Solitions Create
    </a>
</div>
<div style="clear: both;">
</div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Solitions Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>English Title</th>
                    <th>Description TR</th>
                    <th>Description ENG</th>
                    <th>Which Menu</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>


            @foreach($solitions as $solition)
                <tr class="gradeX">
                    <td>{{$solition->title_tr}}</td>
                    <td>{{$solition->title_eng}}</td>
                    <td>{!! Str::limit($solition->description_tr, 100) !!}</td>
                    <td>{!! $solition->description_en_for_datatable !!}</td>
                    <td>{!! $solition->getMenuName->title_eng !!}</td>
                    <td><a href="{{$solition->photo_path}}" target="_blank"><img src="{{$solition->photo_path}}" height="50" width="50" ></a></td>

                    <td class="center"><a href="{{route('solitions.edit',$solition->id)}}" class="btn btn-success btn-mini">Edit</a></td>
                    {!! Form::model($solitions,['route'=>['solitions.destroy',$solition->id],'method'=>'DELETE']) !!}
                    <td class="center">

                     <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                    </td>


                    {!! Form::close() !!}
                </tr>
            @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="/admin/css/uniform.css" />
    <link rel="stylesheet" href="/admin/css/select2.css" />
@endsection

@section('js')

    <script src="/admin/js/excanvas.min.js"></script>
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/jquery.ui.custom.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <script src="/admin/js/matrix.tables.js"></script>
@endsection
