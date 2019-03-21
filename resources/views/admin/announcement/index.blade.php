@extends('admin.template')

@section('content')

    <div style="float: right;margin: 20px 0px 5px 0;">
        <a href="{{url('admin/announcement/create')}}" class="btn btn-success"> Announcement Create
        </a>
    </div>
    <div style="clear: both;">
    </div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>News Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>English Title</th>
                    <th>Description TR</th>
                    <th>Description ENG</th>
                    <th>Photo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($announcements as $announcement)
                    <tr class="gradeX">
                        <td>{{$announcement->title_tr}}</td>
                        <td>{{$announcement->title_eng}}</td>
                        <td>{!! Str::limit($announcement->description_tr, 100) !!}</td>
                        <td>{!! $announcement->description_en_for_datatable !!}</td>
                        <td><a href="{{$announcement->photo_path}}" target="_blank"><img src="{{$announcement->photo_path}}" height="100" width="100" ></a></td>

                        <td class="center"><a href="{{route('announcement.edit',$announcement->id)}}" class="btn btn-success btn-mini">Edit</a></td>
                        {!! Form::model($announcement,['route'=>['announcement.destroy',$announcement->id],'method'=>'DELETE']) !!}
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
