<meta charset="utf-8">
<?php
header ("content-type:text/html; charset=utf-8");

// 이전 페이지에서 값 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
$birth = $_POST["birth"];
$birth_cal_type = $_POST["birth_cal_type"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$mobile = $_POST["mobile"];
$reg_date = date("Y-m-d");

// 값 확인
/* echo "이름 : ".$u_name."<br>";
echo "아이디 : ".$u_id."<br>";
echo "비밀번호 : ".$pwd."<br>";
echo "생년월일 : ".$birth."<br>";
echo "우편번호 : ".$postalCode."<br>";
echo "기본주소 : ".$addr1."<br>";
echo "상세주소 : ".$addr2."<br>";
echo "이메일 : ".$email."<br>";
echo "전화번호 : ".$mobile."<br>";
echo "가입일 : ".$reg_date."<br>"; */

include "../inc/dbcon.php";

$sql = "insert into member(";
$sql .= "u_name, u_id, pwd, birth, birth_cal_type, postalCode, addr1, addr2, email, mobile, reg_date";
$sql .= ") values(";
$sql .= "'$u_name', '$u_id', '$pwd', '$birth', '$birth_cal_type', '$postalCode', '$addr1', '$addr2', '$email', '$mobile', '$reg_date'";
$sql .= ");";
echo $sql;

/* 데이터베이스에 쿼리 전송 */
// mysqli_query("연결객체", "전달할 쿼리");
mysqli_query($dbcon, $sql);


/* DB(연결) 종료 */
mysqli_close($dbcon);


/* 리디렉션 */
echo "
    <script type=\"text/javascript\">
        location.href = \"../index.php\";
    </script>
";
?>