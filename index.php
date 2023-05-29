<!-- Câu 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?--> 
<?php
function checkNumber ($n){
    if ($n%2==0){
        echo "$n là số chẵn";
    } else {
        echo "$n là số lẻ ";
    }
}
$n = 6;
echo checkNumber ($n);
echo "<br>";

//Câu 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
function learningGrading($diem_giua_ky, $diem_cuoi_ky){
    $avg= ($diem_giua_ky * 0.3)+($diem_cuoi_ky * 0.7);
    return $avg;
}
$diem_giua_ky = 7;
$diem_cuoi_ky = 6;
$avg = learningGrading ($diem_giua_ky , $diem_cuoi_ky);
if ($avg >=9 ){
    echo " Sinh viên xếp loại xuất sắc ";
} else if ($avg >=7 && $avg <9) {
    echo "Sinh viên xếp loại giỏi ";
}else if ($avg >=5 && $avg <7) {
    echo " Sinh viên xếp loại khá ";
}else {
    echo "Sinh viên xếp loại trung bình - yếu ";
}
echo "<br>";


// Câu 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYear ($n){
    if ($n % 2 == 0) {
        return "Năm nay là năm chẵn";
    } else {
        return "Năm nay là năm lẻ";
    }
}

$n = 2023;
$result= checkYear($n);
echo $result;
echo "<br>";

// Câu 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumber($n) {
  $print = " ";
  for ($i = 1; $i <= $n; $i++) {
    $print .= $i . ", ";
  }
  return $print;
}

$n = 100;
$result = printNumber($n);
echo $result;
echo "<br>";


//Câu 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường  
function showNumber (){
    for ($i = 1; $i <= 100; $i++){
        if ($i % 2 == 0){
            echo "<b> $i </b>";
        }
        else {
            echo "$i ";
        }
    }
}
$result = showNumber();
echo $result;
echo "<br>";

// Câu 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
//$nam = array(1990, 1991, 1992, 1993, 1994, 1995); 
function printArray ($array){     
    foreach ($array as $value){
        echo $value . " ";
    }
}  
$array = array( 1990, 1991, 1992, 1993, 1994, 1995);
printArray($array); 
?>
