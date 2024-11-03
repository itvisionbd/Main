@extends('panel.layouts.app')
  
@section('content')

<style>
    .ck-editor__editable_inline {
        min-height: 300px;
    }
    </style>




 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="pagetitle">
      <h1>Add Slider</h1>
      
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Slider</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Slider Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="slider_title" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Slider Description</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="slider_description" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Slider File</label>
                  <div class="col-sm-10">
                    <input type="file"  class="form-control" name="slider_file" required>
                  </div>
                </div>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
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
                    <button type="submit" class="btn btn-primary">Add New Slider</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>

  
  
    <script>
            ClassicEditor.create( document.querySelector( '#longdescription' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  @endsection


