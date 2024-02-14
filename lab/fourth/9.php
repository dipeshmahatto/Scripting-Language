<?php
class MyClass {
    public static $staticProperty = "Static Property";

    public static function staticMethod() {
        return "Static Method";
    }
}

echo "Static Property: " . MyClass::$staticProperty . "\n";

echo "<br>Static Method: " . MyClass::staticMethod() . "\n";
?>
