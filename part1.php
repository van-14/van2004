<html>
<head>
</head>
<body>
<?php
$x="Phạm Thị Vân";
//1
echo "Số kí tự trong một chuỗi:".strlen($x). "<br>";
//2
echo"Số từ trong một chuỗi:".str_word_count($x). "<br>";
//3
echo"Đảo ngược:".strrev($x). "<br>";
//4
echo"Tìm chuỗi Phạm:".strpos($x,"Phạm"). "<br>";
//5
echo"Thay thế Vân:".str_replace('Vân', 'VÂN',$x). "<br>";
//6
$y="Phạm Thị Vân 2004";
$result = strncmp($x, $y, 4);
echo $result."<br>";
echo strcmp($y,$x). "<br>";
//echo'Kiểm tra chuỗi có bắt đầu bằng chữ Vân:'.strncmp($x, $y, 5);
//7
echo"Chuỗi thành chữ in hoa:".strtoupper($x). "<br>";
//8
echo"Chuỗi thành chữ thường:".strtolower($x). "<br>";
//9
$z="xin chao";
echo"In hoa chữ cái đầu tiên:".ucwords($z). "<br>";
//10
echo"Loại bỏ khoảng trắng ở đầu và ở cuối:".trim(" xin chao "). "<br>";
//11
echo"Loại bỏ ký tự đầu tiên của chuỗi:".ltrim($z,"xin"). "<br>";
//12
echo"Loại bỏ ký tự cuối cùng của chuỗi:".rtrim($z,"o"). "<br>";
//13
echo '<pre>';
print_r(explode(' ', $x));
//14
$a= array('lập','trình','PHP');
echo implode(" ",$a)."<br>";
//15
echo str_pad($z, 15, "?.",STR_PAD_BOTH)."<br>";
//16

$str16=strrchr($y,$x[0]);
if ($str16 !==false && strpos($str16,$x)===$x){
    echo"Chuỗi $y kết thức bằng chuỗi $x";
}else{
    echo"Chuỗi $y không kết thúc bằng chuỗi $x";
}
echo "<br>";
//17
$result=strstr($y,$x);
if ($result !==false){
    echo"Chuỗi $y chứa chuỗi $x";
}else{
    echo"Chuỗi $y không chứ chuỗi $x";
}
echo "<br>";
//18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$str18 = "!@#$%^&PhamVan@#%%";
echo preg_replace("/\W/",".", $str18);
echo "<br>";
#   "\W" Siêu ký tự \W được dùng để tìm các ký tự KHÔNG PHẢI là chữ, số, hoặc dấu gạch dưới _
//19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().

$x=10;
if(is_int($x)){
 echo"Biến x thuộc kiểu số nguyên";
}
else{
 echo"Biến x không thuộc kiểu số nguyên";
}
echo "<br>";

// 20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
$str19 = "vanpinkk4@gmail.com";
$str20 = "vanpinkk4";

# Hàm kiểm tra email hợp lệ
function checkEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email hợp lệ!";
    } else {
        return "Email không hợp lệ!";
    }
}

# Kiểm tra cả hai chuỗi
echo "Câu 20: ";
echo "Chuỗi 1: " . checkEmail($str19) . "<br>";
echo "Chuỗi 2: " . checkEmail($str20);
?>
</body>
</html>
