<?php
include 'menu.php';
?>
<h1><?= $category['title']?>  </h1>

<?php foreach ($news as $item): ?>
    <a href="<?= route('newsOne', $item['id']) ?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>
