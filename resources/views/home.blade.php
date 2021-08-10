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
<<<<<<< HEAD
        <form action="/entry/save" method="post" action="#">
=======
        <form action="/entry/save" method="post" action="#" class="form-group">
>>>>>>> d476bcc85577485d7ae783a8d52b455df6b06570

<!-- CROSS Site Request Forgery Protection -->
@csrf

<<<<<<< HEAD
<div class="form-group">
=======
{{--  <div class="form-group">
>>>>>>> d476bcc85577485d7ae783a8d52b455df6b06570
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
<<<<<<< HEAD
</div>
<br/>
<div class="form-group">

<input type="submit" class="form-control" name="send" value="Submit">
</div>
        </form>
    
=======
</div>  --}}

<div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Name</label>
    <div class="col-sm-8">
      <input type="test" class="form-control" id="name" name="name" placeholder="Name">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="posturl" class="col-sm-4 col-form-label">Post URL</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="posturl" name="url" placeholder="Post URL">
    </div>
  </div>


<br/>
<div class="form-group">
<input type="submit" class="form-control" name="send" value="Submit">
</div>
</form>

>>>>>>> d476bcc85577485d7ae783a8d52b455df6b06570
        </div>

    </div>




</main>

@endsection


@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<<<<<<< HEAD
  
=======

>>>>>>> d476bcc85577485d7ae783a8d52b455df6b06570

@endsection
