@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-9">
      <a class="red" href="/home">Ga terug</a>
      <div class="card mt-5 customShadow">
        <div class="card-header">
          <div class="row justify-content-between">
            <div class="col-md-4">
              <h3 class="text-left">{{$post->title}}</h3>
            </div>
            <div class="col-md-4">
              <p class="text-right"> {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} </p>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="text-justify">

            <div id="slideshow" class="justify-content-center">
              @if(!empty($photos))

                @foreach($photos as $index => $photo)
                  <img src="{{asset('storage/upload/'. $photo->name)}}"  class="mySlidesP md-auto slideshowPhoto">
                @endforeach
                @if(count($photos) > 1)
                  <div id="slideshowBtnDiv">
                    <a id="vorige" class="slideshowBtn" onclick="plusDivs(-1)">&#10094;</a>
                    <a id="volgende" class="slideshowBtn" onclick="plusDivs(1)">&#10095;</a>
                  </div>

                @endif
              @endif
            </div>


            <p>{{ $post -> intro }}</p>
            <p>{{ $post -> text }}</p>
          </div>
        </div>
      </div>

      <div class="card mt-5 customShadow">
        <div class="card-body">
          <form method="POST" action="/saveComment/{{$post->id}}">

            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="comment"><h5>Reacties</h5></label>
              <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-row justify-content-start">
              <div class="form-group col-2">
                <button class="btn btn-danger" type="submit" >Verzenden</button>
              </div>
            </div>
          </form>

          <hr class="">
          @foreach($comments as $comment)
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-sm-9">
                <h5 class="text-left">{{$comment->users()->first()->name}}</h3>
              </div>
              <div class="col-sm-3">
                <p class=" text-sm-left"> {{ Carbon\Carbon::parse($comment->created_at)->format('d/m/Y H:i') }} </p>
              </div>
            </div>

            <div class="row justify-content-start">
              <div class="col-sm-10">
                <p class="m-0">{{$comment-> text}} </p>
              </div>
              @if(!empty($role))
              <div class="col-sm-2">
                <a href="{{ url('/delete/comment/'.$post->id.'/'.$comment->id) }}" class="btn btn-danger float-right">Delete</a>
              </div>
              @endif
            </div>

          </div>
          <hr class="">
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n){
    showDivs(slideIndex += n);
  }

  function showDivs(n){
    var i;
    var x = document.getElementsByClassName('mySlidesP');
    if (n > x.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
      x[i].style.display = 'none';
    }
    x[slideIndex-1].style.display = 'block';
  }
</script>


@endsection
