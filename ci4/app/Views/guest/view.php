<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>  
<style>

background-color: #92a8d1;
</style>

<ul class="tabs">
    <li><a href="index.php#home">Home</a></li>
        <li><a href="index.php#Hobbies">Hobbies</a></li>
        <li><a href="index.php#contact">Links</a></li>
    
  </ul>
   <div style = "text-align: center;
    color:rgb(85, 19, 19);
    background-color: #92a8d1;
    "> 
    

    <h2><?= esc($guest['fname']) ?></h2>
<p><?= esc($guest['message']) ?></p>
</div>