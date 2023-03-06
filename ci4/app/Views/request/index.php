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

  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="wrapper">
<h2><?= esc($title) ?></h2>

<?php if (! empty($request) && is_array($request)): ?>

    <?php foreach ($request as $request_item): ?>
        
        <h3> - <?= esc($request_item['firstname']) ?> </h3>
        <div class="main">
        <p>Email: <?= esc($request_item['email']) ?> <br>
        <p>Website: <?= esc($request_item['website']) ?> <br>
        <p>Style: <?= esc($request_item['style']) ?> <br>
        </div>
        

    <?php endforeach ?>

<?php else: ?>

    <h3>NO FORMS HAS SUBMITTED</h3>

    <p>TRY TO REQUEST FORMS NOW!!</p>

<?php endif ?>
</div>

</body>
</html>