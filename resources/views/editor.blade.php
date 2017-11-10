@extends('layouts.app')

@section('content')

<br />

<div class="row">
    <div class="col-xs-12 col-sm-12">
    	<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="{{ url('/svg-edit/svg-editor.html') }}"></iframe>
		</div>
	</div>
</div>

@endsection