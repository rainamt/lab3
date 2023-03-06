<div class="tabs">
    <ul>
        <li><a href="/~rterania/lab3/ci4/public/home#home">ABOUT</a></li>
        <li><a href="/~rterania/lab3/ci4/public/home#Hobbies">HOBBIES</a></li>
        <li><a href="/~rterania/lab3/ci4/public/home#contact">LINKS</a></li>
        <li><a href="request/create">REQUEST FORMS</a></li>
        <li><a href="/~rterania/lab3/ci4/public/request">REQUEST QUEUE</a></li>
      

          <p id="demo"></p></li>
      </ul>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Payment Form: <input type="text" name="payment" value="<?php echo $payment;?>">
  <span class="error"><?php echo $paymentErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Style:
  <input type="radio" name="style" <?php if (isset($style) && $style=="Outline") echo "checked";?> value="Outline">Outline
  <input type="radio" name="style" <?php if (isset($style) && $style=="Color") echo "checked";?> value="Color">Color
  <input type="radio" name="style" <?php if (isset($style) && $style=="Fully Rendered") echo "checked";?> value="Fully Rendered">Fully Rendered  
  <span class="error">* <?php echo $styleErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  


    

    <input type="submit" name="submit" value="Submit">
</form>