@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Dresses List</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Color</th>
              <th scope="col">Size</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Season</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dresses as $key => $dress)
              <tr>
                <th scope="row">{{$dress->id}}</th>
                <td>{{$dress->name}}</td>
                <td>{{$dress->color}}</td>
                <td>{{$dress->size}}</td>
                <td>{{$dress->description}}</td>
                <td>{{$dress->price}}</td>
                <td>{{$dress->season}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Closing container -->
@endsection
