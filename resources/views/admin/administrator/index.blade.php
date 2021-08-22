@extends('layout')

@section('content')
    <div class="col-md-12">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col"><h4 class="card-title">Administrator</h4></div>
                    <div class="col"><a href="{{route('administrator.create')}}" class="float-right btn btn-sm btn-primary"><i class="ti-plus"></i> Add new administrator</a>
                    <div class="clearfix"></div></div>
                </div>


                {{-- <p class="card-description">
                  Add class <code>.table-hover</code>
                </p> --}}
                <div class="table-responsive">
                  <table class="table table-hover">
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
                            <td><a href="{{route('administrator.edit', ['id' => $administrator->id])}}">{{$administrator->name}}</a></td>
                            <td>{{$administrator->email}}</td>
                            <td>{{$administrator->jabatan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
