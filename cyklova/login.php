<?php
  $page_title = 'Login';
  require_once 'header.php';
?>

<body>
  <header >
   <section class="sequel-kidsa" style="position: fixed;" >
  <div class="sequel-masopedub" style="display: flex; justify-content: center;">
  <div class="mplishmen"  style="display: flex; justify-content: center;">
  <a href="index.php"><img class="logogo" src="img/Logo.webp" alt="Логотип"></a>
  <div style="font-size: 16px; color: white; margin-top:23px; ">
    <h2 style="font-size: 16px; text-transform:none;line-height: 0.5em;"  >Циклова комісія</h2>
  <h2 style="font-size: 16px;text-transform:none; line-height: 0.5em;">програмування</h2>
 
</div>
  </div>
 
  
  </div>
</section>
</header>   
<main>
  <div class="main0" style="display: flex;">
  <div class="main1" style="width:20%;">
    
  </div>
  <div class="main2" style="width:60%; height: 100%;padding-top: 0px; margin-bottom: 30px; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom: 30px;">
  	<p><h2 class="zagolovok"></h2></p>
    <div style="display: flex; justify-content: center;">
<form style="width: 600px;" action="check-login.php" method="POST">
<div class="form-group"><label for="login">Login</label>
    <input name="login" type="login" class="form-control" id="login1"></div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
 
</div>
  <div class="main1"style="width:20%;">
      
  </div>
</div>



</main>
</body>
