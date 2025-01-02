<?php echo "haha" ?>
<?php
$builtInFunctions = get_defined_functions()['internal'];
print_r($builtInFunctions);
?>