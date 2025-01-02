<?php $b = get_defined_functions()['internal'];?>

<h1>Fruit List</h1>
    <ul>
        <?php foreach ($b as $key => $value): ?>
            <li><a href="/?page=func&func=<?= $value ?>"><?= $value; ?></a></li>
        <?php endforeach; ?>
    </ul>