@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-10">
        <a class="red" href="/dashboard">Ga terug to the dashboard</a>
          <div class="card mt-3 customShadow">
            <div class="card-header"><h5>New Post</h5></div>

            <div class="card-body p-5">
              <form enctype="multipart/form-data" method="POST" action="{{ route('upload.post')}}">

                <meta name="csrf-token" content="{{ csrf_token() }}">
                 {{ csrf_field() }}

                <div class="form-row">
                  <div class="form-group col-sm-3">
                    <label for="title">Titel</label>
                  </div>
                  <div class="form-group col-sm-9">
                    <input type="text" class="form-control" name="title" placeholder="Put title here">
                    <span class="ml-2">Make sure the title is unique</span>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-3">
                    <label for="intro">Intro for homepage</label>
                  </div>
                  <div class="form-group col-sm-9">
                    <textarea name="intro" class="form-control" rows="8" cols="80" placeholder="Intro..."></textarea>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-3">
                    <label for="text">Story</label>
                  </div>
                  <div class="form-group col-sm-9">
                    <textarea name="text" class="form-control" rows="8" cols="80" placeholder="Story..."></textarea>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-3">
                    <label for="file1">Image</label>
                  </div>
                  <div class="form-group col-sm-9">
                    <input type='file' name="file[]" multiple="true" class="form-control-file" >
                  </div>
                </div>



                <div class="form-row justify-content-end text-right">
                  <div class="form-group col-6">
                    <button class="btn btn-danger" type="submit" >Submit</button>
                  </div>

                </div>

                <hr>






              </form>
            </div>
          </div>
      </div>
    </div>
  </div>

</div>







@endsection
