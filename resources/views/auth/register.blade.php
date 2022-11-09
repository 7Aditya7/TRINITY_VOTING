<x-navbar />


<form action="register-user" method="post" enctype="multipart/form-data">
  @if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
  @endif
  @if (Session::has('fail'))
    <div class="alert alert-fail">{{ Session::get('fail') }}</div>
  @endif
  @csrf
<div class="container py-2 register-container">
  <div class="row d-flex justify-content-center align-items-center pt-1">
    <div class="col">
      <div class="card card-registration my-2">
        <div class="row g-0">
          <div class="col-xl-4 d-none d-xl-block">
            <img src="./image/logo.png" alt="Logo" class="img-fluid d-flex justify-content-center" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
          </div>
          <div class="col-xl-8">
            <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase "><h3>Voter registration form</h3>

              <div class="row">
              <div class="col-md-6 mb-4 col-xl-6">
                  <div class="form-outline">
                  <label class="form-label" for="voterId">Voter ID</label>
                    <input type="number" id="voterId" class="form-control" name="voterId" value="{{old('voterId')}}"/>
                    <span class="text-danger">@error('voterId')
                    {{ $message }}                      
                    @enderror</span>
                  </div>
                </div>
                <div class="col-md-6 mb-4 col-xl-6">
                  <div class="form-outline">
                  <label class="form-label" for="CitizenshipNumber">Citizenship no.</label>
                    <input type="number" id="citizenshipNumber" class="form-control  " name="citizenshipNumber" value="{{old('citizenshipNumber')}}"/>
                    <span class="text-danger">@error('citizenshipNumber')
                    {{ $message }}                      
                    @enderror</span>
                  </div>
                </div>

                <div class="col-md-6 mb-4 col-xl-12">
                  <div class="form-outline">
                  <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" class="form-control " name="name" value="{{old('name')}}"/>
                    <span class="text-danger">@error('name')
                    {{ $message }}                      
                    @enderror</span>
                    
                  </div>
                </div>
                
              
              </div>

              <div class="row">
                <div class="col-md-6 mb-">
                  <div class="form-outline">
                  <label class="form-label" for="motherName">Mother's name</label>
                    <input type="text" id="motherName" class="form-control  " name="motherName" value="{{old('motherName')}}"/>
                    <span class="text-danger">@error('motherName')
                    {{ $message }}                      
                    @enderror</span>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="fatherName">Father's name</label>
                    <input type="text" id="fatherName" class="form-control  " name="fatherName" value="{{old('fatherName')}}"/>
                    <span class="text-danger">@error('fatherName')
                    {{ $message }}                      
                    @enderror</span>
                  </div>
                </div>
              </div>

              <label class="form-label" for="address">Address</label>
              <div class="form-outline mb-4">

                <div class="row">
                  <div class="col-md-6 mb-4 col-xl-4">
                    <select class="Province" name="province" value="{{old('province')}}" onchange="showDistrict(this)">
                      <!-- used function showDistrict() on section of Province
                      to display corresponding districts -->


                      <!--set label as disabled/non-selectable option-->
                      <option selected="true" disabled="disabled">-- Province --</option>

                       <!-- All of province are valued as their names-->
                       <option value="Province 1">Province 1</option>
                       <option value="Madhesh Province">Madhesh Province</option>
                       <option value="Bagmati Province">Bagmati Province</option>
                       <option value="Gandaki Province">Gandaki Province</option>
                       <option value="Lumbini Province">Lumbini Province</option>
                       <option value="Karnali Province">Karnali Province</option>
                       <option value="Sudurpashchim Province">Sudurpashchim Province</option>
                        
                    </select>
                    <span class="text-danger">@error('province')
                    {{ $message }}                      
                    @enderror</span>
                  </div>

              		<div class="col-md-6 mb-4 col-xl-2" id="noDist" style="display:none;">
                    <select class="District">
                      <option selected="true" disabled="disabled">-- District --</option>
                      <option value="0">Not Available</option>
                    </select>
                  </div>

                  <div class="col-md-6 mb-4 col-xl-2" id="Prv3Dist" style="display:none;">
                    <select class="District" name="district" value="{{old('district')}}">
                      <!--set label as disabled/non-selectable option-->
                      <option selected="true" disabled="disabled">-- District --</option>
                     <!-- All of options below are valued as their names-->
                     <option value="Dolakha">Dolakha</option>
                     <option value="Sindhupalchok">Sindhupalchok</option>
                     <option value="Rasuwa">Rasuwa</option>
                     <option value="Dhading">Dhading</option>
                     <option value="Nuwakot">Nuwakot</option>
                     <option value="Kathmandu">Kathmandu</option>
                     <option value="Bhaktapur">Bhaktapur</option>
                     <option value="Lalitpur">Lalitpur</option>
                     <option value="Kavrepalanchok">Kavrepalanchok</option>
                     <option value="Ramechhap">Ramechhap</option>
                     <option value="Sindhuli">Sindhuli</option>
                     <option value="Makwanpur">Makwanpur</option>
                     <option value="Chitwan">Chitwan</option>
                    </select>
                    <span class="text-danger">@error('district')
                    {{ $message }}                      
                    @enderror</span>
                  </div>


                  <!--
                    <div class="col-md-6 mb-4 col-xl-5">

                    <select class=">Municipality">
                      <option value="1">Municipality or Rural Municipality</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4 col-xl-2">

                    <select class="Ward">
                      <option value="1">Ward No.</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>
                    </div> 
                  -->

                </div>



            

              <div class="d-md-flex justify-content-start align-items-center mb-4 py-2 gender">

                <h6 class="mb-0 me-4">Gender: </h6>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                  <label class="form-check-label" for="maleGender">Male</label>
                </div>

                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                  <label class="form-check-label" for="femaleGender">Female</label>
                </div>

              

                <div class="form-check form-check-inline mb-0">
                  <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                  <label class="form-check-label" for="otherGender">Other</label>
                </div>
                <span class="text-danger">@error('gender')
                    {{ $message }}                      
                    @enderror</span>
              </div>

    
              <div class="form-outline mb-4">
              <label class="form-label" for="dob">DOB</label>
                <input type="date" id="dob" class="form-control  " name="dob" value="{{old('dob')}}"/>
                <span class="text-danger">@error('dob')
                    {{ $message }}                      
                    @enderror</span>
              </div>

              <div class="form-outline mb-4">
              <label class="form-label" for="phoneNumber">Phone Number</label>
                <input type="number" id="phoneNumber" class="form-control  " name="phoneNumber" value="{{old('phoneNumber')}}"/>
                <span class="text-danger">@error('phoneNumber')
                    {{ $message }}                      
                    @enderror</span>
              </div>

              
              
              <div class="form-outline mb-4">
              <label class="form-label" for="photo">Choose your photo</label>
              <input type="file" id="photo" class="form-control  " name="image" value="{{old('photo')}}"/>
              <span class="text-danger">@error('photo')
                    {{ $message }}                      
                    @enderror</span>
              </div>
              <div class="form-outline mb-4 ">
              <label class="form-label" for="email">Email ID</label>
                <input type="email" id="email" class="form-control  " name="email" value="{{old('email')}}"/>
                <span class="text-danger">@error('email')
                    {{ $message }}                      
                    @enderror</span>
              </div>
              <div class="form-outline mb-4 ">
              <label class="form-label" for="password">password</label>
                <input type="password" id="password" class="form-control  " name="password" value="{{old('password')}}"/>
                <span class="text-danger">@error('password')
                    {{ $message }}                      
                    @enderror</span>
              </div>
              </div>
</div>

          

              <div class="d-flex justify-content-end pt-3">
                <button type="reset" class="btn btn-light btn-lg" id="reset">Reset all</button>
                <button type="submit" class="btn btn-warning btn-lg ms-2" id="submit">Submit form</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Custom Script to display district corresponding to  PROVINCE-->
<script src="{{ asset('js/custom.js')}}"> </script>