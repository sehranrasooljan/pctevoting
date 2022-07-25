
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PCTE Voting System</title>
    <!-- favicon image on title -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.ico">

    <!-- BOOTSTRAP CORE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="assets/css/ionicons.css" rel="stylesheet" />
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <a href="https://icons8.com/icon/P1VBH8DnRvMt/up-arrow">Up Arrow icon by Icons8</a>
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #990000; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 1px; /* Some padding */
  border-radius: 5px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
html{
    scroll-behavior: smooth;

}



/* ..................................... */
.form {
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    width:300px;
    background:#f5f5f5;
    color:black;
    /* box-shadow:5px 5px 10px 5px #ccc; */
  }
  .form .tab-header {
    height:50px;
    line-height:50px;
  }
  .form .tab-header > div {
    width:50%;
    float:left;
    text-align:center;
    background:#ddd;
    color:#555;
    cursor:pointer;
  }
  .form .tab-header > div.active {
    background:#f5f5f5;
    color:#111;
  }
  .form .tab-content {
    padding:20px;
  }
  .form .tab-content .form-element {
    margin:10px 0px;
  }
  .form .tab-content .form-element input {
    width:100%;
    padding:10px;
    border:1px solid #aaa;
    font-size:16px;
    background:#f5f5f5;
    border-radius:5px;
    outline:none;
  }
  .form .tab-content .form-element input[type="checkbox"] {
    width:30px;
    margin:8px 0px;
    margin-left:-5px;
  }
  .form .tab-content .form-element label {
    color:#111;
  }
  .form .tab-content .form-element button {
    margin-top:5px;
    width:100%;
    padding:10px;
    border:none;
    outline:none;
    background:#00acee;
    color:#f5f5f5;
    font-size:16px;
    text-transform:uppercase;
    cursor:pointer;
    border-radius:5px;
  }
  .form .tab-content > div.active {
    display:block;
  }
  .form .tab-content > div {
    display:none;

</style>
    
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="navbar navbar-default navbar-fixed-top scroll-me">
        <!-- pass scroll-me class above a tags to starts scrolling -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        
                <a class="navbar-brand" href="#">
        <img src="assets/img/pcte.png"> </a>

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">HOME</a></li>
                    <!-- <li><a href="#club">club</a></li> -->
                     <li><a href="#clients">CLUBS</a></li>
                    <!-- <li><a href="#works">WORK</a></li> -->
                    <li><a href="#team">TEAM</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="result.php">RESULT</a>
                     <!-- <div class="sub">
                        <ul>
                            <li>president</li>
                            <li>vicepresident</li>
                            <li>gensec</li>
                            <li>sec</li>
                            <li>trea</li>
                        </ul>
                     </div> -->
                    </li>
                    
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->
    
    <div id="header">
        <div class="overlay">
            <div class="container">
                <div class="row scroll-me">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center ">

                        <h1 data-scroll-reveal="enter from the bottom after 0.2s">PCTE Online Voting System
                        </h1>

                        <h4 data-scroll-reveal="enter from the bottom after 0.4s"> If you don’t vote, you lose the right to complain. <br>
                            Not voting is not a protest. It's a surrender.<br>
                            Fight for the things you care about, but do it in a way that will lead others to join you.. 

                        </h4>
                        <a data-scroll-reveal="enter from the bottom after 0.6s" href="https://pcte.edu.in" class="btn btn-danger set-bk-clr">Explore Awesomeness</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </section> 
    <!-- club SECTION END  -->
    <div id="clients">
        <div class="overlay" style="margin-top: 1px;">
            <div class="container">
                <h1 class="text-center m-0"style="margin-top: -11px;margin-bottom: -5px;">Registration</h1><br>
                <div class="row text-center">

  <div class="form">
    <div class="tab-header">
      <div class="active">Sign Up</div>
      <div>Sign In</div>
    </div>
    <div class="tab-content">
      <div class="tab-body active">
        <div class="form-element">
          <input type="text" placeholder="Email">
        </div>
        <div class="form-element">
          <input type="text" placeholder="Username">
        </div>
        <div class="form-element">
          <input type="password" placeholder="Password">
        </div>
        <div class="form-element">
          <input type="password" placeholder="Confirm Password">
        </div>
          <div class="form-element">
          <input type="password" placeholder="Confirm Password">
        </div>
  
    /* CHECKBOX  START <br>*/

       <b> Select Clubs </b> 
       <br>
       <div class="form-element" style="display:flex">
         <input type="checkbox" >
          <label for="Clubs"> Circket  </label><br>
          <div style="display:block">
            23
          </div>
        </div>


          <div class="form-element" style="display:flex">
         <input type="checkbox" >
         <label for="Clubs"> Football </label><br>
         <div style="display:block">
          23
        </div>
        </div>

        
        <div class="form-element" style="display:flex">
         <input type="checkbox" >
         <label for="Clubs"> Vollyball </label><br>
         <div style="display:block">
          23
        </div>
        </div>

/* CHECKBOX END */

        <div class="form-element">
          <button>Sign Up</button>
        </div>
      </div>
      
      <div class="tab-body">
        <div class="form-element">
          <input type="text" placeholder="Email / Username">
        </div>
        <div class="form-element">
          <input type="password" placeholder="Password">
        </div>
        <div class="form-element">
          <input type="checkbox" id="remember_me">
          <label for="remember_me">Remember me</label>
        </div>
        <div class="form-element">
          <button>Sign In</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  let tabPanes = document.getElementsByClassName("tab-header")[0].getElementsByTagName("div");

for(let i=0;i<tabPanes.length;i++){
  tabPanes[i].addEventListener("click",function(){
    document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabPanes[i].classList.add("active");
    
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");
  });
}

</script>
                                </div>
                        
                            </div>
                            <a data-slide="prev" href="#client-slider" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#client-slider" class="right carousel-control">›</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="team" style="padding-bottom: 186px;padding-top: 100px;">
        <div class="container">

            <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.2s">
                <div class="col-md-6 col-md-offset-3 pad-bottom">
                    <h2><strong>AWESOME TEAM</strong></h2>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae

                </div>
            </div>
            <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">

                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="assets/img/1.jpeg" alt="" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Sehran Rasool Jan</h3>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
           3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="assets/img/2.jpeg" alt="" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Mohd Shavez</h3>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
           3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                        </div>
                    </div>
                </div>
            </div>

     

        </div>
    </section>
    <!-- TEAM SECTION END -->
    <section id="contact">
        <div class="overlay">
            <div class="container">
                <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.2s">
                    <div class="col-md-6 col-md-offset-3 pad-bottom">
                        <h2><strong>STAY CONNECTED </strong></h2>
                        PCTE GROUP OF INSTITUTIONS

                    </div>
                </div>

                <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.4s">

                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h3><strong>Address : </strong></h3>
                        <br>
                        <h4>PCTE Group of Institutes- Baddowal Ferozepur Road Ludhiana-142021 
                            <h4> Ph: +91-161-2888500  </h4>
                            
                            <h4><strong>Email : </strong>infopcte.edu.in</h4>
                        </div>
                        
                    </div>                       
        </div>
    </section>
    <!-- CONTACT SECTION END -->



    <?php include 'footer.php';
?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/30/000000/external-up-arrow-alignment-and-tools-kiranshastry-solid-kiranshastry.png"/></button>

    <!--FOOTER SECTION END  -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  FANCYBOX PLUGIN -->
    <script src="assets/js/source/jquery.fancybox.js"></script>
    <!-- ISOTOPE SCRIPTS -->
    <script src="assets/js/jquery.isotope.js"></script>
     <!-- SCROLL ANIMATIONS  -->
    <script src="assets/js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
<script>
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 400px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 400|| document.documentElement.scrollTop > 400) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>



/* ............................................... */

<script>
document.getElementById('').onclick = function() {

    val=0
    if ( this.checked ) {
      val=5++
        
        alert( this.value $val );
    } else {
        // if not checked ...
    }
};
</script>











