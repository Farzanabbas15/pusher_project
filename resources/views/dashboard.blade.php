@extends('layouts.master')
@include('layouts.inc.nav')

@section('content')
  <!-- Dashboard -->
  <section class="container mt-4">
    <div class="container-fluid">
      <div class="row justify-contect-center">
        <div class="col-12 col-sm-6 col-md-6">
          <form class="form-container">
            <h2 class ="text-center bg-dark p-2 text-white">Add Text Listing</h2>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Enter Title">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" 
              placeholder="Enter Description"></textarea>
            </div>

            <button type="submit" class="btn btn-dark btn-block save_btn">Submit</button>
            
          </form>
        </div>
      </div>

    </div>
  </section>
@endsection

@push('javascript')
<script>
  $(document).ready(function(){
    $('.save_btn').on('click', function(e){
      let title =$('#title').val();
      let description =$('#description').val();

      const form = $(this).parents('form');

      $(form).validate({
        rules: {
          title: {
            required: ture
          }
        },
        message:{
          title:"Title is required"
        },
        submitHandler:function(){
          var forData = new FormData(form[0]);

          $.ajax({
            type: 'POST',
            url: 'save_task',
            data: formData,
            processData: false,
            contentType: flase,
            success:function(data){
              
            }
          })
        }
      });
    });
  });
</script>
@endpush



