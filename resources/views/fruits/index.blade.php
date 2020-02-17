@extends('layout.main')

@section('page-title', 'Homepage')

@section('content')

    <div class="container">
      <div class="row">
        <h1>Fruits</h1>
        <a class="btn btn-success" href="{{ route('fruits.create')}}">New Fruit</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Weight</th>
              <th scope="col">Type</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
        @forelse ($fruits as $fruit)
            <tbody>
              <tr>
                <td>{{$fruit->id}}</td>
                <td>{{$fruit->name}}</td>
                <td>{{$fruit->weight}}</td>
                <td>{{$fruit->type}}</td>
                <td>
                  <a class="btn btn-info" href="{{route('fruits.show', ['fruit' => $fruit->id])}}">show</a>
                  <a class="btn btn-warning" href="{{route('fruits.edit', ['fruit' => $fruit->id])}}">Modify</a>
                  <form class="d-inline" method="post" action="{{route('fruits.destroy', ['fruit' => $fruit->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </td>
              </tr>
            </tbody>
        @empty
            <tbody>
              <tr>
                <td>This is empty!</td>
              </tr>
            </tbody>
        @endforelse
        </table>
      </div>
    </div>


@endsection
