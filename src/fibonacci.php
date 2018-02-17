<?php
  class fibonacci{

      function fibonacci_nums($array){
        $arr = $array;
        for ($i = 1; $i < 9; $i++){
          $temp = $arr[$i] + $arr[$i - 1];
          $arr[] = $arr[$i] + $arr[$i - 1];
          echo $temp, "\n";
        }
        return $arr;
      }

      function initial($csvfile){
        $arr = [];
  			if (($handle = fopen($csvfile, "r")) !== FALSE) {
    			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      			$num = count($data);
      			for ($c=0; $c < $num; $c++) {
  							$arr[] = $data[$c];
                echo $data[$c], "\n";
  					}
    			}
    		fclose($handle);
  			return $arr;
  			}
      }

  }
  /* Testing Fibonacci
  $test = new fibonacci();
  $csvfile = '../assets/fibonacci.csv';
  $array = $test->initial($csvfile);
  $fin_arr = $test->fibonacci_nums($array);*/
 ?>
