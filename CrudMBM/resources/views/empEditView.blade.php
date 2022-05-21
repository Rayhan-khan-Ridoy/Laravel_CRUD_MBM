<form action="{{route('empEditView_submit')}}" method="POST">
{{csrf_field()}}

    <input type="hidden"  name="id" value="{{$emp->id}}" ><br>

    <input type="text"  name="name" value="{{$emp->name}}" placeholder="name.."><br>
    <input type="text"  name="position" value="{{$emp->position}}" placeholder="position.."><br>
    <input type="text"  name="city" value="{{$emp->city}}" placeholder="city.."><br>
    <input type="radio"  name="cname_id" value="{{1}}">1<input type="radio"  name="cname_id" value="{{2}}">2<br>

    <input type="submit" class="btn btn-success" value="Submit"><br>
</form>