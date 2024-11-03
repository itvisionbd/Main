@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Session List</h1>
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
                  <a class="btn btn-success" href="{{ url('panel/session/add')}}" >Add Session</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Session <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Session Title</th>
                        <th scope="col">Notice Status</th>
                        <th scope="col">Creted at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->session_title}}</td>
                        <td>{{ $value->session_status}}</td>
                        <td>{{ $value->created_at}}</td>
                        <td>
                          <a href="{{url('panel/session/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/session/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


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


