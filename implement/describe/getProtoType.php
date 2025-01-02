<?php
function getFunctionPrototype($reflection) {
    try {

        $prototype = "function " . $reflection->getName() . "(";
        $parameters = $reflection->getParameters();
        $params = [];
        foreach ($parameters as $param) {
            $paramStr = "";
            if ($param->hasType()) {
                $paramStr .= $param->getType() . " ";
            }
            $paramStr .= "$" . $param->getName();
            if ($param->isDefaultValueAvailable()) {
                $paramStr .= " = " . var_export($param->getDefaultValue(), true);
            }
            $params[] = $paramStr;
        }
        $prototype .= implode(", ", $params) . ")";
        if ($reflection->hasReturnType()) {
            $prototype .= ": " . $reflection->getReturnType();
        }

        return $prototype;
    } catch (ReflectionException $e) {
        return "Error: " . $e->getMessage();
    }
}
?>