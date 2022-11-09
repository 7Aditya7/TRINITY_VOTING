<x-navbar />


<form action="login-admin" method="post">
    @if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::has('fail'))
    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    @csrf
    <!-- Email input -->
    <div class="container login-container">
        <div class="form-outline mb-4">
            <div class="d-flex justify-content-center">
                <h4>Admin</h4>
            </div>
            <div class="d-flex justify-content-center"><img src="./image/logo.png" alt="Logo">
            </div>

            <label class="form-label" for="form2Example1">Email</label>
            <input type="email" id="form2Example1" class="form-control" name="email" value="{{old('email')}}" />
            <span class="text-danger">@error('voterId')
                {{ $message }}
                @enderror</span>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">

            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="form2Example2" class="form-control" name="password" />
            <span class="text-danger">@error('password')
                {{ $message }}
                @enderror</span>

        </div>

       

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      
    </div>
</form>