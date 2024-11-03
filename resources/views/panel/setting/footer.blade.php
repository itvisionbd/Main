@extends('panel.layouts.app')
  
@section('content')
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
                  <label for="inputText" class="col-sm-2 col-form-label"> Copyright</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->copyright }}"  class="form-control" name="copyright" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Phone</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->phone }}"  class="form-control" name="phone" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Fb Page Link</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->fb_page }}"  class="form-control" name="fb_page" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Youtube link</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->youtube }}"  class="form-control" name="youtube" required>
                  </div>
                </div>


                


                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Footer</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>





  @endsection


