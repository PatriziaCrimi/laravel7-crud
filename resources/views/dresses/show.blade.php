@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">Dettagli Vestito #{{$dress->id}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h2>{{$dress->name}}</h2>
        <ul>
          <li>
            <span class="font-weight-bold">Color:</span>
            {{$dress->color}}
          </li>
          <li>
            <span class="font-weight-bold">Size:</span>
            {{$dress->size}}
          </li>
          <li>
            <span class="font-weight-bold">Price:</span>
            {{number_format($dress->price, 2, ',', '.')}} &euro;
          </li>
          <li>
            <span class="font-weight-bold">Season:</span>
            {{$dress->season}}
          </li>
          <li>
            <span class="font-weight-bold">Description:</span>
            {{$dress->description}}
          </li>
        </ul>
      </div>
    </div>
  </div>  <!-- Closing container -->
@endsection
