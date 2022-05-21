<form action="empWriteView_submit" method="POST">
{{csrf_field()}}
    <input type="text"  name="name" value="{{old('name')}}" placeholder="name.."><br>
    <input type="text"  name="position" value="{{old('position')}}" placeholder="position.."><br>
    <input type="text"  name="city" value="{{old('city')}}" placeholder="city.."><br>
    <input type="radio"  name="cname_id" value="{{1}}"><input type="radio"  name="cname_id" value="{{2}}"><br>

    <input type="submit" class="btn btn-success" value="Submit"><br>
</form>