<x-navbar/>

@php
$user=session('loginId');
@endphp
{{--  @if($x==0) --}}
@if(session('loginId'))
<section style="background-color: #eee;">
    <div class="container py-2">
      <div class="row justify-content-between">
        <div class="col-11">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              {{-- <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li> --}}
              <li class="breadcrumb-item active" aria-current="page">User Profile : {{ $user->name  }}</li>
            </ol>
          </nav>
        </div>
        <div class="col-1"><a type="button" class="btn btn-primary mt-2" href="/dashboard">Back</a></div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{ url('user/image/'.$user->photo) }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ $user->name  }}</h5>
              <p class="text-muted mb-1">Voter</p>
              <p class="text-muted mb-4"> {{ $user->district }}, {{ $user->province }}</p>
              {{-- <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-outline-primary ms-1">Edit</button>
              </div> --}}
            </div>
          </div>
        </div>
  
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
                  <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->name }}</p>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                      <p class="mb-0">Voter ID</p>
                      </div>
                      <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->voterId }}</p>
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                      <p class="mb-0">Citizenship Number</p>
                      </div>
                      <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->citizenshipNumber }}</p>
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                      </div>
                      <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->gender }}</p>
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->email }}</p>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                  </div>
                  <div class="col-sm-9">
                      <p class="text-muted mb-0">(+977) {{ $user->phoneNumber }}</p>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Date of Birth</p>
                  </div>
                  <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->dob }}</p>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                  </div>
                  <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->district }}, {{ $user->province }}</p>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                      <p class="mb-0">Father's Name</p>
                      </div>
                      <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->fatherName }}</p>
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                      <p class="mb-0">Mother's Name</p>
                      </div>
                      <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->motherName }}</p>
                      </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  {{-- @endif --}}