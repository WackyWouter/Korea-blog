@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-9">
        <a class="red" href="/dashboard">Go back to the dashboard</a>
        <div class="card mt-3 customShadow">
          <div class="card-header"><h3>Posts</h3></div>
          <div class="card-body">
            <form  action="/updatePhotos" method="POST">
              <meta name="csrf-token" content="{{ csrf_token() }}">
              {{ csrf_field() }}
              <table id="manageTable" class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Size</th>
                    <th scope='col'>Post_id</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($photos as $index => $photo)
                    <tr>
                      <th scope="row">{{ $photo -> id }}</th>
                      <td>{{ $photo -> name }}</td>
                      <td>{{ $photo -> size }}</td>
                      <td>
                        <input type="text" name='id[]' style="display:none;" value="{{$photo -> id}}" >
                        <input type="number" name="post_id[]" min=0>
                        @if (($photo -> post_id) == null)
                          <span>Null</span>
                        @else
                          <span>{{$photo -> post_id}}</span>
                        @endif

                      </td>
                      <td>
                        <a href="{{ url('/delete/photo/'.$photo->id)}}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>

                  @endforeach
                </tbody>
              </table>

              <button class="btn btn-danger float-right" type="submit" >Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
</div>

@endsection
