@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <h3 class="alert alert-success">
            Congratulations, the upload was a success!
        </h3>

        <hr />

        <h3>You'll be redirected back to the previous page in <span class="count" id="5"></span> seconds.</h3>

        <hr />
            
    </div>
</div>

<script type="text/javascript">

function count() {
    var number = $('.count').attr('id');
    var count = number;
    $('.count').text(count);
    setInterval(function(){
        count--;
        if(count > 0){
            $('.count').text(count);
        }
        if(count == 0){
            $('.count').text(0);
        }
    },1000);
}

// Start
count();

// Loop
setInterval(function() {
    count();
},5000);

</script>

@php

header("refresh:5; url=/upload");

@endphp

@endsection
