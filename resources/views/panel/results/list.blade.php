@extends('panel.layouts.app')
  
@section('content')
    <div class="pagetitle">
      <div class="row">
        <div class="col-lg-6">
        <h1>Result</h1>
        </div>
        <div class="col-lg-6" style="text-align:right;">
         <form>
           <input type="text" name="search" id="search"  placeholder="Registraion no" onfocus="this.value=''">
           <input type="submit" name="submit" class="btn btn-primary" value="Search">
         </form>
        </div>
      </div>
    </div><!-- End Page Title -->
      @include('_message')
    <section class="section dashboard">
      <div class="row">
        <div id="search_list"></div>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


             


            <!-- Recent Sales -->
            <div class="col-12">
           


            </div><!-- End Recent Sales -->



          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
            $(document).ready(function(){
             $('#search').on('keyup',function(){
                 var query= $(this).val();
                 $.ajax({
                    url:"search",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
             });
             //end of ajax call
            });
            });
        </script>
  @endsection


