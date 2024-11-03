@extends('panel.layouts.app')
  
@section('content')
 <style>
    .ck-editor__editable_inline {
        min-height: 300px;
    }
    </style>
    <div class="pagetitle">
      <h1>Add Branch</h1>
      
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Branch</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Branch Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" value="{{ $getRecord->branch_name }}" name="branch_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Branch District</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" value="{{ $getRecord->branch_district }}" name="branch_district" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Short Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" value="{{ $getRecord->shortdescription }}" name="shortdescription" required>
                      {{ $getRecord->shortdescription }}
                    </textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Long Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control "  id="longdescription"  style="height: 100px" name="longdescription" required>
                      {{ $getRecord->longdescription }}
                    </textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Branch File</label>
                  <div class="col-sm-10">
                    <input type="file"  class="form-control" name="branch_file" required>
                    @if(!empty($getRecord->branch_file))
                    <img src="{{ url('public/upload/' .$getRecord->branch_file) }}" style="height:70px; width: auto;">
                      @endif
                  </div>

                          
                         
                </div>



                 <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    
                      <input class="form-check-input" type="radio" name="branch_status" id="branch_status" value="Publish" checked="">
                      <label class="form-check-label" for="branch_status">
                        Publish
                      </label>
                  
                   
                      <input class="form-check-input" type="radio" name="branch_status" id="branch_status" value="UnPublish">
                      <label class="form-check-label" for="branch_status">
                        UnPublish
                      </label>
                    

                  </div>
                </fieldset>




                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add New Branch</button>
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


