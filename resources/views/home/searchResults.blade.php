


  @extends('home.layouts.app')
@section('content')

    <!--====== BODY PART START ======-->
    
  <section id="blog-page" class="pt-10 pb-120 gray-bg">
        <div class="container">
           <div class="row">

        <div class="col-lg-8 pt-15" style="text-align: center;">
             
                         <h1>Search Results for "{{ $query }}"</h1>

                       




    @if($results->isEmpty())
        <p>Your result has not been published.</p>
        <p><a href="{{ url('/certificateverify')}}">Search Again </a></p>

 @else

            @foreach($results as $result)
             <div class="blog-details mt-30">
                      <div class="cont">
                        <table class="table table-striped table-bordered">
                            <h2 class="text-center">Result</h2>
                          <thead>
                            <tr>
                              <th scope="col">Registration Number:</th>
                              <th scope="col">{{ $result->registrationNo }}</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Image</th>
                              <td> <img src="{{ (!empty($result->applicantImage)) ? url('public/upload/' .$result->applicantImage) : url('public/upload/no_image.jpg') }}" alt="Logo" height="100" width="100">
                               </td>
                            </tr>
                            <tr>
                              <th scope="row">Name:</th>
                              <td>{{ $result->student_name }}</td>
                            </tr>

                            <tr>
                              <th scope="row">Father’s Name:</th>
                              <td>{{ $result->father_name }}</td>
                            </tr>

                            <tr>
                              <th scope="row">Mother’s Name:</th>
                              <td>{{ $result->mother_name }}</td>
                            </tr>

                            <tr>
                              <th scope="row">Branch:</th>
                              <td>{{ $result->branch_id }}</td>
                            </tr>

                            <tr>
                              <th scope="row">Course:</th>
                              <td>{{ $result->course_id }}</td>
                            </tr>

                            
                            <tr>
                              <th scope="row">Session:</th>
                              <td>{{ $result->session_id }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Year:</th>
                              <td>{{ $result->year }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Result:</th>
                              <td>{{ $result->result }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Issued by:</th>
                              <td>{{ $result->admissionUnder }}</td>
                            </tr>
                          </tbody>
                        </table>
                        <h2 class="text-center"><a href="{{ url('/certificateverify')}}">Search Again </a></h2>
                      </div> <!-- cont -->
                  </div> <!-- blog details -->
               
                     
                    <p></p>
               
            @endforeach


    @endif
                      </div>

               
               <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="categories mt-30">
                                   <h4>নোটিশ / বিজ্ঞপ্তি</h4>
                                   <ul>
                                     <marquee behavior="scroll" direction="up" scrollamount="1">
                                        @php
                                        $getNews = App\Models\NewsModel::getNewsMenu();
                                        @endphp
                                         @foreach($getNews as $NewsData)
                                        <li><a href="{{ url('/newsdetails/'.$NewsData->id)}}">{{ $NewsData->news_title }}</a></li>
                                        @endforeach
                                   </marquee>
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="categories mt-30">
                                   <h4>ই-সেবা সমূহ</h4>
                                   <ul >
                                    <li><a href="https://services.nidw.gov.bd/" target="_blank">জাতীয় পরিচয়পত্রের নিবন্ধন ও তথ্য হালনাগাদকরণ</a></li>
                                    <li><a href="http://bris.lgd.gov.bd/pub/?pg=application_form" target="_blank">জন্ম ও মৃত্যু নিবন্ধন</a></li>
                                    <li><a href="http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a" target="_blank">অনলাইনে পাসপোর্টের আবেদন</a></li>
                                    <li><a href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction" target="_blank">ভিসা যাচাই</a></li>                            
                                    <li><a href="http://xn--d5by7bap7cc3ici3m.xn--54b7fta0cc/" target="_blank">উত্তরাধিকার ক্যালকুলেটর</a></li>                            
                                        </ul>

                               </div>
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="categories mt-30">
                                   <h4>গুরুত্বপূর্ণ লিংক</h4>
                                  <ul >                                
                                    <li class="item_1"><a href="http://services.portal.gov.bd/" target="_blank" style="color:red">সেবাকুঞ্জ</a></li>
                                    <li class="item_2"><a href="http://www.infokosh.gov.bd/" target="_blank">ই্ তথ্য কোষ</a></li>
                                    <li class="item_3"><a href="https://www.teachers.gov.bd/" target="_blank">শিক্ষক বাতায়ন</a></li>
                                    <li class="item_4"><a href="http://www.bangladesh.gov.bd/" target="_blank">বাংলাদেশ জাতীয় ওয়েব পোর্টাল</a></li>
                                     <li class="item_4"><a href="http://www.forms.gov.bd/" target="_blank">বাংলাদেশ ফরম</a></li>
                                </ul>
                               </div>
                           </div> <!-- categories -->

                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BODY PART ENDS ======-->

   
    <!--====== PATNAR LOGO PART START ======-->
    
    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ url('')}}/assets/frontend/images/patnar-logo/p-1.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ url('')}}/assets/frontend/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ url('')}}/assets/frontend/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ url('')}}/assets/frontend/images/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ url('')}}/assets/frontend/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ url('')}}/assets/frontend/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 
    



  @endsection