<?php
include_once 'menu.php';
?>

<?php foreach ($category as $item): ?>
    <a href="<?= route('categoryNews', $item['id']) ?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>
