<?php 
  $userName = "php04";
  echo $userName;
  // + - * / % = == !=
  function myFunction(){
  	echo "<br>";
  	$a = 5;
  	return $a;
  }
  echo myFunction();
//   BT: Viết hàm tính tổng 2 số
//   Có 2 tham số truyền vào và trả về giá trị tổng
  function mySum($a = 4, $b = 3) {
  	return $a + $b;
  }
  echo "<br>";
  echo mySum(5, 7);
  echo "<br>";
  echo mySum();
// BT2: Tiếp tục kết quả trả về tổng của bài tập 1
// Kiểm tra tổng đó chẵn hay lẻ, nếu lẻ kiểm tra 
// xem có hia hết cho 3 hay không?
  echo "<br>";
  $total = mySum(8, 9);
  if ($total % 2 == 0) {
  	echo "Tong la so chan";
  } elseif ($total % 3 == 0) {
  	echo "Tong la so le va chia het cho 3";
  } else {
  	echo "Tong la so le va khong chia het cho 3";
  }
  //
  $dieukien = true;
  // 1
  if ($dieukien) {
  	// neu dieu kien dung thi thuc hien lenh nay
  }
  // 2
  if ($dieukien) {
  	// neu dieu kien dung thi thuc hien lenh nay
  } else {
  	// neu dieu kien sai thi thuc hien lenh nay
  }
  // 3
  $dieukien2 = false;
  if ($dieukien) {
  	// neu dieu kien dung thi thuc hien lenh nay
  } elseif ($dieukien2) {
  	// neu dieu kien 2 dung thi thuc hien lenh nay
  } else {
  	// neu dieu kien 2 sai thi thuc hien lenh nay
  }
  // 4
  $dieukien3 = false;
  $dieukien_cua_lenh_nay = true;
  if ($dieukien) {
  	// neu dieu kien dung thi thuc hien lenh nay
  } elseif ($dieukien2) {
  	// neu dieu kien 2 dung thi thuc hien lenh nay
  } elseif ($dieukien3) {
  	// neu dieu kien 3 dung thi thuc hien lenh nay
  	if ($dieukien_cua_lenh_nay) {

  	} else {

  	}
  } else {
  	// neu dieu kien 3 sai thi thuc hien lenh nay
  }

// BT3: Với một số cho trước có giá trị từ 1 đến 12
// Với số đó, in ra số ngày của tháng tương ứng
// Sử dụng switch case
//
// Thang 1, 3, 5, 7, 8, 10, 12 co 31 ngay
// Thang 4, 6, 9, 11 co 30 ngay
// Thang 2 nam nhuan co 29 ngay, nam k nhuan co 28 ngay
  echo "<br>";
  $n = 7;
  switch ($n) {
  	case '1':
  	case '3':
  	case '5':
  	case '7':
  	case '8':
  	case '10':
  	case '12':
  		echo "Thang $n co 31 ngay";
  		break;
  	case '4':
  	case '6':
  	case '9':
  	case '11':
  		echo "Thang $n co 30 ngay";
  		break;
  	case '2':
  		echo "Thang $n nam nhuan co 29 ngay, thang  nam khong nhuan co 28 ngay";
  		break;
  	default:
  		echo "So ban cho truoc khong phai la thang";
  		break;
  }
?>