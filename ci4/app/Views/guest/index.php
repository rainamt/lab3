<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>  


<ul class="tabs">

<li><a href="/~rterania/lab3/ci4/public/index#home">Home</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#Hobbies">Hobbies</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#contact">Links</a></li>
    
  </ul>


   <div style = "text-align: center;
    color:rgb(85, 19, 19);
    
    "> 
    
    <h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>



        <div class="main">
		<br>
		<b>
		<table>
		<tr>
		
<br><br><br><br><br><br><br><br>
        <th>Name:</th>
		 <th><?= esc($guest_item['firstname']) ?> </th>
         <th>Email:</th>
         <th><?= esc($guest_item['email']) ?> </th>
         <th>Payment:</th>
		 <th><?= esc($guest_item['payment']) ?> </th>
         <th>Comment:</th>
         <th><?= esc($guest_item['comment']) ?> </th>
         <th>Style:</th>
         <th><?= esc($guest_item['style']) ?> </th>
		</tr>
		</table>
        </div>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>

<br><br><br><br>

<div style = 
" 
position:relative;  left: 360px;
width: 30%;
text-align: center;
font-family:'Franklin Gothic Medium';
font-size: 30px;
color:rgb(77, 50, 50);
background-color: #103536;">

<a style="text-decoration: none; color:rgb(222, 230, 116);" href="guest/create" class="btn btn-primary">Request Form now</a>
</div>
</div>