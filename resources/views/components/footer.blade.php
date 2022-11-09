<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);
    
    * {
      font-family: Open Sans;
    }
    
    /* section {
      width: 100%;
      display: inline-block;
      background: rgb(245, 245, 245);
      height: 50vh;
      text-align: center;
      font-size: 22px;
      font-weight: 700;
      text-decoration: underline;
    } */
    
    .footer-distributed{
      background: rgb(236, 236, 236);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif; 
      padding: 30px 10px;
    }
    
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
      display: inline-block;
      vertical-align: top;
    }
    
    /* Footer left */
    
    .footer-distributed .footer-left{
      width: 32%;
    }
    .footer-distributed .footer-left .extLinks h4{
      padding-left:20% ;
    }
    
    /* The company logo */
    
    .footer-distributed .footer-left h3{
      color:  #1e0f0f;
      font: normal 32px 'Open Sans', cursive;
      text-decoration: none;
      /* margin: 0; */
    }
    .footer-distributed .footer-left h5{
      font: normal 16px 'Open Sans', cursive;
      padding-left:20%;
      
    }
   
    .footer-distributed h3{
      margin-left: 2px;
      /* padding-left: 5px; */
      font-size: 18px;
      color:  #231414;
      font-weight: bold;
      margin-bottom: 10px;
      margin-top: 5px;
      text-decoration-line: underline ;
    }
    
    .footer-distributed .footer-left h3 span{
      color:  rgb(178, 39, 32);
    }
    
    /* Footer links */
    
    .footer-distributed .footer-links{
      color:  #4d2a2a;
      margin: 10px 0 12px;
      padding: 0;
    }
    
    .footer-distributed .footer-links a{
      display:inline-block;
      line-height: 1.8;
      font-weight:400;
      text-decoration: none;
      color:  inherit;
    }
    
    .footer-distributed .footer-company-name{
      color:  #222;
      font-size: 16px;
      font-weight: normal;
      margin: 5px;
      text-align: center;
    }
    
    /* Footer Center */
    
    .footer-distributed .footer-center{
       width: 31%;
      padding-left: 50px;
    }
    
    
    .footer-distributed .footer-center i{
      background-color:  #33383b;
      color: #ffffff;
      font-size: 18px;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      text-align: center;
      line-height: 35px;
      /* margin: 10px 20px; */
      vertical-align: middle;
    }
    
    .footer-distributed .footer-center i.fa-envelope{
      font-size: 16px;
      line-height: 35px;
    }
    
    .footer-distributed .footer-center p{
      display: inline-block;
      color: #282323;
      font-weight:400;
      vertical-align: middle;
      margin:20px 10px;
      font-size: 16px;
      
    }
    /* 
    .footer-distributed .footer-center p span{
      display:block;
      font-weight: normal;
      font-size:12px;
      line-height:2;
    } */
    
    .footer-distributed .footer-center p a{
      color:  lightseagreen;
      text-decoration: none;
    }
    
    .footer-distributed .footer-links a:before {
      content: "|";
      font-weight:300;
      font-size: 20px;
      left: 0;
      color: rgb(14, 7, 7);
      display: inline-block;
      padding-right: 5px;
    }
    
    .footer-distributed .footer-left .footer-links{
      padding-left: 20px;
    }
    .footer-distributed .footer-links .link-1:before {
      content: none;
    }
    
    /* Footer Right */
    
    .footer-distributed .footer-right{
      width: 35%;
    }
    
    .footer-distributed .footer-company-about{
      line-height: 20px;
      text-align: justify;
      text-justify: inter-word;
      color:  #6f7274;
      font-size: 13px;
      font-weight: normal;
     
    }
    
    .footer-distributed .footer-company-about span{
      display: block;
      color:  #6f7274;
      font-size: 13px;
      /* font-weight: bold; */
      margin-bottom: 5px;
    }
    
    .footer-distributed .footer-icons{
      margin-top: 25px;
    }
    
    .footer-distributed .footer-icons a{
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color:  #33383b;
      border-radius: 2px;
    
      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;
    
      margin-right: 3px;
      margin-bottom: 0px;
    }
    
    /* If you don't want the footer to be responsive, remove these media queries */
    
    @media (max-width: 880px) {
    
      .footer-distributed{
        font: bold 14px sans-serif;
      }
    
      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 20px;
        text-align: center;
        padding: 5px;
      }
      .footer-distributed .footer-left .extLinks h4{
        text-align: center;
        padding-left: 5px;
      }
      .footer-distributed .footer-left h5{
        text-align: center;
        padding-left: 5px;
      }
    
      .footer-distributed .footer-center i{
        margin-left: 0;
      }
      .footer-center ,.footer-right {
                border-top: 1px solid rgb(157, 157, 157);
                padding-top: 10px;
            }
    
    }

    .footer-distributed .footer-left h4{
      margin-bottom:5px;
      padding-left: 5px;
      color:rgb(8, 77, 77);
      text-decoration: underline;
    }
    .footer-distributed .footer-left .extLinks{
      /* margin-top: 2px;*/
      /* padding-left: 10px; */
      margin-bottom: 1px;
      align-items: center;
      
    }
    
    .footer-distributed .footer-left .extLinks
      a:link, a:visited {
      color:#363636;
      text-decoration: none;
      cursor:pointer;
    }
    
    /* a:link:active, a:visited:active {
      color: (internal value);
    } */
    .footer-distributed .footer-left .footer-icons{
      margin-top: 0;
      padding-left: 10px;
      margin-bottom: 5px;
    }
    
    #more {display: none;}
    #follow {display: none;}
    </style>
    
    <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        var followlink = document.getElementById("follow");
      
        if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
        followlink.style.display = "none";
    
        } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
        followlink.style.display = "inline";
        }
      }
      </script>
    


