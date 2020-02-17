@extends('layout.main')

@section('page-title', 'Edit fruit')

@section('content')


    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <h1>Edit new fruit</h1>
          <form method="post" action="{{ route('fruits.update', ['fruit' => $fruit->id])}}">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter fruit name" value="{{$fruit->name}}">
            </div>
            <div class="form-group">
              <label for="weight">Weight</label>
              <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" value="{{$fruit->weight}}">
            </div>
            <div class="form-group">
              <label for="Type">Type</label>
              <input type="text" class="form-control" id="type" name="type" placeholder="type" value="{{$fruit->type}}">
            </div>
            <button type="submit" name="button" class="btn btn-primary">Enter</button>
          </form>
        </div>
      </div>
    </div>


@endsection
