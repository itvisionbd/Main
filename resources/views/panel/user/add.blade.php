@extends('panel.layouts.app')
  
@section('content')

    <div class="pagetitle">
      <h1>Add User</h1>
      
    </div><!-- End Page Title -->
    <section class="section" style="height: 60vh;">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New User</h5>
                @include('_message')
              <!-- General Form Elements -->
              <form action="" method="post">
                   {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> User Name</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ old('name') }}" class="form-control" name="name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> User Email</label>
                  <div class="col-sm-10">
                    <input type="email" value="{{ old('email') }}" class="form-control" name="email" required>
                    <div style="color:red">{{ $errors->first('email')}}</div>

                  </div>
                </div>

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> User Password</label>
                  <div class="col-sm-10">
                    <input type="password"  class="form-control" name="password" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Branch</label>
                  <div class="col-sm-10">
                   <select class="form-control" name="role_id" required>
                     <option value="">Select Branch</option>
                     @foreach($getBranch as $value)
                     <option {{ (old('branch_id') == $value->id)? 'selected' :'' }}  value="{{ $value->id}}">{{ $value->branch_name}}</option>
                     @endforeach
                   </select>
                  </div>
                </div>

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> User Role</label>
                  <div class="col-sm-10">
                   <select class="form-control" name="role_id" required>
                     <option value="">Select Role</option>
                     @foreach($getRole as $value)
                     <option {{ (old('role_id') == $value->id)? 'selected' :'' }}  value="{{ $value->id}}">{{ $value->name}}</option>
                     @endforeach
                   </select>
                  </div>
                </div>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    
                      <input class="form-check-input" type="radio" name="status" id="status" value="Active" checked="">
                      <label class="form-check-label" for="status">
                        Active
                      </label>                  
                      <input class="form-check-input" type="radio" name="status" id="branch_status" value="Inactive">
                      <label class="form-check-label" for="status">
                        Inactive
                      </label>                  
                  </div>
                </fieldset>


                <div class="row mb-3">
                  
                  <div class="col-sm-2"></div>

                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add New User</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

  
      </div>
    </section>

  
  

  @endsection


