<?php
    function inc($baseDir, $file) {
        $filePath = realpath($baseDir . $file);
        if (strpos($filePath, $baseDir) == 0 && is_file($filePath)) {
            return 1;
        }
        return 0;
    }