@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-xl-3">
          <div class="card mt-5 customShadow">
            <div class="card-header"><h3 class="text-left">Mededelingen</h3></div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col">
                  <p class="text-justify m-0"> {{ Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }} </p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col">
                  <p class="text-justify mb-0">{{$announcement->text}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
          @if(!empty($role))
            <div class="card mt-5 customShadow">
              <div class="card-header"><h3 class="text-left">Admin dashboard</h3></div>
              <div class="card-body">
                <div class="row justify-content-end text-right">
                  <div class="col-md-5">
                    <a class="btn btn-danger text-right" href="{{ url('/dashboard') }}">Go to dashboard</a>
                  </div>
                </div>
              </div>
            </div>
          @endif




          @foreach($posts as $post)
            <div class="card  mt-5 customShadow">
                <div class="card-header">
                  <div class="row justify-content-between">
                    <div class="col-sm-8">
                      <a class="postTitle" href="{{'/post/'.$post->slug}}">
                        <h3 class="text-left">{{$post->title}}</h3>
                      </a>
                    </div>
                    <div class="col-sm-4">
                      <p class="text-right"> {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} </p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="text-justify">
                    <div id="slideshow" class="justify-content-center">
                      @if(!empty($post->photos))
                        @if(count($post->photos) > 0)
                          <img src="{{asset('storage/upload/'. $post->photos[0]->name)}}"  class="mySlidesP md-auto d-block slideshowPhoto">
                        @elseif($post->photos == null)
                        @endif
                      @endif
                    </div>
                    <p class="preserveLineBreak">{{$post->intro}}</p>
                    <a class="red" href="{{'/post/'.$post->slug}}">Lees verder...</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>


        <div class="col-md-3">
        </div>

    </div>
</div>
@endsection