<footer class="footer-distributed">
  <div class="container-fluid py-3">
    <div class="row justify-content-between">
          <div class="col-md-4 mb-2 col-xl-1 footer-left">
            <div class="FooterTitle">
            <h3>Online <span>Voting</span> System</h3>
            <h5>|Local Level Election|</h5>
            </div>
            <p class="footer-links">
              <a href="/" class="link-1">Home</a>
              
              <a href="/candidate">Candidates</a>
            
              <a href="/result">Result</a>
            
              <a href="/login">Login</a>
              
              <!-- <a href="#">Faq</a>
              
              <a href="#">Contact</a> -->
            </p><hr>
            <div class="extLinks">
            <h4>Useful Links <span><i class="fa fa-external-link"></i></span></h4>
            <ul style=" list-style-type: none;" >					
              <li> <a href="https://election.gov.np/" target="_blank"><i class="fa fa-globe"></i> Election Commision, Nepal</a></li>
              <li> <a href="https://moha.gov.np/" target="_blank"><i class="fa fa-globe"></i>  Ministry of Home Affairs, Nepal</a></li>
              <!-- <a href="" target="_blank"><i class="fa fa-globe"></i>bdvkdkhvkdh</a><br>
              <a href="" target="_blank"><i class="fa fa-globe"></i>bdvkdkhvkdh</a><br> -->
            </ul>
            <div class="footer-icons">
              <a href="https://www.facebook.com/ecnofficial/"> <i class="fa-brands fa-facebook"></i> </a>
              <a href="https://twitter.com/ECNOfficial"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://www.youtube.com/channel/UCQ1iYWQDmp5cAB-bb-107AQ"><i class="fa-brands fa-youtube-play"></i></a>
            </div>
            </div>
          </div>
          <div class="col-md-4 mb-2 col-xl-1 footer-center">
            <h3 class="Support">Contact & Support</h3>
            <div>
              <i class="fa fa-map-marker"></i>
              <p> Kathmandu, Nepal</p>
              {{-- <span>44</span> --}}
            </div>
    
            <div>
              <i class="fa fa-phone"></i>
              <p>+977.XXX.XXX.XXXX</p>
            </div>
    
            <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>
    
          </div>
    
          <div class="col-xl-4 footer-right">
            <h3>About the Project</h3>
            <p class="footer-company-about">
              
            This project is a web-based voting system that allows to easily and securely manage elections. 
            This voting system can be customized for use in local elections, college elections, and so on. 
            Voters in this system do not need to go to the polling place to vote. 
            They can vote using their personal computer. There is a database that stores all of the names of voters along with their complete information. 
            The user registers as a voter by simply filling out a registration form. 
            After registering successfully, the voter is given credentials that he or she can use to log into the system and vote.   <b id="dots">  .....   </b> 
            <span id="more">Only after the details have been successfully validated and verified is the user permitted to vote. 
            If incorrect or invalid information is submitted, the person is not permitted to vote and is denied access to the system. 
            The site's voting functionality will be available only on election day. 
            The benefit of online voting is that voters can vote whenever they want and there is less congestion. It also reduces vote counting errors. 
            Individual votes are recorded in a database, which can be queried to determine which of the candidates for a given position has received the most votes.</span>
              <button onclick="myFunction()" id="myBtn" class="btn btn-light btn-sm"> Read more </button> 
              <div class="footer-icons" id="follow">
                <p>Follow Us for more Projects</p>
                  <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  <a href="#"><i class="fa-brands fa-square-github"></i></a>
              </div>
            </p>
          </div>
        </div>
        <hr>
          <p class="footer-company-name">Online Voting System © 2022</p>
  </div>
</footer>
<script src="https://kit.fontawesome.com/ea043a4272.js" crossorigin="anonymous"></script>