@extends('home.layouts.app')
@section('content')


   
    <!--====== BODY PART START ======-->
    
    <section id="blog-page" class="pt-10 pb-120 gray-bg">
        <div class="container">
           <div class="row">

               <div class="col-lg-8">
                <h3>{{ $getRecord->pages_name }}</h3>
                  <div class="blog-details mt-30">
                      <div class="thum">

                          <img src="{{ url('public/upload/' .$getRecord->pages_file)}}" class="img-fluid" alt="Responsive image">
                      </div>
                      <div class="cont">
                          

                           <p>{!! $getRecord->longdescription !!}</p>
                      </div> <!-- cont -->
                  </div> <!-- blog details -->
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
                                         @foreach($getNews as $sliderData)
                                        <li><a href="{{ $sliderData->id }}">{{ $sliderData->news_title }}</a></li>
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