@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <a class="red" href="/home">Ga terug</a>
      <div class="card mt-5 customShadow">
        <div class="card-header">
          <div class="row justify-content-between">
            <div class="col-md-10">
              <h3 class="text-left">Verander account gegevens</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="text-justify">
            <form method="POST" action="/saveAccount">

              <meta name="csrf-token" content="{{ csrf_token() }}">
              {{ csrf_field() }}

              <div class="form-row">
                <div class="form-group col-sm-3">
                  <label for="email1">Email adres</label>
                </div>

                <div class="form-group col-sm-9">
                  <input type="email" name="email" class="form-control" id="changeEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-sm-3">
                  <label for="changePassword">Wachtwoord</label>
                </div>

                <div class="form-group col-sm-9">
                  <input type="password" name="changePassword" class="form-control" id="changePassword" value="">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-sm-3">
                  <label for="changeMeldingen">Mail lijst</label>
                </div>

                <div class="form-group col-sm-9">
                  <select class="" name="changeMeldingen">
                    @if($user->onMailingList == "True")
                      <option value="True" selected="selected">Ingeschreven</option>
                      <option value="False" >Uitgeschreven</option>
                    @else
                      <option value="True" >Ingeschreven</option>
                      <option value="False" selected="selected">Uitgeschreven</option>
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-row justify-content-end text-right">
                <div class="form-group col-6">
                  <button class="btn btn-danger" type="submit" >Verzenden</button>
                </div>
              </div>

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
