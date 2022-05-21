<form action="{{route('comEditView_submit')}}" method="POST">
{{csrf_field()}}

    <input type="hidden"  name="id" value="{{$com->id}}" ><br>

    <input type="text"  name="cname" value="{{$com->cname}}" placeholder="cname.."><br>
    <input type="text"  name="address" value="{{$com->address}}" placeholder="address.."><br>
    <input type="text"  name="uniqueword" value="{{$com->uniqueword}}" placeholder="uniqueword.."><br>
   

    <input type="submit" class="btn btn-success" value="Submit"><br>
</form>