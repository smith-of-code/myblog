<?php
include 'menu.php';
?>
<h1>Все Новости</h1>

<?php foreach ($news as $item): ?>
    <a href="<?= route('newsOne', $item['id']) ?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>
