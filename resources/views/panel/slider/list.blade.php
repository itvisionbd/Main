@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>Slider List</h1>
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
                  <a class="btn btn-success" href="{{ url('panel/slider/add')}}" >Add Slider</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Slider <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Slider Name</th>
                        <th scope="col">Slider Descriptionslider</th>
                        <th scope="col">Slider Image</th>
                        <th scope="col">Slider Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->slider_title}}</td>
                        <td>{{ $value->slider_description}}</td>
                        <td>
                          @if(!empty($value->slider_file))
                          <img src="{{ url('public/upload/' .$value->slider_file) }}" style="height:70px;">
                          @endif
                          
                        </td>
                        <td>{{ $value->slider_status}}</td>
                        <!-- <td>{!! $value->longdescription !!}</td> -->
                        <td>{{ $value->created_at}}</td>
                        <td>
                          <a href="{{url('panel/slider/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/slider/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


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


