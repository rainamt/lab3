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

        <div class="main">
		<br>
		<b>
		<table>
		<tr>
		<th>-----</th>
		 <th><?= esc($guest_item['firstname']) ?> </th>
         <th><?= esc($guest_item['email']) ?> </th>
		 <th><?= esc($guest_item['comment']) ?> </th>
		</tr>
		</table>
        </div>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>

<a href="guest/create" class="btn btn-primary">Register</a>

</div>