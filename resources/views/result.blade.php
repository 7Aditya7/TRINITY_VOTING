@extends('layouts.app')

@section('content')
<section class="container">
  <div class="candidate mt-1 p-2">
    <h3>Trinity Election 2022 | Result</h3>
    <hr>
  </div>
  <div class="container h-100 mt-1">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="row g-0">
          <div class="col-xl-4 d-none d-xl-block">
            <img src="./image/logo.png" alt="Logo" class="img-fluid d-flex justify-content-center bodyLogo" />
          </div>
          </form>
          <div class="winnerContainer shadow-sm  text-center border rounded">
            <div class="p-4">
              <h5>CSIT: 2018 BATCH</h5>
              <h3>!!! WINNER !!!</h3>
              <div class="winner">
                <img src="{{ asset('image/candidate.png') }}" class="rounded-circle" style="width: 10rem">
              </div>
              <h3>Sagar Chhetri - Bottle <img src="{{ asset('image/bottle.png') }}"
                  style="width: 40px; height: 40px; border-radius:50%; padding:0.1rem">
              </h3>
              <h3><b>Votes:</b> 150 </h3>
            </div>
          </div>
          <div class="msg d-flex justify-content-center mb-3">
            <h4>Result is not published.</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection