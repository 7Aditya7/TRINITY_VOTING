<x-navbar />
<section>
<div class="candidate">
  <h3>RESULT</h3>
</div>
<div class="container py-5 h-100 mt-1 mb-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card  my-4">
          <div class="row g-0">
            <div class="col-xl-4 d-none d-xl-block">
              <img src="./image/Logo.png" alt="Logo" class="img-fluid d-flex justify-content-center bodyLogo" />
            </div>
            <div class="col-xl-8">
              <div class="card-body p-md-5 text-black">
                <form action="/result" method="POST">
                  @csrf
                  <label class="form-label" for="form3Example8">Address</label>
                  <div class="form-outline mb-4">

                    <div class="row">
                      <div class="col-md-6 mb-4 col-xl-4">
                        <select class="Province" onchange="showDistrict(this)" name="province">
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
                      </div>

                      <div class="col-md-6 mb-4 col-xl-2" id="noDist" style="display:none;">
                        <select class="District">
                          <option selected="true" disabled="disabled">-- District --</option>
                          <option value="0">Not Available</option>
                        </select>
                      </div>

                      <div class="col-md-6 mb-4 col-xl-2" id="Prv3Dist" style="display:none;">
                        <select class="District" name="district">
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
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm" name="search" value="search">Search</button>

                  </div>


              </div>
            </div>
            </form>
            @php
            $result= $res->result;
            @endphp


            @if ($result==1)
            @if($can)

          <div class="winnerContainer border rounded">
          <h5>{{ $can->province }} : {{ $can->district }}</h5>
            <h3>!!! WINNER !!!</h3>

            <div class="winner">
              <img src="{{ url('candidateImage/'.$can->photo) }}" style="width: 70px; height: 70px; border-radius:50%; padding:0.1rem">

            </div>
            <h3>{{$can->name}} ({{ $can->partyName }}) <img src="{{ url('candidateImage/'.$can->partyLogo) }}" style="width: 40px; height: 40px; border-radius:50%; padding:0.1rem">
            </h3>
            <h3><b>Votes:</b> {{$can->votes}} </h3>
          </div>
          
          @endif
          @else
          <div class="msg d-flex justify-content-center mb-3">
            <h4>Result is not published.</h4>

            @endif


          </div>

        </div>
</section>
        <x-footer/>
        <!-- Custom Script to display district corresponding to PROVINCE -->
        <script src="{{ asset('js/custom.js')}}"> </script>