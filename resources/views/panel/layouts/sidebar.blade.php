<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @php
      $PermissionUser = App\Models\PermissionRoleModel::getPermission('User', Auth::user()->role_id);
      $PermissionRole = App\Models\PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
      $PermissionNews = App\Models\PermissionRoleModel::getPermission('News', Auth::user()->role_id);
      $PermissionNotice = App\Models\PermissionRoleModel::getPermission('Notice', Auth::user()->role_id);
      $PermissionAdmissionForm = App\Models\PermissionRoleModel::getPermission('Admission Form', Auth::user()->role_id);
      $PermissionExamRoutine = App\Models\PermissionRoleModel::getPermission('Exam Routine', Auth::user()->role_id);
      $PermissionResults = App\Models\PermissionRoleModel::getPermission('Results', Auth::user()->role_id);
      $PermissionCourse = App\Models\PermissionRoleModel::getPermission('Course', Auth::user()->role_id);
      $PermissionSession = App\Models\PermissionRoleModel::getPermission('Session', Auth::user()->role_id);
      $PermissionBranch = App\Models\PermissionRoleModel::getPermission('Branch', Auth::user()->role_id);
      $PermissionCategory = App\Models\PermissionRoleModel::getPermission('Category', Auth::user()->role_id);
      $PermissionSubCategory = App\Models\PermissionRoleModel::getPermission('Sub Category', Auth::user()->role_id);
      $PermissionSuccessFullTrainee = App\Models\PermissionRoleModel::getPermission('SuccessFull Trainee', Auth::user()->role_id);
      $PermissionMember = App\Models\PermissionRoleModel::getPermission('Member', Auth::user()->role_id);
      $PermissionPagesParent = App\Models\PermissionRoleModel::getPermission('Pages Parent', Auth::user()->role_id);
      $PermissionPages = App\Models\PermissionRoleModel::getPermission('Pages', Auth::user()->role_id);


      $PermissionSettings = App\Models\PermissionRoleModel::getPermission('Settings', Auth::user()->role_id);
      $PermissionHeaderSetting = App\Models\PermissionRoleModel::getPermission('Header Setting', Auth::user()->role_id);
      $PermissionFooterSetting = App\Models\PermissionRoleModel::getPermission('Footer Setting', Auth::user()->role_id);
      $PermissionMinistrySettings = App\Models\PermissionRoleModel::getPermission('Ministry Settings', Auth::user()->role_id);
      $PermissionSlider = App\Models\PermissionRoleModel::getPermission('Slider', Auth::user()->role_id);
      
      
      @endphp

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='dashboard') collapsed @endif" href="{{ url('panel/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      @if(!empty($PermissionUser))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='user') collapsed @endif"  href="{{ url('panel/user')}}">
          <i class="bi bi-people"></i><span>User</span>
        </a>
        
      </li><!-- End Components Nav -->
      @endif
      @if(!empty($PermissionRole))

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='role') collapsed @endif"  href="{{ url('panel/role')}}">
          <i class="bi bi-key"></i><span>User Role</span>
        </a>
        
      </li><!-- End Forms Nav -->

       @endif

      @if(!empty($PermissionNews)) 

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='news') collapsed @endif" href="{{ url('panel/news')}}">
          <i class="bi bi-megaphone"></i><span>News</span>
        </a>
      </li><!-- End Forms Nav --> 

      @endif

      @if(!empty($PermissionNotice))

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='notice') collapsed @endif" href="{{ url('panel/notice')}}">
          <i class="bi bi-pin-angle"></i><span>Notice</span>
        </a>
      </li><!-- End Forms Nav --> 

      @endif
      @if(!empty($PermissionAdmissionForm))

            <li class="nav-item">
              <a class="nav-link @if(Request::segment(2) !='admission') collapsed @endif" href="{{ url('panel/admission')}}">
                <i class="bi bi-journal-text"></i><span>Admission Form</span>
              </a>
            </li><!-- End Forms Nav --> 

            @endif
        @if(!empty($PermissionExamRoutine))

                    <li class="nav-item">
                      <a class="nav-link @if(Request::segment(2) !='examroutine') collapsed @endif" href="{{ url('panel/examroutine')}}">
                        <i class="bi bi-journal-text"></i><span>Exam Routine</span>
                      </a>
                    </li><!-- End Forms Nav --> 

                    @endif
     @if(!empty($PermissionResults))

                <li class="nav-item">
                  <a class="nav-link @if(Request::segment(2) !='results') collapsed @endif" href="{{ url('panel/results')}}">
                    <i class="bi bi-journal-text"></i><span>Results</span>
                  </a>
                </li><!-- End Forms Nav --> 

                @endif

                @if(!empty($PermissionCourse))

                <li class="nav-item">
                  <a class="nav-link @if(Request::segment(2) !='course') collapsed @endif" href="{{ url('panel/course')}}">
                    <i class="bi bi-journal-text"></i><span>Course</span>
                  </a>
                </li><!-- End Forms Nav --> 

                @endif
          @if(!empty($PermissionSession))

          <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !='session') collapsed @endif" href="{{ url('panel/session')}}">
              <i class="bi bi-journal-text"></i><span>Session</span>
            </a>
          </li><!-- End Forms Nav --> 

          @endif

          @if(!empty($PermissionBranch))

          <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !='branch') collapsed @endif" href="{{ url('panel/branch')}}">
              <i class="bi bi-journal-text"></i><span>Branch</span>
            </a>
          </li><!-- End Forms Nav --> 

          @endif

          @if(!empty($PermissionSuccessFullTrainee))

          <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !='role') collapsed @endif" href="{{ url('panel/category')}}">
              <i class="bi bi-journal-text"></i><span>SuccessFull Trainee</span>
            </a>
          </li><!-- End Forms Nav --> 

          @endif

          @if(!empty($PermissionMember))

          <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !='role') collapsed @endif" href="{{ url('panel/category')}}">
              <i class="bi bi-journal-text"></i><span>Member</span>
            </a>
          </li><!-- End Forms Nav --> 

          @endif

      @if(!empty($PermissionSubCategory))

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='role') collapsed @endif" href="{{ url('panel/subcategory')}}">
          <i class="bi bi-journal-text"></i><span>Sub Category</span>
        </a>
        
      </li><!-- End Forms Nav -->
      @endif
      <li class="nav-heading">Pages</li>
      

      @if(!empty($PermissionPagesParent))

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='pages') collapsed @endif" href="{{ url('panel/pages/parent')}}">
          <i class="bi bi-journal-text"></i><span>Pages Parent</span>
        </a>
        
      </li><!-- End Forms Nav -->
      @endif

