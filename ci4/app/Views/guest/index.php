<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>  
<ul class="tabs">
    <li><a href="index.php#home">Home</a></li>
        <li><a href="index.php#Hobbies">Hobbies</a></li>
        <li><a href="index.php#contact">Links</a></li>
    
  </ul>
   <div style = "text-align: center;
    color:rgb(85, 19, 19);"> 
    
    <h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        
        <p><?= esc($guest_item['firstname']) ?>
        <div class="main">
        <p>Message: <?= esc($guest_item['comment']) ?> <br><br>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>No one was here ;-;.</p>

<?php endif ?> 

</div>