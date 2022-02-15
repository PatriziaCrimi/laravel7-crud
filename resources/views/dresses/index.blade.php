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
        <a class="btn btn-dark float-right" href="{{route('dresses.create')}}">
          New Dress
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Size</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dresses as $key => $dress)
              <tr>
                <th scope="row">{{$dress->id}}</th>
                <td>{{$dress->name}}</td>
                <td>{{$dress->size}}</td>
                <td>{{number_format($dress->price, 2, ',', '.')}} &euro;</td>
                <td>
                  <a class="btn btn-info" href="{{route('dresses.show', ['dress' => $dress->id])}}">
                    Details
                  </a>
                  <a class="btn btn-light" href="{{route('dresses.edit', ['dress' => $dress->id])}}">
                    Edit
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Closing container -->
@endsection
