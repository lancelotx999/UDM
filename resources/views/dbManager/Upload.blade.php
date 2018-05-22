@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">

        <br />

        <h1><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Db Upload Feature</h1>

        <hr />

        <h4>Upload a CSV file to the database.</h4>

        <form method = "POST" enctype="multipart/form-data" action="UploadDB" value ="" >
        	{!! csrf_field() !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<p>Choose File:</p>
            <p><input id="file" name="file" type="file" files="true" required="required"></p><hr />
        	<p><input type="submit" value="Upload File" /></p>
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

        </div>
    </div>
</div>

@endsection
