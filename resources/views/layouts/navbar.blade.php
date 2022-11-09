<nav class="navbar navbar-expand-lg bg-light fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="./"><img src="{{asset('image/logo.jpg')}}" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item d-flex justify-content-center align-items-center ">
          <a class="nav-link " aria-current="page" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="candidate">Candidates</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="result">Results</a>
        </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link btn btn-danger text-light" href="vote">Vote Now</a>
    </form>
  </div>
</nav>