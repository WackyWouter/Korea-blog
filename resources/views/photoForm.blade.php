@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-10">
        <a class="red" href="/dashboard">Go back to the dashboard</a>
          <div class="card mt-3 customShadow">
            <div class="card-header"><h5>New Photo's</h5></div>
            <div class="card-body">
              <form enctype="multipart/form-data" method="POST" action="{{ route('upload.file')}}">

                <meta name="csrf-token" content="{{ csrf_token() }}">
                {{ csrf_field() }}

                <div id="filesDiv">

                  <h5 class="pb-3">Photos</h5>

                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="file1">Images</label>
                    </div>
                    <div class="form-group col-md-9">
                      <input type='file' name="file[]" multiple="true" class="form-control-file" >
                    </div>
                  </div>

                </div>

                <div class="form-row justify-content-end text-right">
                  <div class="form-group col-6">
                    <button class="btn btn-danger" type="submit" >Submit</button>
                  </div>

                </div>

              </form>

            </div>
          </div>
      </div>
  </div>
</div>

@endsection
