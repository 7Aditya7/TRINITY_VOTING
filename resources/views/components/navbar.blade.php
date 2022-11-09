<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ea043a4272.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light fixed-top ">
    <div class="container-fluid">
      <a class="navbar-brand" href="./"><img src=".\image\Logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          @if(!Session("loginId"))
          <li class="nav-item d-flex justify-content-center align-items-center ">
            <a class="nav-link " aria-current="page" href="./">Home</a>
          </li>
          @endif

          @if (Session("loginId"))
          <li class="nav-item d-flex justify-content-center align-items-center ">
            <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
          </li>
       
          @endif

          <li class="nav-item">
            <a class="nav-link" href="candidate">Candidates</a>
          </li>
          @if (Session("loginId"))
          <li class="nav-item">
            <a class="nav-link" href="vote">Vote Now</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="result">Result</a>
          </li>

          @if (!Session("loginId"))
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
          @endif

        </ul>

      </div>
      @if(Session("loginId"))
      <div class="collapse  navbar-collapse userInfo" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item d-flex justify-content-end align-items-center ">
            <!-- user icon -->
            @php
      $photo=session('loginId')->photo;
    @endphp
                <img src="{{ url('user/image/'.$photo) }}" style="width: 45px; height: 45px; border-radius:50%" class="navbarUserPhoto">
          </li>

          <div class="dropdown align-items-center">
            <button class="dropbtn ">
              <!-- dropdown icon -->
              <i class="fa-solid fa-circle-chevron-down"></i>
            </button>
            <div class="dropdown-content ">
              
              {{-- invoked $user as model for "loginId"  --}}
              @php
                $user=session('loginId');
                $firstName=strtok($user->name,' ');
              @endphp
            <li class="nav-item justify-content-end ">
              <a href="userProfile">{{ $firstName  }}</a>
            </li>
              <li class="nav-item justify-content-end ">
                <a class="nav-link" href="logout">Logout </a>
                <!-- logout icon -->
                <i class="fa-solid fa-arrow-right-from-bracket"></i>



              </li>
            </div>
          </div>


        </ul>
      </div>
      @endif
    </div>
  </nav>
</body>

</html>

<!-- script for linking fontawesome icon pack into the project -->
<script src="https://kit.fontawesome.com/f169358bc4.js" crossorigin="anonymous"></script>