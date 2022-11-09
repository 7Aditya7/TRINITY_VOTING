<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Candidates</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body style="padding-top: 0;">
<x-admin-navbar/>
@extends('candidates.layout')
  
  @section('content')
      <div class="row p-2">
          <div class="col-lg-12">
              <div class="pull-left">
                  <h2> Show Candidate</h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('candidates.index') }}"> Back</a>
              </div>
          </div>
      </div>
     
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Name:</strong>
                  {{ $candidate->name }}
              </div>
          </div>
      </div>
      
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Age:</strong>
                  {{ $candidate->age }}
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Gender:</strong>
                  {{ $candidate->gender }}
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Province:</strong>
                  {{ $candidate->province }}
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>District:</strong>
                  {{ $candidate->district }}
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Photo:</strong>
                  <img src="{{ url('candidateImage/'.$candidate->photo) }}" style="width: 70px; height: 70px;; border-radius:50%">
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Party Name:</strong>
                  {{ $candidate->partyName }}
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Party Logo:</strong>
                  <img src="{{ url('candidateImage/'.$candidate->partyLogo) }}" style="width: 50px; height:50px; border-radius:10%">
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Post:</strong>
                  {{ $candidate->post }}
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Remarks:</strong>
                  {{ $candidate->remarks }}
              </div>
          </div>
      </div>
      
  @endsection
</body>
</html>