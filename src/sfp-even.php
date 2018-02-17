<?php
class even {
		function count_even($array){
			$count = count($array);
			return $count;
		}
		function convert_array($csvfile) {
			$arr = [];
			$row = 1;
			if (($handle = fopen($csvfile, "r")) !== FALSE) {
  			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    			$num = count($data);
    			for ($c=0; $c < $num; $c++) {
						if ($data[$c] % 2 == 0){
							$arr[] = $data[$c];
						}
					}
  			}
  		fclose($handle);
			return $arr;
			}

		}

	}

	$test = new even();
	$csvfile = '../assets/numbers.csv';
	$array = $test->convert_array($csvfile);
	echo $array;
	echo getcwd() . "\n";
	echo "Working: ",  $test->count_even($array);
?>
