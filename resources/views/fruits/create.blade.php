@extends('layout.main')

@section('page-title', 'Add fruit')

@section('content')


    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <h1>Add new fruit</h1>
          <form method="post" action="{{ route('fruits.store')}}">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter fruit name">
            </div>
            <div class="form-group">
              <label for="weight">Weight</label>
              <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
            </div>
            <div class="form-group">
              <label for="Type">Type</label>
              <input type="text" class="form-control" id="type" name="type" placeholder="type">
            </div>
            <button type="submit" name="button" class="btn btn-primary">Enter</button>
          </form>
        </div>
      </div>
    </div>


@endsection
