@extends('layouts.app')

@section('title')
    @lang('title.IMAVITA_home')
@stop

@section('content')

<main class="container-class">
    <div id="app" class="main-img">
        <div class="iamavita" id="iamavita">
            <img class="screen1" src="/images/iamavita/iamavita_web.png">
            <img class="screen2 hide" src="/images/iamavita/iamavita_web.png">
             <img class="screen3 hide" src="/images/iamavita/iamavita_web.png">
             <img class="screen4 hide" src="/images/iamavita/iamavita_web.png">
            <img class="screen5 hide" src="/images/iamavita/iamavita_web.png">
            <img class="screen6 hide" src="/images/iamavita/iamavita_web.png">
            <img class="screen6 hide" src="/images/iamavita/iamavita_web.png">
            <img class="screen7 hide" src="/images/iamavita/iamavita_web.png">
            <img class="screen8 hide" src="/images/iamavita/iamavita_web.png">
            <img class="screen9 hide" src="/images/iamavita/iamavita_web.png">
        </div>
    </div>

        <div class="model">
            <img class="demo" src="/images/iamavita/model.png">

        </div>


        <div class="contact-form">
        @if(session()->has('message'))
        <div class="alert alert-success">
        {{ session()->get('message') }}
        </div>
        @endif
        <form action="/entry/save" method="post" action="#">

<!-- CROSS Site Request Forgery Protection -->
@csrf

<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="email">
</div>

<div class="form-group">
    <label>Post url</label>
    <input type="text" class="form-control" name="url" id="url">
</div>
<br/>
<div class="form-group">

<input type="submit" class="form-control" name="send" value="Submit">
</div>
        </form>
    
        </div>

    </div>




</main>

@endsection


@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  

@endsection
