<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">

<div id="wrapper">
  <div class="main-content">
    <div class="header">
      <img src="https://i.imgur.com/zqpwkLQ.png" />
    </div>
   <form action="insert.php" method="post">
    
    <input type="text" placeholder="Username" name="name" id="name"class="input-1"><br>
    <div>
    <input type="text" placeholder="password" name="namel" id="namel" class="input-2"> <br>
   
</div>
    <button type="submit" name="submit" class="btn">Log in </button>
</form>
    
    </div>
  </div>
  <div class="sub-content">
    <div class="s-part">
      Don't have an account?<a href="#">Sign up</a>
    </div>
  </div>
</div>





</body>
</html>