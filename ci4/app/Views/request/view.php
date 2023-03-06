<!DOCTYPE html>
<html lang= "en" >
  <meta charset="UTF-8">
  <link rel="stylesheet" href="index.css">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="index.js" defer></script>


<title> ꕥ a very normal site </title>
</head>
<body>

  
  <ul class="tabs">
    <li><a href="/~rterania/lab3/ci4/public/index#home">Home</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#Hobbies">Hobbies</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#contact">Links</a></li>
    
  </ul>
  <div style = "text-align: center;
    color:rgb(85, 19, 19);
    background-color: #FFC08B;
    ">
  
<br><br><br><br><br><br><br><br><br><br><br>
<h2><?= esc($request['firstname']) ?></h2>
<p><?= esc($request['email']) ?></p>
<p><?= esc($request['payment']) ?></p>
<p><?= esc($request['comment']) ?></p>
<p><?= esc($request['style']) ?></p>

</div>

</body>
</html>