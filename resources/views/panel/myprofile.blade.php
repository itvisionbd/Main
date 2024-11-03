@extends('panel.layouts.app')
  
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="pagetitle">
      <h1>Profile</h1>
    </div><!-- End Page Title -->
 @include('_message')
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img  class="wd-80 rounded-circle" src=" {{ (!empty($getRecord->photo)) ? url('public/upload/' .$getRecord->photo) : url('public/upload/no_image.jpg') }}" alt="profile">
              <h2>{{Auth::user()->name}}</h2>
              <div class="social-links mt-2">
                <div class="row">
                    <div class="col-lg-4 col-md-4 label ">Name</div>
                    <div class="col-lg-8 col-md-8">Kevin Anderson</div>
                  </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">



                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
              </ul>
              <div class="tab-content pt-2">


                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form  method="POST" action="" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">

                        <img id="showImage" class="wd-80 rounded-circle" src=" {{ (!empty($getRecord->photo)) ? url('public/upload/' .$getRecord->photo) : url('public/upload/no_image.jpg') }}" alt="profile">

                        
                        <div class="pt-2">
                          <input name="photo" type="file" placeholder="Chose Profile Pic" class="form-control" id="image" value="{{ $getRecord->photo }}">
                          
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="name" class="col-md-4 col-lg-3 col-form-label"> Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="name" value="{{ $getRecord->name }}">
                      </div>
                    </div>

                  

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="{{ $getRecord->address }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="{{ $getRecord->phone }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{ $getRecord->email }}" readonly>
                      </div>
                    </div>

                  

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
              </div><!-- End Bordered Tabs -->

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


