@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Student List List</h1>
      @include('_message')
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">




            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter" style="padding-right:30px ;">
                  <a class="btn btn-success" href="{{ url('panel/admission/add')}}" >Add Student List</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Student List <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Registraion</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Birth/Nid</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Mother Name</th>
                        <th scope="col">Phone</th>
                        
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <td>{{ $value->registrationNo}}</td>
                        <td>{{ $value->student_name}}</td>
                         <td> {{ $value->identityNo}} 
                         <td> {{ $value->father_name}} 
                         <td> {{ $value->mother_name}} 
                         <td> {{ $value->phone}} </td>                   
                        <td>
                          <a href="{{url('panel/admission/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/admission/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


                        </td>
                      </tr>
                      @endforeach
                      
                     
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>
  @endsection


