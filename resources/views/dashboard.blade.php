<x-navbar/>

@php
                $user=session('loginId');
                
                $firstName= strtok($user->name,' ');
                if($user->hasVoted==1){
                    $voteStatus="Voted";
                }
                else {
                    $voteStatus="Not Voted";
                }
                if($user->district =='Kathmandu'){$LocationID= '079735';}
                if($user->district =='Lalitpur'){$LocationID= '079749';}
                if($user->district =='Bhaktapur'){$LocationID= '079740';}
            @endphp

<div class="container-fluid Greeting mt-2 pt-3">
    <div class="row justify-content-center align-item-center ">
        <div class="col-lg-4 me-auto mb-2 mb-lg-0">
            <div class="card mb-4 " style="width: 25rem; height: 22rem;">
                <div class="card-body text-center">
                  <img src="{{ url('user/image/'.$user->photo) }}" alt="avatar"
                    class="card-img-top img-fluid" style="width: 140px;">
                  <h5 class="my-3">{{ $user->name  }}</h5>
                  <p class="text-muted mb-1">Voter</p>
                  <p class="text-muted mb-4"> {{ $user->district }}, {{ $user->province }}</p>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a type="button" class="btn btn-danger" href="vote">Vote Now</a>
                    <a type="button" class="btn btn-outline-primary ms-1" href="userProfile">My Info</a>
                  </div>
                </div>
              </div><hr>
        </div>
       
        <div class="col-lg-8 me-auto mb-2 mb-lg-0 px-2" >
        <div class="row justify-content-center align-items-center contents">
        <h4>Hello {{ $firstName  }}, <b id="greet"></b></h4>
        <div class="col-lg-12 me-auto mb-2 mb-lg-0">
            
            {{-- Weather ID Info 
            # weather/NP/1/Kathmandu/079735/
            # weather/NP/1/Pātan/079749/
            # weather/NP/1/Madhyapur_Thimi/079740/ 
            --}}

            <div class="tomorrow"
               data-location-id="{{$LocationID}}"
               data-language="EN"
               data-unit-system="METRIC"
               data-skin="light"
               data-widget-type="upcoming"
               style="padding-bottom:22px;position:relative;"
            >
              <a
                href="https://www.tomorrow.io/weather/"
                rel="nofollow noopener noreferrer"
                target="_blank"
                style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
              >
                
              </a>
            </div>
            <hr>
        </div>
            
        <div id="Status" style="align-items: center; justify-content:center; text-align:center;">
        {{-- <h2 style="color: rgb(16, 56, 100)">--- Welcome to Online Voting System ---</h2> --}}
        <h3>Vote Status: <b style="color:rgb(167, 50, 50)">{{$voteStatus}}</b></h3><hr>
        
        </div>
        <div class="card pl-2 pt-2">
        <h4 style="color: rgb(16, 75, 55); text-align:center;">-- Instructions --</h4>
        <p> Dear User, if you have not voted yet. You can cast vote to the Candidate, based on your region as follows :</p>
        <ul>
            <li>You can click on the <b>Vote Now</b> button.</li>
            <li>Or you can <a href="vote">Click here to Vote</a> .</li>
        </ul>
        </div>
        {{-- <img src="{{ url('user/image/'.$user->photo) }}" style="width: 150px; border-radius:50%"> --}}
            </div>
        </div>
        </div>
    </div>
</div>

<script>
    const time = new Date().getHours();
    let greeting;
    if (time < 10) {
      greeting = "!! Good Morning !!";
    } else if (time < 16) {
      greeting = "!! Good Day !!";
    } else {
      greeting = "!! Good Evening !!";
    }
    document.getElementById("greet").innerHTML = greeting;
    </script>
   
   <script>
        (function(d, s, id) {
            if (d.getElementById(id)) {
                if (window.__TOMORROW__) {
                    window.__TOMORROW__.renderWidget();
                }
                return;
            }
            const fjs = d.getElementsByTagName(s)[0];
            const js = d.createElement(s);
            js.id = id;
            js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'tomorrow-sdk');
        </script>