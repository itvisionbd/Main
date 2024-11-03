@extends('panel.layouts.app')
  
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="pagetitle">
      <h1>Edit Header</h1>
      
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Header</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ministry One</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->ministry_one_title }}"  class="form-control" name="ministry_one_title" required>
                  </div>
                </div>

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ministry One Logo</label>
                  <div class="col-sm-10">
                    <input type="file"  value="{{ $getRecord->ministry_one_pic }}" class="form-control" name="ministry_one_pic" >
                    <img height="100"   width="100" src="{{ url('public/upload/' .$getRecord->ministry_one_pic) }}">
                   
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ministry Two</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->ministry_two_title }}"  class="form-control" name="ministry_two_title" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ministry Two Logo</label>
                  <div class="col-sm-10">
                    <input type="file"  value="{{ $getRecord->ministry_two_pic }}" class="form-control" name="ministry_two_pic" >
                    <img height="100"   width="100" src="{{ url('public/upload/' .$getRecord->ministry_two_pic) }}">
                   
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ministry Three</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->ministry_three_title }}"  class="form-control" name="ministry_three_title" required>
                  </div>
                </div>

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ministry Three Logo</label>
                  <div class="col-sm-10">
                    <input type="file"  value="{{ $getRecord->ministry_three_pic }}" class="form-control" name="ministry_three_pic" >
                    <img height="100"   width="100" src="{{ url('public/upload/' .$getRecord->ministry_three_pic) }}">
                   
                  </div>
                </div>
              


                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Ministry</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>

  <script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function (e) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
  




  @endsection


