
@php
$MinistryData = App\Models\MinistryModel::find(1);
@endphp
   
   <header id="header-part">

<div class="header-top d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-contact text-lg-left text-center">
                    <ul>
                        <li><img src="{{ url('')}}/assets/frontend/images/all-icon/map.png" alt="icon"><span>{{$headerData->address}}</span></li>
                        <li><img src="{{ url('')}}/assets/frontend/images/all-icon/email.png" alt="icon"><span>{{$headerData->email}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-opening-time text-lg-right text-center">
                    <p>Opening Hours : Saturay to Thursday - 9 Am to 5 Pm</p>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header top -->

<div class="header-logo-support pt-15 pb-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="border-right: 5px solid green;">
			<div class="row">
			<div class="col-lg-2 col-md-2">
                <div class="logo">
               
                    <a href="{{ url('/')}}">
                        <img src="{{ (!empty($headerData->main_logo)) ? url('public/upload/' .$headerData->main_logo) : url('public/upload/no_image.jpg') }}" alt="Logo" height="100" width="100">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 text-center">
                <div class="support-button d-block d-md-block ">
                    <h6 class="info1">{{$headerData->main_title}}</h6>
                    <h6 class="info2">{{$headerData->description}}</h6>
                    <h6 class="info3">Registerd Under Societies <br>(Act XXI of 1860) Reg. No. S-7397 (586)/8</h6>
                   
                </div>
            </div>
			   </div>
			</div>
			
			<div class="col-lg-4">
			
			<div class="row mb-3">
            <div class="col-lg-12 col-md-10 text-center">
                <div class="support-button d-block d-md-block ">
                     <h6 class="info2" style="color: mediumblue;">A joint program with </h6>
                </div>
            </div>
			   </div>
			   
			   <div class="row">
			<div class="col-lg-3 col-md-6">
                <div class="logo" style="text-align:right;">
                    <img src="{{ (!empty($MinistryData->ministry_one_pic)) ? url('public/upload/' .$MinistryData->ministry_one_pic) : url('public/upload/no_image.jpg') }}" alt="Logo" height="50" width="50">
                </div>
            </div>
            <div class="col-lg-9 col-md-6 text-center">
                <div class="support-button d-block d-md-block " style="text-align:left;">
                     <h6 class="info3">{{$MinistryData->ministry_one_title}}</h6>
            
                </div>
            </div>
			   </div>
			   
			   <div class="row">
			<div class="col-lg-3 col-md-6">
                <div class="logo" style="text-align:right;">
                   
                        <img src="{{ (!empty($MinistryData->ministry_two_pic)) ? url('public/upload/' .$MinistryData->ministry_two_pic) : url('public/upload/no_image.jpg') }}" alt="Logo" height="50" width="50">
                        
                </div>
            </div>
            <div class="col-lg-9 col-md-6 text-center">
                <div class="support-button d-block d-md-block " style="text-align:left;">
                     <h6 class="info3">{{$MinistryData->ministry_two_title}}</h6>
            
                </div>
            </div>
			   </div>
			   
			   <div class="row">
			<div class="col-lg-3 col-md-6">
                <div class="logo" style="text-align:right;">
                    <img src="{{ (!empty($MinistryData->ministry_three_pic)) ? url('public/upload/' .$MinistryData->ministry_three_pic) : url('public/upload/no_image.jpg') }}" alt="Logo" height="50" width="50">
                </div>
            </div>
            <div class="col-lg-9 col-md-6 text-center">
                <div class="support-button d-block d-md-block " style="text-align:left;">
                     <h6 class="info3">{{$MinistryData->ministry_three_title}}</h6>
            
                </div>
            </div>
			   </div>
			   
			</div>
        </div> <!-- row -->
		
		
    </div> <!-- container -->
</div> <!-- header logo support -->

<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-9 col-8">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @php
                    $getAboutpages = App\Models\PagesModel::getParentMenu();
                    @endphp
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="active" href="{{ url('/')}}">Home</a>
                                
                            </li>
                             
                            <li class="nav-item">
                                <a href="#">About us</a>
                                <ul class="sub-menu">
                                    @foreach($getAboutpages as $Aboutpages)
                                    <li><a href="{{ url('/page/'.$Aboutpages->id)}}">{{ $Aboutpages->pages_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @php
                    $getCourse = App\Models\CourseModel::getCourseMenu();
                    @endphp
                            <li class="nav-item">
                                <a href="#">Courses</a>
                                <ul class="sub-menu">
                                     @foreach($getCourse as $Course)
                                    <li><a href="{{ url('/course/'.$Course->id)}}">{{ $Course->course_title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/news')}}">Result</a>
                            </li>
                            @php
                    $getBranch = App\Models\BranchModel::getBranchMenu();
                    @endphp
                            <li class="nav-item">
                                <a href="#">Branch</a>
                                <ul class="sub-menu">
                                     @foreach($getBranch as $Branch)
                                    <li><a href="{{ url('/branch/'.$Branch->id) }}">{{ $Branch->branch_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/certificateverify')}}">Certificate Verify</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/certificateverify')}}">Success Student</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Members</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/keyperson')}}">Key Person</a></li>
                                    <li><a href="{{ url('/staff')}}">Staff</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav> <!-- nav -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

</header>