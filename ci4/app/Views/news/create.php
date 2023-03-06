<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="/~rterania/lab3/ci4/public/index">
</head>
<body>  
<ul class="tabs">
    <li><a href="/~rterania/lab3/ci4/public/index#contact">Home</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#contact">Hobbies</a></li>
        <li><a href="/~rterania/lab3/ci4/public/index#contact">Links</a></li>
    
  </ul>
   <div style = "text-align: center;
    color:rgb(85, 19, 19);
    background-image: url("BG.svg");
    overflow-x: hidden;
    background-size: 100%;
    " >
<br><br><br><br>




<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>


</body>
</html>