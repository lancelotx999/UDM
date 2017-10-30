

@section('content')
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<style> /* set the CSS */

	.line {
	  fill: none;
	  stroke: steelblue;
	  stroke-width: 2px;
	}

</style>

<form action="{{url('fileCRUD/store')}}" method="post"" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <input type="file" name="uploadedfile" id="uploadedfile">
    <input type="submit" value="Upload CSV" name="submit">


</form>


