@extends('layout.main')

@section('page-title'. 'Fruit details')

@section('content')
<div class="container">
  <div class="row">
    <div class="card w-75 mx-auto">
      <div class="card-body">
        <h5 class="card-title">{{$fruit->id}}: {{$fruit->name}}</h5>
        <p class="card-text">Weight: {{$fruit->weight}}</p>
        <p class="card-text">Type: {{$fruit->type}}</p>
        <p class="card-text">Created at: {{$fruit->created_at}}</p>
        <p class="card-text">Updated_at: {{$fruit->updated_at}}</p>
        <a href="{{ route('fruits.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
  </div>
</div>


@endsection