@if(!empty($PermissionPages))

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='pages') collapsed @endif" href="{{ url('panel/pages')}}">
          <i class="bi bi-journal-text"></i><span>Pages</span>
        </a>
        
      </li><!-- End Forms Nav -->
      @endif




      <li class="nav-heading">Settings</li>

     
      @if(!empty($PermissionHeaderSetting))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='header') collapsed @endif" href="{{ url('panel/setting/header')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Header Setting</span>
        </a>
      </li><!-- End Blank Page Nav -->
      @endif

      @if(!empty($PermissionFooterSetting))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='footer') collapsed @endif" href="{{ url('panel/setting/footer')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Footer Setting</span>
        </a>
      </li><!-- End Blank Page Nav -->
      @endif

      @if(!empty($PermissionMinistrySettings))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='ministry') collapsed @endif" href="{{ url('panel/setting/ministry')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Ministry Settings</span>
        </a>
      </li><!-- End Blank Page Nav -->
      @endif

      @if(!empty($PermissionSlider))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='slider') collapsed @endif" href="{{ url('panel/slider')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Slider</span>
        </a>
      </li><!-- End Blank Page Nav -->
      @endif

      @if(!empty($PermissionSettings))
      <li class="nav-heading">Settings</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('panel/setting')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Settings</span>
        </a>
      </li><!-- End Blank Page Nav -->

       @endif







      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('logout')}}">
          <i class="bi bi-box-arrow-right"></i>
          <span>LogOut</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>