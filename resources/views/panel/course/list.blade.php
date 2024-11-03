@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Course List</h1>
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
                  <a class="btn btn-success" href="{{ url('panel/course/add')}}" >Add Course</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Course <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Title</th>
                        <th scope="col">Course Fee</th>
                        <th scope="col">Course Type</th>
                        <th scope="col">Course Instructor</th>
                        <th scope="col">Course File</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->course_title}}</td>
                        <td>{{ $value->course_fee}}</td>
                         <td> {{ $value->course_type}} 
                         <td> {{ $value->course_instructor}} 
                         <!-- <span class="badge bg-{{ $value->news_status ? 'success' : 'danger'}}">
                          {{ $value->news_status ? 'Publish' : 'UnPublish'}}</span> -->
                            
                          </td>
                        <td>
                          <iframe height="100"  width="100" src="{{ url('public/upload/' .$value->course_file) }}"></iframe>                          
                        </td>
                       
                        <td>{{ $value->course_status}}</td>
                        <td>
                          <a href="{{url('panel/course/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/course/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


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


