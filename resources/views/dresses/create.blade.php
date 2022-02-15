@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Add a new dress</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="" action="{{route('dresses.store')}}" method="post">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="name">Name</label>
            <input required type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter the dress name">
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input required type="text" name="color" class="form-control" id="color" aria-describedby="color" placeholder="Enter a color">
          </div>
          <div class="form-group">
            <label for="size">Size</label>
            <input required type="text" name="size" class="form-control" id="size" aria-describedby="size" placeholder="Enter the size">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input required type="number" name="price" class="form-control" id="price" aria-describedby="price" step="0.01">
          </div>
          <div class="form-group">
            <label for="season">Season</label>
            <select class="" name="season">
              <option value="">--select--</option>
              <option value="spring">spring</option>
              <option value="summer">summer</option>
              <option value="autumn">autumn</option>
              <option value="winter">winter</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
