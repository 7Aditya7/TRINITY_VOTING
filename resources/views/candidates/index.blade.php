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
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('candidates.create') }}"> Add new candidate</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered justify-content-center">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Province</th>
            <th>District</th>
            <th>Photo</th>
            <th>Party Name</th>
            <th>Party Logo</th>
            <th>Post</th>
            <th>Remarks</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($candidates as $candidate)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $candidate->name }}</td>
            <td>{{ $candidate->age }}</td>
            <td>{{ $candidate->gender }}</td>
            <td>{{ $candidate->province }}</td>
            <td>{{ $candidate->district }}</td>
            <td>
                <img src="{{ url('candidateImage/'.$candidate->photo) }}" style="width: 70px; height: 70px; border-radius:50%; padding:0.4rem"/>
                
            </td>
            <td>{{ $candidate->partyName }}</td>
            <td>
                <img src="{{url('candidateImage/'.$candidate->partyLogo)}}" style="width: 70px; height: 70px; padding:0.4rem" />  
            </td>
            <td>{{ $candidate->post }}</td>
            <td>{{ $candidate->remarks }}</td>
           
            <td>
                <form action="{{ route('candidates.destroy',$candidate->id) }}" method="POST">
   
                    <a class="btn btn-info m-1" href="{{ route('candidates.show',$candidate->id) }}">Show</a>
    
                    <a class="btn btn-primary m-1" href="{{ route('candidates.edit',$candidate->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger m-1">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $candidates->links() !!}
      
@endsection
</body>
</html>