<form method = "POST" enctype="multipart/form-data" action="UploadFile" >
	{!! csrf_field() !!}
	File:<input id="file" name="file" type="file">
	<input type="submit">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif