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

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="fname">Name</label>
    <input type="input" name="fname" value="<?= set_value('fname') ?>">
    <br>

    <label for="message">Message</label>
    <textarea name="message" cols="45" rows="4"><?= set_value('message') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create entry">
</form>

</div>