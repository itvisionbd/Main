@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Edit Parent Pages</h1>
      
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Parent Pages</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Parent Page Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" value="{{ $getRecord->parent_page_name }}" name="parent_page_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Parent Page</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>


  @endsection


