<?php declare(strict_types=1);

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testNormalInputSet() {
        $fizzBuzz = new FizzBuzz();
        $inputSet =15;
        $expectedResults = array(
            1, 2, 'Fizz', 4, 'Buzz',
            'Fizz', 7, 8, 'Fizz', 'Buzz',
            11, 'Fizz', 13, 14, 'FizzBuzz'
        );
        $testResults = $fizzBuzz->num_div($inputSet);
        $this->assertEquals($expectedResults, $testResults);
    }
}

?>