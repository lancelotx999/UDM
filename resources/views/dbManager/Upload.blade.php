@extends('layouts.app')

@section('content')

<div class="row bottom-space">
    <div class="col-xs-12 col-sm-12">

    <h1><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Db Upload Feature</h1><hr />

    <p>Upload a CSV file to the database.</p>

    <form method = "POST" enctype="multipart/form-data" action="UploadDB" value ="" >
    	{!! csrf_field() !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<p>Choose File:</p>
        <p><input id="file" name="file" type="file"></p><hr />
    	<p><input type="submit" /></p>
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

@endsection
