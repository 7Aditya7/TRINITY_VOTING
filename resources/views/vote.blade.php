<x-navbar/>
@php
$user=session('loginId');
@endphp

@if($x==0)
@if(session('loginId'))
<div class="vote">
    <div class="voteLocation">{{ $user->province }} : {{ $user->district  }}</div>
<table>
 
    <tr>
        <th>S.N</th>
        <th>Photo </th>
        <th>Name</th>
        <th>Party Name</th>
        <th>Post</th>
        <th>Party Logo</th>
        <th></th>
    </tr>
    @foreach ($localCan as $localCandidate )
    <tr>
        <td>
            {{ ++$i}}
        </td>
        <td>
        <img src="{{ url('candidateImage/'.$localCandidate->photo) }}" style="width: 70px; height: 70px; border-radius:50%; padding:0.4rem">
        </td>
        <td>
            {{ $localCandidate->name }}
        </td>
        <td>
            {{ $localCandidate->partyName }}
        </td>
        <td>
            {{ $localCandidate->post }}
        </td>
        <td>
        <img src="{{ url('candidateImage/'.$localCandidate->partyLogo) }}" style="width: 70px; height: 70px; padding:0.4rem">
        </td>
        <td>
       @php
           $voter = App\Models\User::findOrFail(session('loginId')->id);
           
       @endphp
            <form action="/vote-hanne" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$localCandidate->id}}">
                
                <button @if ($voter->hasVoted)
                    disabled
                @endif  type="submit" class="btn btn-danger">{{$voter->hasVoted == 1 ? "Voted" : "Vote"}}</button>
            </form>
        </td>
       
    </tr>
    @endforeach
</table>
@endif
@endif
</div>