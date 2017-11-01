<form action="uploadFile" method="post"" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <input type="file" name="uploadedfile" id="uploadedfile">
    <input type="submit" value="Upload CSV" name="submit">


</form>


