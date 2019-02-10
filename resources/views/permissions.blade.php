@extends('layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-9">
          <a class="red" href="/dashboard">Go back to the dashboard</a>
          <div class="card mt-3 customShadow">
            <div class="card-header"><h3>Permissions</h3></div>
            <div class="card-body">
              <form  action="/savePermission" method="POST">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                {{ csrf_field() }}

                <table id="manageTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Role</th>
                      <th scope="col">Created / Updated </th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($users as $index => $user)
                      <tr>
                        <th scope="row">{{ $user -> id }}</th>
                        <td>{{ $user -> name}}</td>
                        <td>{{ $user -> email}}</td>
                        <td>
                          <input type="text" name="user_id[]" style="display:none;" value="{{$user-> id}}">
                          <select class="" name="role[]">


                          @if(($user -> rolesPivot -> first() -> pivot -> role_id) == 1)
                            <option value="viewer" selected="selected">Viewer</option>
                            <option value="admin">Admin</option>
                          @else
                            <option value="viewer">Viewer</option>
                            <option value="admin" selected="selected">Admin</option>
                          @endif
                          </select>
                        </td>
                        <td>
                          {{$user -> created_at}} / {{$user -> updated_at }}
                        </td>
                        <td>
                          <a href="{{ url('/delete/user/'.$user->id)}}" class="btn btn-danger">Delete</a>
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
