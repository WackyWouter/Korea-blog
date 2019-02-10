@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 p-5">
      <h4 class="text-center">{{ $exception -> getMessage() }}</h4>

    </div>

  </div>
</div>


@endsection
