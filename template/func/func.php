<?php require_once('implement/describe/getProtoType.php') ?>
<?php $aa = new ReflectionFunction($_GET['func']); ?>
<?php $bb = $aa->getParameters() ?>
<p><?= $aa->getName() ?></p>
<p><?=  getFunctionPrototype($aa) ?></p>
<?php foreach ($bb as $key => $value): ?>
    <?php if($value->hasType()): ?>
        <p><?= $value->getType() ?></p>
    <?php endif;?>
    <?php if($value->isDefaultValueAvailable()): ?>
        <p><?= $value->getDefaultValue() ?></p>
    <?php endif;?>
    <p><?= $value->getName() ?></p>
<?php endforeach; ?>
<?php if ($aa->hasReturnType()): ?>
    <p><?= $aa->getReturnType() ?></p>
<?php endif;?>
