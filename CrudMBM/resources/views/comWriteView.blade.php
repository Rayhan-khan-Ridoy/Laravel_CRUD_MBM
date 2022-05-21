<form action="comWriteView_submit" method="POST">
    {{@csrf_field()}}
    <input type="text"  name="cname" value="{{old('cname')}}" placeholder="cname.."><br>
    <input type="text"  name="address" value="{{old('address')}}" placeholder="address.."><br>
    <input type="text"  name="uniqueword" value="{{old('uniqueword')}}" placeholder="uniqueword.."><br>

    <input type="submit" class="btn btn-success" value="Submit"><br>
</form>