@extends('layouts.app')

@section('content')

<style type="text/css">

	.hide {
		visibility: hidden;
	}

</style>

<br />

<div class="row">
    <div class="col-xs-12 col-sm-12">
    	<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="{{ url('/svg-edit/svg-editor.html') }}"></iframe>
		</div>
	</div>
</div>

<div class="hide">

@foreach (new DirectoryIterator(public_path('assets')) as $fileInfo)
    @php
    if ($fileInfo->isDot()) continue;
    @endphp
    <a href="/assets/{{ $fileInfo->getFilename() }}">{{ $fileInfo->getFilename() }}</a>
@endforeach

</div>

@endsection