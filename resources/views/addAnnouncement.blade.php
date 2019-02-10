@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <a class="red" href="/dashboard">go back to the dashboard</a>
      <div class="card mt-3 customShadow">
        <div class="card-header">
          <h3>Update Announcement</h3>
        </div>
        <div class="card-body">

          <form method="POST" action="/saveAnnouncement">

            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="announcement"><h5>Announcement</h5></label>
              <textarea name="announcement" class="form-control" id="exampleFormControlTextarea1"  rows="3">{{$announcement->text}}</textarea>
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
