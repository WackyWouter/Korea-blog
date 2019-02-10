@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
      <div class="col-md-9">
          <div class="card mt-5 customShadow">
            <div class="card-header"><h3>Admin dashboard</h3></div>
            <div class="card-body">

              <h5 >Roles</h5>
              <hr class="blackLine">
              <div class="row justify-content-start ">
                <div class="col-6">
                  <a class="btn btn-danger" href="{{ url('/permissions') }}">Change Permissions</a>
                </div>
              </div>


              <h5 class="mt-5">Add Stuff</h5>
              <hr class="blackLine">
              <div class="row justify-content-start ">
                <div class="col-6">
                  <a class="btn btn-danger" href="{{ url('/addPost') }}">Add Post</a>
                </div>
                <div class="col-6 text-right">
                  <a class="btn btn-danger " href="{{ url('/addPhoto') }}">Add Photo</a>
                </div>
              </div>

              <h5 class="mt-5">Announcement</h5>
              <hr class="blackLine">
              <div class="row justify-content-start ">
                <div class="col-6">
                  <a class="btn btn-danger" href="{{ url('/addAnnouncement') }}">Change Announcement</a>
                </div>
              </div>

              <h5 class="mt-5">Manage</h5>
              <hr class="blackLine">
              <div class="row justify-content-start ">
                <div class="col-6">
                  <a class="btn btn-danger" href="{{ url('/manage/posts') }}">Manage Posts</a>
                </div>
                <div class="col-6 text-right">
                  <a class="btn btn-danger " href="{{ url('/manage/photos') }}">Manage Photos</a>
                </div>
              </div>

            </div>
          </div>
      </div>
  </div>
</div>


@endsection
