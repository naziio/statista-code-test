<?php declare(strict_types=1);
namespace App;
class FizzBuzz {
    
    function num_div($values) {
        $results = array();
        $output = '';
        $total = $values==null ? 100 : $values;
        for($i=1; $i<=$total; $i++) {
            if($i %5 == 0 && $i%3 == 0){
                $output =  "FizzBuzz";
             //   print("FizzBuzz\n");
            } else if ($i%3 == 0){
                $output =  "Fizz";
             //   print("Fizz\n");
            } else  if( $i%5 == 0) {
                $output =  "Buzz";
              //  print("Buzz\n");
            } else{
                $output =   $i;
              //  print("$i\n");
            }
            $results[] = $output;
        }
     return $results;
    }
    
}
$obj = new FizzBuzz();
print_r($obj->num_div(100));
?>
