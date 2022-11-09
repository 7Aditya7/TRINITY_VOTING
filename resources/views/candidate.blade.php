@extends('layouts.app')

@section('content')
<section>
  <div class="container mt-1 mb-5 p-2">
    <div class="my-4">
      <div class="candidate">
        <h3>Candidates Search</h3>
        <hr>
      </div>
      <div class="row g-0">
        <div class="col-xl-8">
          <div class="card-body ml-5 text-black">
            <form action="/candidate" method="POST">
              @csrf
              <div class="mb-4">
                <div class="row">
                  <div class="col-4 form-group">
                    <select class="form-control Province" id="exampleFormControlSelect2" onchange="showDistrict(this)"
                      name="province">
                      <option selected="true" disabled selected>-- Faculty --</option>
                      <option value="csit">CSIT</option>
                      <option value="bca">BCA</option>
                      <option value="bba">BBA</option>
                      <option value="Gandaki Province">Gandaki Province</option>
                      <option value="Lumbini Province">Lumbini Province</option>
                      <option value="Karnali Province">Karnali Province</option>
                      <option value="Sudurpashchim Province">Sudurpashchim Province</option>
                    </select>
                  </div>

                  <div class="col-4 form-group" id="noDist" style="display:none;">
                    <select class="form-control District" name="district">
                      <option selected="true" disabled="disabled">-- Batch --</option>
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
                  </div>
                  <div class="col-4 form-group">
                    <button type="submit" class="btn btn-danger" name="search" value="search">Search</button>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </form>

      {{-- SHOW CANDIDATE --}}
      <div class="row m-4">
        <div class="card mx-4 shadow-sm" style="width: 15rem;">
          <img src="{{asset('image/candidate.png')}}" class="card-img-top" alt="...">
          <div class="card-body row">
            <img src="{{asset('image/bottle.png')}}" style="width: 5rem;" alt="...">
            <div class="">
              <h5 class="text-center card-title">Bottle</h5>
              <h6 class="text-center">Sagar Chhetri</h6>
              <h6 class="text-center">CSIT( 2018 )</h6>

            </div>
          </div>
        </div>
        <div class="card mx-4 shadow-sm" style="width: 15rem;">
          <img src="{{asset('image/candidate.png')}}" class="card-img-top" alt="...">
          <div class="card-body row">
            <img src="{{asset('image/bottle.png')}}" style="width: 5rem;" alt="...">
            <div class="">
              <h5 class="text-center card-title">Bottle</h5>
              <h6 class="text-center">Sagar Chhetri</h6>
              <h6 class="text-center">CSIT( 2018 )</h6>

            </div>
          </div>
        </div>
        <div class="card mx-4 shadow-sm" style="width: 15rem;">
          <img src="{{asset('image/candidate.png')}}" class="card-img-top" alt="...">
          <div class="card-body row">
            <img src="{{asset('image/bottle.png')}}" style="width: 5rem;" alt="...">
            <div class="">
              <h5 class="text-center card-title">Bottle</h5>
              <h6 class="text-center">Sagar Chhetri</h6>
              <h6 class="text-center">CSIT( 2018 )</h6>

            </div>
          </div>
        </div>

      </div>
</section>
@endsection