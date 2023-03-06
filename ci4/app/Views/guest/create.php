<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
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
    <input type="input" name="style" value="<?= set_value('style') ?>">
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>