
{{session()->get('msg')}}

<form action="{{route('login_submit')}}" method="POST">
{{csrf_field()}}

   

    <input type="text"  name="username" value="{{old('username')}}" placeholder="username.."><br>
    @error('username')
    {{$message}}
    @enderror
    <input type="password"  name="password" value="{{old('password')}}" placeholder="password.."><br>
    @error('password')
    {{$message}}
    @enderror

    <input type="submit" class="btn btn-success" value="login"><br>
</form>