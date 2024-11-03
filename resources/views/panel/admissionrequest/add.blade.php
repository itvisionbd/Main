@extends('panel.layouts.app')
@section('content')
<style>
   .ck-editor__editable_inline {
   min-height: 300px;
   }
   #imagePreview {
   width: 110px;
   height: 110px;
   background-position: center center;
   background-size: cover;
   -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
   display: inline-block;
</style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div class="pagetitle" style="text-align: center;">
   <h1>Admission From</h1>
</div>
<!-- End Page Title -->
<section class="section" >
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               @include('_message')
               <!-- General Form Elements -->
               <form action="" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row pt-3">
                    <div class="col-lg-12">
                       <table class="table table-bordered">
                          <thead>
                             <tr>
                                <th scope="col">Registration No. *  </th>
                                <th scope="col"><input type="text"  class="form-control" name="registrationNo" required></th>
                                <th scope="col">Batch No. * </th>
                                <th scope="col"><input type="text"  class="form-control" name="batchNo" required></th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr>
                                <th scope="row">Admission Under *</th>
                                <td><select name="admissionUnder" id="admissionUnder" class="form-control">
                            <option value="BKKB">BKKB</option>
                            <option value="DYD">DYD</option>
                            <option value="ISLAMIC FOUNDATION">ISLAMIC FOUNDATION</option>
                            <option value="ITVS">ITVS</option>
                            <option value="HRDIT">HRDIT</option>
                        </select></td>
                                <th scope="col">Course *</th>
                                <td>
                                   <select class="form-control" name="course_id" required>
                                      <option value="">Select</option>
                                      @foreach($getCourse as $value)
                                      <option value="{{ $value->id}}">{{ $value->course_title}}</option>
                                      @endforeach
                                   </select>
                                </td>
                             </tr>
                             <tr>
                                <th scope="row">Branch *</th>
                                <td>
                                   <select class="form-control" name="branch_id" required>
                                      <option value="">Select</option>
                                      @foreach($getBranch as $value)
                                      <option value="{{ $value->id}}">{{ $value->branch_name}}</option>
                                      @endforeach
                                   </select>
                                </td>
                                <th scope="col">Session *</th>
                                <td>
                                   <select class="form-control" name="session_id" required>
                                      <option value="">Select</option>
                                      @foreach($getSession as $value)
                                      <option value="{{ $value->id}}">{{ $value->session_title}}</option>
                                      @endforeach
                                   </select>
                                </td>
                             </tr>
                             <tr>
                                <th scope="row">Year</th>
                                <td><input type="text"  class="form-control" name="year" required></td>
                                <th scope="col">Roll No.</th>
                                <td><input type="text"  class="form-control" name="roll" required></td>
                             </tr>
                             <tr>
                                <th scope="row">Start Date *  </th>
                                <td><input type="text"  class="form-control" name="startDate" required></td>
                                <th scope="col">End Date *  </th>
                                <td><input type="text"  class="form-control" name="endDate" required></td>
                             </tr>
                             <tr>
                                <th scope="row">Quota </th>
                                <td colspan="3">
                                   <fieldset class="row mb-3">
                                      <div class="col-sm-10">                    
                                         <input class="form-check-input" type="checkbox" name="qouta" id="news_status" value="None" checked="">
                                         <label class="form-check-label" for="news_status">
                                         None
                                         </label>                                     
                                         <input class="form-check-input" type="checkbox" name="qouta" id="news_status" value="Freedom Fighter">
                                         <label class="form-check-label" for="news_status">
                                         Freedom Fighter
                                         </label>  
                                         <input class="form-check-input" type="checkbox" name="qouta" id="news_status" value="Autistic">
                                         <label class="form-check-label" for="news_status">
                                         Autistic
                                         </label>  
                                         <input class="form-check-input" type="checkbox" name="qouta" id="news_status" value="Others">
                                         <label class="form-check-label" for="news_status">
                                         Others
                                         </label>  
                                         <input class="form-check-input" type="checkbox" name="qouta" id="news_status" value="Government">
                                         <label class="form-check-label" for="news_status">
                                         Government
                                         </label>  
                                      </div>
                                   </fieldset>
                                </td>
                             </tr>
                          </tbody>
                       </table>
                       <hr>
                       <div class="pagetitle" style="text-align: center;">
                          <h1>Personal Information</h1>
                       </div>
                       <table class="table table-bordered">
                          <thead>
                             <tr>
                             </tr>
                          </thead>
                          <tbody>
                             <tr>
                                <th scope="col"><fieldset class="row mb-3">
                                      <div class="col-sm-10">                    
                                         <input class="form-check-input" type="radio" name="identity" id="Merital" value="Nid" checked>
                                         <label class="form-check-label" for="news_status">
                                         Nid
                                         </label>                                     
                                         <input class="form-check-input" type="radio" name="identity" id="Merital" value="Birth Registration">
                                         <label class="form-check-label" for="news_status">
                                         Birth Reg
                                         </label>  
                          
                                      </div>
                                   </fieldset></th>
                                <th colspan="2"><input type="text"  class="form-control" name="identityNo" required></th>
                                <th rowspan="4" style="text-align: center;">
                                   <div id="imagePreview"></div>
                                   <div class="fileUpload">
                                      <input id="uploadFile" type="file" name="applicantImage" class="img"/>
                                   </div>
                                </th>
                             </tr>
                             <tr>
                                <th scope="row">Name *  </th>
                                <td colspan="2"><input type="text"  class="form-control" name="student_name" required></td>
                             </tr>
                             <tr>
                                <th scope="row">Father's Name *</th>
                                <td colspan="2"><input type="text"  class="form-control" name="father_name" required></td>
                             </tr>
                             <tr>
                                <th scope="row">Mother's Name *</th>
                                <td colspan="2"><input type="text"  class="form-control" name="mother_name" required></td>
                             </tr>
                             <tr>
                                <th scope="row">Education Qualification *</th>
                                <td ><input type="text"  class="form-control" name="education" required></td>
                                <th >Gender *</th>
                                <td ><fieldset class="row mb-3">
                                      <div class="col-sm-10">                    
                                         <input class="form-check-input" type="radio" name="gander" id="Merital" value="Male" checked>
                                         <label class="form-check-label" for="news_status">
                                         Male
                                         </label>                                     
                                         <input class="form-check-input" type="radio" name="gander" id="Merital" value="Female">
                                         <label class="form-check-label" for="news_status">
                                         Female
                                         </label>  
                          
                                      </div>
                                   </fieldset></td>
                             </tr>
                             <tr>
                                <th scope="row">Mobile No. *</th>
                                <td ><input type="text"  class="form-control" name="phone" required></td>
                                <th >Email</th>
                                <td ><input type="text"  class="form-control" name="email" required></td>
                             </tr>
                             <tr>
                                <th scope="row">Present Address *</th>
                                <td colspan="3"><input type="text"  class="form-control" name="currentAddress" required></td>
                                
                             </tr>
                             <tr>
                                <th scope="row">Permanent Address *</th>
                                <td colspan="3"><input type="text"  class="form-control" name="permanentAddress" required></td>
                                
                             </tr>
                             <tr>
                                <th scope="row">Date of Birth *</th>
                                <td ><input type="text"  class="form-control" name="dateOfBirth" required></td>
                                <th >Religion</th>
                                <td ><select name="religion" id="religion" class="form-control">
                                          <option value="Muslim">Muslim</option>
                                          <option value="Hindu">Hindu</option>
                                          <option value="Buddhist">Buddhist</option>
                                          <option value="Christian">Christian</option>
                                          <option value="Other">Other</option>
                                      </select></td>
                             </tr>
                             <tr>
                                <th scope="row">Merital Status</th>
                                <td colspan="3"><fieldset class="row mb-3">
                                      <div class="col-sm-10">                    
                                         <input class="form-check-input" type="radio" name="maritalStatus" id="Merital" value="Single" checked>
                                         <label class="form-check-label" for="news_status">
                                         Single
                                         </label>                                     
                                         <input class="form-check-input" type="radio" name="maritalStatus" id="Merital" value="Married">
                                         <label class="form-check-label" for="news_status">
                                         Married
                                         </label>  
                          
                                      </div>
                                   </fieldset></td>
                                
                             </tr>
                             <tr>
                                <th scope="row">Guardian Name *</th>
                                <td ><input type="text"  class="form-control" name="guardianName" required></td>
                                <th >Guardian Mobile No. *</th>
                                <td ><input type="text"  class="form-control" name="guardianMobile" required></td>
                             </tr>
                          </tbody>
                       </table>
                       <div class="row mb-3">
                          <div class="col-sm-2"></div>
                          <div class="col-sm-10">
                             <button type="submit" class="btn btn-primary">Add New Sudent</button>
                          </div>
                       </div>
                    </div>
                 </div>
              </form><!-- End General Form Elements -->
            </div>
        </div>
      </div>
   </div>
   
</section>
<script>
   ClassicEditor.create( document.querySelector( '#news_longdescription' ) )
       .catch( error => {
           console.error( error );
       } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection