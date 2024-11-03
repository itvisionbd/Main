@extends('panel.layouts.app')
  
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="pagetitle">
      <h1>Edit Role</h1>
      
    </div><!-- End Page Title -->


    <section class="section" style="height: 60vh;">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Role</h5>

              <!-- General Form Elements -->
              <form action="" method="post">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Role Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $getRecord->name}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Permission All</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="checkDefaultmain">
                      <label class="form-check-label" for="checkDefaultmain">
                        Select All
                      </label>
                    </div>


                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="display: block; margin-bottom: 20px;"> <b>Permission</b></label>
                 
                  @foreach($getPermission as $value)

                  <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-2">
                      {{ $value['name'] }}
                    </div>

                    <div class="col-md-10">
                      <div class="row">
                        @foreach($value['group'] as $group)
                          @php
                          $checked = '';
                          @endphp

                          @foreach($getRolePermission as $role)

                          @if($role->permission_id == $group['id'])

                          @php
                          $checked = 'checked';
                          @endphp
                          @endif
                           @endforeach
                        <div class="col-md-3">
                          <label><input type="checkbox" {{$checked}} value="{{ $group['id'] }}" name="permission_id[]">{{ $group['name'] }}</label>
                        </div>
                        @endforeach
                      </div>
                      
                    </div>

                  </div>
                  <hr>
                  @endforeach

                </div>


                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Role</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>

  
    <script type="text/javascript">
    $('#checkDefaultmain').click(function(){
      if($(this).is(':checked')){
        $('input[ type=checkbox]').prop('checked',true);
      }else{
         $('input[ type=checkbox]').prop('checked',false);
      }
    })
  </script>

  @endsection


