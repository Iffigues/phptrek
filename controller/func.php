<?php if (isset($_GET['func'])): ?>
    <?php require_once("./controller/func/func.php")?>
<?php else:?>
    <?php require_once('./template/func.php')?>
<?php endif ?>