<html>
<head>
 <title>LOGIN MULTIUSER PHP</title>
 <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>


<div class="banner">
    <video autoplay loop muted>
        <source src="img/profil.mp4">
    </video>
   

 <h1 class="panel_login">
         
  <p class="tulisan_atas"><strong>Selamat Datang</strong></p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="MASUK">

   <br/>
   <br/>
   
  </form>
  
 </h1>
 </div>


</body>
</html>