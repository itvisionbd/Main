@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>News List</h1>
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
                  <a class="btn btn-success" href="{{ url('panel/news/add')}}" >Add News</a>
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent News <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">News Title</th>
                        <th scope="col">Branch</th>
                        <th scope="col">News Status</th>
                        <th scope="col">News File</th>
                        <th scope="col">Creted at</th>
                        
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->news_title}}</td>
                        <td>{{ $value->branch_id}}</td>
                         <td>{{ $value->news_status}}
                          <!-- @if($value->news_status  = 'Publish')
                          <span class="badge bg-success">Active</span>
                          @elseif($value->news_status  = 'unpublish')
                          <span class="badge bg-danger">InActive</span>
                          @endif -->
                          


                        </td>
                        <td>
                         <iframe height="100"  width="100" src="{{ url('public/upload/' .$value->news_file) }}"></iframe>
                          
                        </td>
                       
                       
                        <td>{{ $value->created_at}}</td>
                        <td>
                          <a href="{{url('panel/news/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                          <a href="{{url('panel/news/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>


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


