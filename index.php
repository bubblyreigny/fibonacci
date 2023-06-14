<?php

class FibbonaciSequenceCalculator 
{
    /**
     * @var array
     */
    private array $fibonacciSequence;

    public function __construct() {
        $this->fibonacciSequence = [];
    }

    public function makeSequence($input_number) {
        if ($input_number < 1 || $input_number > 20) {
            throw new Exception("Input value must be between 1 and 20.");
        }

        $this->fibonacciSequence = [];
        for ($i = 0; $i < $input_number; $i++) {
            $this->fibonacciSequence[] = $this->calculateFibonacci($i);
        }

        return $this->fibonacciSequence;
    }

    private function calculateFibonacci($number) {
        if ($number <= 0) {
            return 0;
        } elseif ($number == 1) {
            return 1;
        } else {
            return $this->calculateFibonacci($number - 1) + $this->calculateFibonacci($number - 2);
        }
    }
}

// Example usage
$fibonacciCalculator = new FibbonaciSequenceCalculator();
try {
    $input = 7;
    $fibonacciSequence = $fibonacciCalculator->makeSequence($input);
    echo implode(", ", $fibonacciSequence);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
