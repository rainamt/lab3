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

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Message</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create entry">
</form>




</body>
</html>