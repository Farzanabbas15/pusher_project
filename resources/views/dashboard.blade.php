@extends('layouts.master')
@include('layouts.inc.nav')

@section('content')
  <!-- Dashboard -->
  <section class="container mt-4">
    <div class="container-fluid">
      <div class="row justify-contect-center">
        <div class="col-12 col-sm-6 col-md-6">
          <div class="form-container">
            <h2 class ="text-center bg-dark p-2 text-white">Add Text Listing</h2>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Enter Title">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" 
              placeholder="Enter Description"></textarea>

              <button type="submit" class="btn btn-dark btn-block">Submit</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection



