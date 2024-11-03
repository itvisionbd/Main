@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Branch List</h1>
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
                  <a class="btn btn-success" href="{{ url('panel/branch/add')}}" >Add Branch</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Branch <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Branch District</th>
                        <th scope="col">Branch Image</th>
                        <th scope="col">Branch Status</th>
                        <th scope="col">Creted at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->branch_name}}</td>
                        <td>{{ $value->branch_district}}</td>
                        <td>
                          @if(!empty($value->branch_file))
                          <img src="{{ url('public/upload/' .$value->branch_file) }}" style="height:70px;">
                          @endif
                          
                        </td>
                        <td>{{ $value->branch_status}}</td>
                        <!-- <td>{!! $value->longdescription !!}</td> -->
                        <td>{{ $value->created_at}}</td>
                        <td>
                          <a href="{{url('panel/branch/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/branch/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


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


