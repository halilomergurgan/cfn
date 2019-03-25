@extends('admin.template')

@section('content')

<div style="float: right;margin: 20px 0px 5px 0;">
    <a href="{{route('references.create')}}" class="btn btn-success"> Reference Create
    </a>
</div>
<div style="clear: both;">
</div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>References Table</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Turkish Title</th>
                    <th>English Title</th>
                    <th>Employe</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

            @foreach($references as $reference)
                <tr class="gradeX">
                    <td>{{$reference->title_tr}}</td>
                    <td>{{$reference->title_eng}}</td>
                    <td>{{$reference->employers}}</td>
                    <td class="center"><a href="{{route('references.edit',$reference->id)}}" class="btn btn-success btn-mini">Edit</a></td>
                    {!! Form::model($reference,['route'=>['references.destroy',$reference->id],'method'=>'DELETE']) !!}
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
