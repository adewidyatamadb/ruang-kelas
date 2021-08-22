@if (isset($administrator))
    <form method="post" action="{{route('administrator.update', ['id' => $administrator->id])}}" class="forms-sample needs-validation" novalidate>
@else
    <form method="post" action="{{route('administrator.store')}}" class="forms-sample needs-validation" novalidate>
@endif

    @csrf
    @method(isset($administrator) ? 'PUT' : 'POST')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name', isset($administrator) ? $administrator->name : '')}}" autocomplete="off" placeholder="Name" required>
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email', isset($administrator) ? $administrator->email : '')}}" autocomplete="off" placeholder="Email" required>
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="jabatan" name="jabatan" class="form-control {{$errors->has('jabatan') ? 'is-invalid' : ''}}" value="{{old('jabatan', isset($administrator) ? $administrator->jabatan : '')}}" autocomplete="off" placeholder="Jabatan" required>
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('jabatan')}}
            </div>
        @endif
    </div>
    <button type="submit" class="mr-2 btn btn-primary">Submit</button>
    <a href="{{route('administrator.index')}}" class="btn btn-light">Cancel</a>
    @if (isset($administrator))
        <a href="#!" class="float-right btn btn-danger" onclick="deleteData()">Delete</a>
        <div class="clearfix"></div>
    @endif
</form>

@if (isset($administrator))
    <form action="{{route('administrator.delete', ['id' => $administrator->id])}}" method="post" id="deleteForm">
        @method('DELETE')
        @csrf
    </form>
@endif


