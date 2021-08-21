@if (isset($administrator))
    <form method="post" action="{{route('administrator.update', ['id' => '1'])}}">
@else
    <form method="post" action="{{route('administrator.store')}}">
@endif

    @csrf
    @method(isset($administrator) ? 'PUT' : 'POST')
    <input type="text" name="name" class="form-control" value="{{isset($administrator) ? $administrator->name : ''}}">
    <input type="email" name="email" class="form-control" value="{{isset($administrator) ? $administrator->email : ''}}">
    <input type="jabatan" name="jabatan" class="form-control" value="{{isset($administrator) ? $administrator->jabatan : ''}}">
</form>
