@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-9">
        <a class="red" href="/dashboard">Go back to the dashboard</a>
        <div class="card mt-3 customShadow">
          <div class="card-header"><h3>Posts</h3></div>
          <div class="card-body">
            <form  action="/updatePosts" method="POST">
              <meta name="csrf-token" content="{{ csrf_token() }}">
              {{ csrf_field() }}
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope='col'>Created / Updated</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($posts as $index => $post)
                    <tr>
                      <th scope="row">{{ $post -> id }}</th>
                      <td>
                        <input type="text" name="post_id[]" style="display:none;" value="{{$post-> id}}">
                        <input type="text" name="title[]" value="{{ $post -> title}}">
                      </td>
                      <td>{{ $post -> slug}}</td>
                      <td>
                        {{$post -> created_at}} / {{$post -> updated_at }}
                      </td>
                      <td>
                        <a href="{{ url('/delete/post/'.$post->id)}}" class="btn btn-danger">Delete</a>
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
