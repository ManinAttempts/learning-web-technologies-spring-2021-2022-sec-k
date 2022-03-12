<?php

	//print("Hello World...!");
	//echo "hello world...!"." test...";

	$name = "rahat";
	$id = 42685;
	$cgpa = 3.67;

	//$student = array(1, 'rahat', 3.4, 'rahat@aiub.edu');
	//$student = [1, 'rahat', 3.4, 'rahat@aiub.edu'];
	/*$students = [

					[1, 'rahat', 3.4, 'rahat@aiub.edu'],
					[2, 'xyz', 3.3, 'xyz@aiub.edu'],
					[3, 'abc', 3.2, 'abc@aiub.edu']


				];

	echo $students[2][3];*/

	/*$student = ['id'=>1, 'name'=>'rahat', 'cgpa'=>3.4, 'email'=>'rahat@aiub.edu'];


	$students = [

					's1'=>['id'=>1, 'name'=>'rahat', 'cgpa'=>3.4, 'email'=>'rahat@aiub.edu'],
					's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>3.3, 'email'=>'xyz@aiub.edu'],
					's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3.2, 'email'=>'abc@aiub.edu'],
					's4'=>['id'=>4, 'name'=>'pqr', 'cgpa'=>3.1, 'email'=>'pqr@aiub.edu']
					


				];
	
	echo $students['s3']['email'];*/

	/*function sum($num1, $num2){

		echo $num1 + $num2;
	}

	sum(20,40);*/

	/*if(5 === '5'){
		echo "true";
	}else{
		echo "false";
	}*/

	/*for ($i=0; $i < ; $i++) { 
		// code...
	}*/


	$students = [

					's1'=>['id'=>1, 'name'=>'rahat', 'cgpa'=>3.4, 'email'=>'rahat@aiub.edu'],
					's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>3.3, 'email'=>'xyz@aiub.edu'],
					's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3.2, 'email'=>'abc@aiub.edu'],
					's4'=>['id'=>4, 'name'=>'pqr', 'cgpa'=>3.1, 'email'=>'pqr@aiub.edu']
					


				];

	foreach ($students as $s) {
		echo "<h1>".$s['name']. "<h1/>";
	}

?>