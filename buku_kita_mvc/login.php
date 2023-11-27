
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="stylee.css"/> 
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <link href=”css/bootstrap.min.css” rel=”stylesheet”>
<script src=”js/bootstrap.bundle.min.js”></script>
<script type=”js/bootstrap.min.js”> </script>
<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style1.css"/>
</head>
<body>
   <?=
  include "nav.php";
  ?>
  <form action="loginn.php" method="post">
  <form class="form card">
  
   
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
      <path fill="none" d="M0 0h24v24H0z"></path>
      <path fill="currentColor" d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"></path>
    </svg>
    <h1 class="form_heading">Login</h1>
 
  <div class="field">
    <label for="nama">Nama</label>
    <input class="input" name="nama" type="text" placeholder="Nama" id="nama">
  </div>
  
  <div class="field">
    <label for="username">Username</label>
    <input class="input" name="username" type="text" placeholder="Username" id="username">
  </div>
  <div class="field">
    <label for="password">Password</label>
    <input class="input" name="password" type="password" placeholder="Password" id="password">
  </div>
  <div class="field">
    <button class="button">Login</button>
  </div>
  <?php
  include "footer.php";
  ?>
</form>
</form>
</body>
</html>