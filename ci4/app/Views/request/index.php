<div class="wrapper">
<h2><?= esc($title) ?></h2>

<?php if (! empty($req) && is_array($req)): ?>

    <?php foreach ($req as $req_item): ?>
        
        <h3><?= esc($req_item['id']) ?> - <?= esc($req_item['firstname']) ?> <?= esc($req_item['lastname']) ?></h3>
        <div class="main">
        <p>Payment: <?= esc($req_item['payment']) ?> <br>
        <p>Comment: <?= esc($req_item['comment']) ?> <br>
        <p>Style: <?= esc($req_item['style']) ?> <br>
        </div>
        

    <?php endforeach ?>

<?php else: ?>

    <h3>No Form Has Submitted</h3>

    <p>Unable to submit form.</p>

<?php endif ?>
</div>