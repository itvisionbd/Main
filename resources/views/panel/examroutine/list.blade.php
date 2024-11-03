@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Exam Routine List</h1>
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
                  <a class="btn btn-success" href="{{ url('panel/examroutine/add')}}" >Add Exam Routine</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Exam Routine <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Routine</th>
                        <th scope="col">Course</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Session</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Centre</th>                        
                        <th scope="col">Status</th>                        
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->routine_title}}</td>
                        <td>{{ $value->course_id}}</td>
                         <td> {{ $value->branch_id}} 
                         <td> {{ $value->session_id}} 
                         <td> {{ $value->exam_date}} 
                         <td> {{ $value->exam_time}}</td>
                         <td> {{ $value->exam_centre}}</td>                                    
                        <td>{{ $value->exam_status}}</td>
                        <td>
                          <a href="{{url('panel/examroutine/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/examroutine/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


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


