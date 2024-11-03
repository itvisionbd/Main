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
                  <label for="inputText" class="col-sm-2 col-form-label"> Main Title</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->main_title }}"  class="form-control" name="main_title" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Description</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->description }}"  class="form-control" name="description" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Email</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->email }}"  class="form-control" name="email" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Address</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->address }}"  class="form-control" name="address" required>
                  </div>
                </div>

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Main Logo</label>
                  <div class="col-sm-10">
                    <input type="file" id="image" value="{{ $getRecord->main_logo }}" class="form-control" name="main_logo" >
                    <img height="100" id="showImage"  width="100" src="{{ url('public/upload/' .$getRecord->main_logo) }}">
                   
                  </div>
                </div>
                



                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Fevicon</label>
                  <div class="col-sm-10">
                    <input type="file"  value="{{ $getRecord->favicon_icon }}" class="form-control" name="favicon_icon" >
                    <img height="100"  width="100" src="{{ url('public/upload/' .$getRecord->favicon_icon) }}">
                   
                  </div>
                </div>
                


                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Header</button>
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


