<x-admin-navbar/>

@php

//  $count = User::get()->count();
//  dd($VoterCount);  
// dd($Casted); 
// dd($UserCountData);
// $maleCount=0;
// $femaleCount=0;

// if($VoterGender=="male"){
//  $maleCount++;
// }
// if($VoterGender=="female"){
//  $femaleCount++;
// }
// if($VoterGender=="others"){
//  $otherCount++;
// }

// dd($maleCount);

// dd($femaleCount);
// dd($user);
// dd($AgeGroup);

$VotingPercentage = round(($UserCountData['Casted'] / $UserCountData['VoterCount'])*100,2);
@endphp
<div class="container-fluid">
  <div class="row content mt-1">    
    <div class="col-sm-12">
      <div class="card Dash-Admin">
        <h3>Admin Dashboard</h3>
        <p>Online Voting System
            <br>
        Statistics</p>
      </div>
      <div class="row">
        <div class="col-sm-3 p-2">
          <div class="card Voters-Admin">
            <h3>Voters</h3><br>
            <p>{{ $UserCountData['VoterCount'] }}</p> 
          </div>
        </div>
        <div class="col-sm-3 p-2">
          <div class="card Candidates-Admin">
            <h3>Candidates</h3><br>
            <p>{{ $UserCountData['CandidateCount'] }}</p> 
          </div>
        </div>
        <div class="col-sm-3  p-2">
          <div class="card Casted-Admin">
            <h3>Votes Casted</h3><br>
            <p>{{ $UserCountData['Casted']  }}</p> 
          </div>
        </div>
        <div class="col-sm-3 bg-light">
          <div class="card Percentage-Admin">
            <h4>Vote Percentage</h4>
            <p> Voted by  : {{$VotingPercentage}}%</p> 
            <p> Remaining : {{100-$VotingPercentage}}%</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card Gender-Admin">
            <h4>Voter's Gender</h4> 
            <p>Male   : {{ $UserCountData['maleCount'] }} </p> 
            <p>Female : {{ $UserCountData['femaleCount'] }}</p> 
            <p>Others : {{ $UserCountData['othersCount'] }}</p>
          </div>
        </div>
        
        <div class="col-sm-4">
          <div class="card AgeGroup-Admin">
            <h4>Voter's Age Group</h4> <br>
            <p>Voters under 60 : {{$AgeGroup['Below60']}}</p> 
            <p>Voters above 60 : {{$AgeGroup['Above60']}}</p>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card CandidatesVotes-Admin">
              <h4>Candidates</h4> 
              @foreach ($CandidateInfo as $item)           
              <table>
                  <tr>
                    
                      <td>{{$item->name}}</td>
                      <td>
                        <img src="{{ url('candidateImage/'.$item->photo) }}" style="width: 70px; height: 70px; border-radius:50%; padding:0.4rem"/>
                      </td>
                  </tr>
              </table>
              @endforeach
              <a type="button" class="btn btn-primary mt-2" href="/candidates">View All</a>
            </div>
          </div>
      </div>
      {{-- <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <p>Text</p> 
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>
