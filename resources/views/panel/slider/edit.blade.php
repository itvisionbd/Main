@extends('panel.layouts.app')
  
@section('content')

    <div class="pagetitle">
      <h1>Edit Slider</h1>
      
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Slider</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Slider Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" value="{{ $getRecord->slider_title }}" name="slider_title" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Slider Description</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" value="{{ $getRecord->slider_description }}" name="slider_description" required>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Slider File</label>
                  <div class="col-sm-10">
                    <input type="file"  class="form-control" name="slider_file" value="{{ $getRecord->slider_file }}">
                    @if(!empty($getRecord->slider_file))
                    <img src="{{ url('public/upload/' .$getRecord->slider_file) }}" style="height:70px; width: auto;">
                      @endif
                  </div>

                          
                         
                </div>



                 <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Slider Status</legend>
                  <div class="col-sm-10">
                    
                      <input class="form-check-input" type="radio" name="slider_status" id="slider_status" value="Publish" checked="">
                      <label class="form-check-label" for="slider_status">
                        Publish
                      </label>
                  
                   
                      <input class="form-check-input" type="radio" name="slider_status" id="slider_status" value="UnPublish">
                      <label class="form-check-label" for="slider_status">
                        UnPublish
                      </label>
                    

                  </div>
                </fieldset>




                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Slider</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>

  

  @endsection


