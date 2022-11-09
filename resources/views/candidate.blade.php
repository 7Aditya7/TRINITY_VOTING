@extends('layouts.app')

@section('content')
<section>
  <div class="container mt-1 mb-5 p-2">
    <div class="card my-4">
      <div class="candidate">
        <h3>Candidates Search</h3>
      </div>
      <div class="row g-0">
        <div class="col-xl-8">
          <div class="card-body p-md-5 text-black">
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
      <table class="showCandidate">
        <tr>
          <th colspan="6">
            CSIT: 2018 Batch
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
        {{-- @foreach ($localCan as $localCandidate )
        <tr>
          <td>
            {{ ++$i}}
          </td>
          <td>
            <img src="{{ url('candidateImage/'.$localCandidate->photo) }}"
              style="width: 70px; height: 70px; border-radius: 50%; padding:0.4rem ">
          </td>
          <td>
            {{ $localCandidate->name ?? '' }}
          </td>
          <td>
            {{ $localCandidate->partyName ?? '' }}
          </td>
          <td>
            {{ $localCandidate->post ?? '' }}
          </td>
          <td>
            <img src="{{ url('candidateImage/'.$localCandidate->partyLogo) }}"
              style="width: 70px; height: 70px; padding:0.4rem">
          </td>
        </tr>
        @endforeach --}}
      </table>
    </div>
</section>
@endsection