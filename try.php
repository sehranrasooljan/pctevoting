<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
    box-sizing:border-box;
  }
  body {
    background:#ddd;
    font-family:"Raleway";
  }
  .form {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:300px;
    background:#f5f5f5;
    box-shadow:5px 5px 10px 5px #ccc;
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

<body>
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
</html>