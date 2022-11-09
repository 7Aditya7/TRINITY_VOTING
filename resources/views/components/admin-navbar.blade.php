<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <style>
    .card{
      margin: 0.5rem;
      background-color:rgb(227, 253, 253);
      padding: 1rem;
    }
    .row.content {
      height: 550px;
      text-align: center;}
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
        } 
    }
    h4{
      font-family:Arial, Helvetica, sans-serif;
      font-weight: bold;
      
    }
    .Casted-Admin{
        background-color: rgb(129, 245, 197);
    }
    .Dash-Admin{
      background-color: rgb(215, 241, 240);
      padding: -5px;
    }
    .Voters-Admin{
      background-color: rgb(243, 227, 227);
    }
    .Candidates-Admin{
      background-color: rgb(183, 222, 238);

    }
    .Percentage-Admin{
      background-color: rgb(208, 218, 218);
    
    }
    
  </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/adminDashboard"><img src="./image/Logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        @if (Session("adminId"))
      
        <li class="nav-item d-flex justify-content-center align-items-center " >
          <a class="nav-link active" aria-current="page" href="candidates">Manage Candidate</a>
        </li>
        <li class="nav-item d-flex justify-content-center align-items-center " >
          <a class="nav-link active" aria-current="page" href="manageResult">Manage Result</a>
        </li>
   
    @endif

  @if(Session("adminId"))
      <div class="collapse userInfo navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item d-flex justify-content-end align-items-center ">
            <!-- user icon -->
            <i class="fa-solid fa-user fa-2xl"> </i>
          </li>

          <div class="dropdown">
            <button class="dropbtn">
              <!-- dropdown icon -->
              <i class="fa-solid fa-circle-chevron-down"></i>
            </button>
            <div class="dropdown-content ">
              <li class="nav-item justify-content-end ">
                <a class="nav-link" href="adminDashboard">Admin</a></li>
              <li class="nav-item justify-content-end ">
                <a class="nav-link" href="adminLogout">Logout </a>
                <!-- logout icon -->
                <i class="fa-solid fa-arrow-right-from-bracket"></i>

              </li>
            </div>
          </div>


        </ul>
      </div>
      @endif
      </ul>
  </div>
</nav>
<script src="https://kit.fontawesome.com/f169358bc4.js" crossorigin="anonymous"></script>
</body>
</html>