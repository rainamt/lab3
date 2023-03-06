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

    <label for="title">Name</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Message</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create entry">
</form>