<?php
    $b = get_defined_functions()['internal'];
    $co = get_defined_constants();
    
    foreach ($b as $key => $value) {
        // $arr[3] will be updated with each value from $arr...
        echo "{$key} => {$value}\n";
    }

    $aa = new ReflectionFunction("str_replace");
    $classes = get_declared_classes();
    foreach ($classes as $class) {
        echo "Class: $class\n";
        print_r(get_class_methods($class));
        echo "-------------------\n";
    }  
?>