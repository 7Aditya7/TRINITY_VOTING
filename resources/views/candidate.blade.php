<x-navbar />
<section>
<div class="candidate">
  <h3>CANDIDATES</h3>
</div>
<div class="container mt-1 mb-5 py-5 ">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col">
      <div class="card  my-4">
        <div class="row g-0">
          <div class="col-xl-4 d-none d-xl-block p-3">
            <img src="./image/Logo.png" alt="Logo" class="img-fluid d-flex justify-content-center" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
          </div>
          <div class="col-xl-8">
            <div class="card-body p-md-5 text-black">
              <form action="/candidate" method="POST">
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
        </div>
          </form>
                  <!--{{-- @if($x==1)
                  
                    @forelse ($can as $candidate )
                    {{ $candidate->name }}
                    {{ $candidate->age }}
                    {{ $candidate->photo }}
                      
                    @empty
                      no data found
                    @endforelse
                  @endif  --}} -->

          @if($x==0)
          @php
              $user=session('loginId');
          @endphp
          @if(session('loginId'))
          <table class="showCandidate">
            <tr>
              <th colspan="6">
                {{ $user->province }}: {{ $user->district }}
              </th>
            </tr>
            <tr>
              <th>S.N</th>
              <th>Photo </th>
              <th>Name</th>
              <th>Party Name</th>
              <th>Post</th>
              <th>Party Logo</th>

            </tr>
           @foreach ($localCan as $localCandidate )
           <tr>
           <td>
                {{ ++$i}}
              </td>
              <td>
              <img src="{{ url('candidateImage/'.$localCandidate->photo) }}" style="width: 70px; height: 70px; border-radius: 50%; padding:0.4rem ">
              </td>
              <td>
                {{ $localCandidate->name }}
              </td>
              <td>
                {{ $localCandidate->partyName }}
              </td>
              <td>
                {{ $localCandidate->post }}
              </td>
              <td>
              <img src="{{ url('candidateImage/'.$localCandidate->partyLogo) }}" style="width: 70px; height: 70px; padding:0.4rem">
              </td>
             </tr>
           @endforeach
          </table>
          @endif
          @endif
           {{-- @if($x==1)
          
            @forelse ($can as $candidate )
            {{ $candidate->name }}
            {{ $candidate->age }}
            {{ $candidate->photo }}
              
            @empty
              no data found
            @endforelse
          @endif --}}


          @if($x==1)
          <table class="showCandidate">
            <tr>
              <th colspan="6">
                {{ $province_no }}: {{ $district_no }}
              </th>
            </tr>
            <tr>
              <th>S.N</th>
              <th>Photo </th>
              <th>Name</th>
              <th>Party Name</th>
              <th>Post</th>
              <th>Party Logo</th>

            </tr>
            @forelse ($can as $candidate )
            <tr>

              <td>
                {{ ++$i}}
              </td>
              <td>
              <img src="{{ url('candidateImage/'.$candidate->photo) }}" style="width: 70px; height: 70px;; border-radius:50%; padding:0.4rem">

              </td>
              <td>
                {{ $candidate->name }}
              </td>
              <td>
                {{ $candidate->partyName }}
              </td>
              <td>
                {{ $candidate->post }}
              </td>
              <td>
              <img src="{{ url('candidateImage/'.$candidate->partyLogo) }}" style="width: 70px; height: 70px; padding:0.4rem">
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6">
            no data found</td></tr>
            @endforelse
          </table>
          @endif

        </div>
</section>
        <x-footer/>
        <!-- Custom Script to display district corresponding to PROVINCE -->
        <script src="{{ asset('js/custom.js')}}"> </script>