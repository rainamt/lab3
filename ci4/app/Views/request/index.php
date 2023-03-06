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