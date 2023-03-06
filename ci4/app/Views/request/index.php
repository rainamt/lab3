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
<h2><?= esc($title) ?></h2>

<?php if (! empty($request) && is_array($request)): ?>

    <?php foreach ($request as $request_item): ?>

        <h3><?= esc($request_item['title']) ?></h3>

        <div class="main">
            <?= esc($request_item['body']) ?>
        </div>
        <p><a href="news/<?= esc($request_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Forms in Line</h3>

    <p>Try to request forms now !! </p>

<?php endif ?> 


</body>
</html>