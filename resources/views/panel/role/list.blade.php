@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <h1>User List</h1>
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
                  @if(!empty($PermissionAdd))
                  <a class="btn btn-success" href="{{ url('panel/role/add')}}" >Add Role</a>
                 @endif
                </div>

                <div class="card-body">
                  <h5 class="card-title">User <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Date</th>
                        @if(!empty($PermissionEdit) || !empty($PermissionDelete))
                        <th scope="col">Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($getRecord as $value)
                      <tr>
                        <th scope="row">{{ $value->id}} </th>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->created_at}}</td>
                        <td>@if(!empty($PermissionEdit))
                          <a href="{{url('panel/role/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           @endif
                          @if(!empty($PermissionDelete))
                          <a href="{{url('panel/role/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                           @endif

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


