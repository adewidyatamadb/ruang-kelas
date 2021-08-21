@if (isset($administrator))
    <form method="post" action="{{route('administrator.update', ['id' => $administrator->id])}}">
@else
    <form method="post" action="{{route('administrator.store')}}">
@endif

    @csrf
    @method(isset($administrator) ? 'PUT' : 'POST')
    <input type="text" name="name" class="form-control" value="{{old('name', isset($administrator) ? $administrator->name : '')}}">
    <input type="email" name="email" class="form-control" value="{{old('email', isset($administrator) ? $administrator->email : '')}}">
    <input type="jabatan" name="jabatan" class="form-control" value="{{old('jabatan', isset($administrator) ? $administrator->jabatan : '')}}">
</form>
