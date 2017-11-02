<form method = "POST" enctype="multipart/form-data" action="UploadFile" >
	{!! csrf_field() !!}
	File:<input id="file" name="file" type="file">
	<input type="submit">
</form>
