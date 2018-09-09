<?php 
   // khai bao mot mang
	// $arr = [];
	// $arr = ['Nhu Y', ' Suong', 'Tai', ' Minh', 'Kiet'];
	// $arr1 = [0 => 'Nhu Y', 1 => ' Suong', 2 => 'Tai', 3 => ' Minh', 4 => 'Kiet'];
	// $arr2 = ['nhuy' => 'Nhu Y', 'suong' => ' Suong', 'tai' => 'Tai', 'minh' => ' Minh', 'kiet' => 'Kiet'];
    $arr = array();
	$arr = array('Nhu Y', ' Suong', 'Tai', ' Minh', 'Kiet');
	$arr1 = array(0 => 'Nhu Y', 1 => ' Suong', 2 => 'Tai', 3 => ' Minh', 4 => 'Kiet');
	$arr2 = array('nhuy' => 'Nhu Y', 'suong' => ' Suong', 'tai' => 'Tai', 'minh' => ' Minh', 'kiet' => 'Kiet');
	foreach ($arr as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}
	echo "//////////<br>";
	foreach ($arr1 as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}
	echo "//////////<br>";
	foreach ($arr2 as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}
	//console.log();
	array_push($arr, 'Tuan');
	//var_dump($arr);
	echo "<br>";
	array_pop($arr1);
	//var_dump($arr1);
	echo "<br>";
	unset($arr2['suong']);
	//var_dump($arr2);
	echo "<br>";
	$arr3 = array_merge($arr1, $arr2);
	//var_dump($arr3);
	echo "//////////<br>";
	foreach ($arr3 as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}



	echo "//////////<br> my Class <br>";
	$myClass = array();
	array_push($myClass,'Tuan');
	array_push($myClass, 'Tai');
	var_dump($myClass);
	$arrMyClass = array(
		'nhuy' => array(
				'name' => 'Nhy y',
				'age'  => 20,
				'gender' => 'female',
				'phone' => '0988...'
			),
		'tuan' => array(
				'name' => 'Tuan',
				'age'  => 21,
				'gender' => 'male',
				'phone' => '0934...'
			),
		'tai'=> array(
				'name' => 'Tai',
				'age'  => 23,
				'gender' => 'male',
				'phone' => '0905...'
			)
		);
	//var_dump($arrMyClass);
	// 1. Nhu Y - 20 tuoi - Nu - 0988...
	// 2. Tuan - 21 tuoi - Nam - 0934...
	// 3. Tai - 23 tuoi - Nam - 0905...
	// Them ban Vuong, 25 tuoi, Nam, 0978... vao danh sach lop
	// Doi so dien thoai cua ban Nhu Y la 0168...
	// Xoa ban Tai khoi danh sach lop
	echo "<br/>----------------<br/>";
	function changeGenderVi($gender){
		return $gender == 'male'?"Nam":"Nu";
		// if ($gender == 'male') {
		// 	return "Nam";
		// }else {
		// 	return "Nu";
		// }
	}
	function listClass($arrMyClass) {
		$i = 1;
		foreach ($arrMyClass as $key => $value) {
			echo $i.' - '.$value['name'].' - '.$value['age'].' tuoi'.' - '.changeGenderVi($value['gender']).' - '.$value['phone'];
			echo "<br>";
			$i++;
		}
	}
	listClass($arrMyClass);
	// 1 - Nhy y - 20 tuoi - female - 0988...
	// 2 - Tuan - 21 tuoi - male - 0934...
	// 3 - Tai - 23 tuoi - male - 0905...
	$arrNewMember = array(
		'vuong'=> array(
				'name' => 'Vuong',
				'age'  => 25,
				'gender' => 'male',
				'phone' => '0978...'
			)
		);
	$arrNewClass = array_merge($arrMyClass, $arrNewMember);
	//var_dump($arrNewClass);
	echo "<br/>----------------<br/>";
	listClass($arrNewClass);
	echo $arrNewClass['nhuy']['phone'];
	$arrNewClass['nhuy']['phone'] = '0168...';
	echo "<br/>----------------<br/>";
	listClass($arrNewClass);

	
	unset($arrNewClass['tai']);
	echo "<br/>----------------<br/>";
	listClass($arrNewClass);
?>