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
      <h1>Edit Exam Routine</h1>
      
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit New Exam Routine</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post" >
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Routine Title</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->routine_title}}"  class="form-control" name="routine_title" required>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Course </label>
                  <div class="col-sm-10">
                   <select class="form-control" name="course_id" required>
                     <option value="">Select</option>
                     @foreach($getCourse as $value)
                     <option {{ ($getRecord->course_id  == $value->id) ? 'selected' : '' }}  
                      value="{{ $value->id}}">{{ $value->course_title}}</option>
                     @endforeach
                     
                   </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Branch </label>
                  <div class="col-sm-10">
                   <select class="form-control" name="branch_id" required>
                     <option value="">Select</option>
                       @foreach($getBranch as $value)
                     <option {{ ($getRecord->branch_id  == $value->id) ? 'selected' : '' }}  
                      value="{{ $value->id}}">{{ $value->branch_name}}</option>
                     @endforeach
                     
                   </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Session </label>
                  <div class="col-sm-10">
                   <select class="form-control" name="session_id" required>
                     <option value="">Select</option>
                     @foreach($getSession as $value)
                     <option {{ ($getRecord->session_id  == $value->id) ? 'selected' : '' }}  
                      value="{{ $value->id}}">{{ $value->session_title}}</option>
                     @endforeach
                     
                   </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Date</label>
                  <div class="col-sm-10">
                    <input type="date" value="{{ $getRecord->exam_date}}" class="form-control" name="exam_date" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Time</label>
                  <div class="col-sm-10">
                    <input type="time" value="{{ $getRecord->exam_time}}"  class="form-control" name="exam_time" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Centre</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $getRecord->exam_centre}}"  class="form-control" name="exam_centre" required>
                  </div>
                </div>

                
          
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Routine Status</legend>
                  <div class="col-sm-10">                    
                      <input class="form-check-input" type="radio" name="exam_status" id="exam_status" value="Active" checked="">
                      <label class="form-check-label" for="exam_status">
                        Active
                      </label>                                     
                      <input class="form-check-input" type="radio" name="exam_status" id="exam_status" value="InActive">
                      <label class="form-check-label" for="exam_status">
                        InActive
                      </label>       
                  </div>
                </fieldset>

                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Routine</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>

  
  
    <script>
            ClassicEditor.create( document.querySelector( '#news_longdescription' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  @endsection


