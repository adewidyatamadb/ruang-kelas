@extends('layout')

@section('page-title')
    Administrator
@endsection

@section('content')
    <div class="col-md-12">
        <a href="" class="btn btn-sm btn-primary float-right"><i class="ti-plus"></i> Add new administrator</a>
        <div class="clearfix"></div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrators as $administrator)
                    <tr>
                        <td>{{$administrator->id}}</td>
                        <td><a href="{{route('administrator.show', ['id' => $administrator->id])}}">{{$administrator->name}}</a></td>
                        <td>{{$administrator->email}}</td>
                        <td>{{$administrator->jabatan}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
