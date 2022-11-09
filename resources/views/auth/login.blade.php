<x-navbar/>
<section>
@if (Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif

<form action="login-user" method="post">
@if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
  @endif
  @if (Session::has('fail'))
    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
  @endif
  @csrf
  <!-- Email input -->
  <div class="container login-container mt-3 mb-3">
  <div class="form-outline mb-4">
  <div class="d-flex justify-content-center"><h4>Login</h4></div>
  <div class="d-flex justify-content-center"><img src="./image/logo.png" alt="Logo">
</div>

<label class="form-label" for="form2Example1">Voter ID</label>
    <input type="number" id="form2Example1" class="form-control" name="voterId" value="{{old('voterId')}}"/>
    <span class="text-danger">@error('voterId')
                    {{ $message }}                      
                    @enderror</span>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">

  <label class="form-label" for="form2Example2">Password</label>
    <input type="password" id="form2Example2" class="form-control" name="password"/>
    <span class="text-danger">@error('password')
                    {{ $message }}                      
                    @enderror</span>

  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="register">Register</a></p>
 
  </div>
  </div>
</form>
</section>
<x-footer/>