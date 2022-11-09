<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>manage candidate</title>
</head>
<body style="padding-top: 0;">
    <x-admin-navbar/>
@extends('candidates.layout')

@section('content')
<div class="row p-2">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New candidate</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('candidates.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('candidates.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="number" class="form-control"  name="age" placeholder="age"></input>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                  <label class="form-check-label" for="maleGender">Male</label>
                </div>
                
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                  <label class="form-check-label" for="maleGender">Female</label>
                </div>
                <div class="form-check form-check-inline mb-0 me-4">
                  <input class="form-check-input" type="radio" name="gender" id="other" value="other" />
                  <label class="form-check-label" for="other">Other</label>
                </div>
            </div>
        </div>

    </div>

<!--Address-->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Address:</strong>
               <div class="row">
                    <div class="col-md-6 mb-4 col-xl-4">
                      <select class="Province" onchange="showDistrict(this)" name="province" value="{{old('province')}}">
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
                      <select class="District" name="district" value="{{old('district')}}">
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
            </div>
        </div>
    </div>
<!--Photo-->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Photo:</strong>
                <input type="file" name="photo" class="form-control" placeholder="Candidate's photo">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Party Name:</strong>
                <input type="text" name="partyName" class="form-control" placeholder="party name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Party Logo:</strong>
                <input type="file" name="partyLogo" class="form-control" placeholder="party logo">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Post:</strong>
                <input type="text" name="post" class="form-control" placeholder="candidate's post">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 xl-6">
            <div class="form-group">
                <strong>Remarks:</strong>
                <textarea name="remarks" class="form-control" placeholder="remarks"></textarea>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>

</form>
<script src="{{ asset('js/custom.js')}}"> </script>
@endsection
</body>
</html>