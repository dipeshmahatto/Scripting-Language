<?php
class MathOperation {
    public static function divide($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Division by zero is not allowed.");
        }

        return $numerator / $denominator;
    }
}

try {
    // Attempting to divide by zero
    $result = MathOperation::divide(10, 0);
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
