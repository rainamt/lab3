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
    
    <div class="wrapper">
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="firstname">First Name</label>
    <input type="input" name="firstname" value="<?= set_value('firstname') ?>">
    <br>


    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="payment">Payment</label>
    <input type="input" name="payment" value="<?= set_value('payment') ?>">
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label for="style">Style</label>
    <input type="radio" name="style" <?php if (isset($style) && $gender=="outline") echo "checked";?> value="outline">Outline
    <input type="radio" name="style" <?php if (isset($style) && $gender=="color") echo "checked";?> value="color">Color
    <input type="radio" name="style" <?php if (isset($style) && $gender=="fullyrender") echo "checked";?> value="fullyrender">Fully Rendered
    <br>

    <input class="primary-cta" type="submit" name="submit" value="Request Form">
    <br>
</form>
</div>
</div>