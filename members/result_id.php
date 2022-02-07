<?php
$u_id = $_POST["input_id"];
// echo $u_id; exit;

include "../inc/dbcon.php";

$sql = "select u_id from member where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);
// echo $num; exit;
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="우정사업본부" />
  <meta property="og:url" content="http://yebang97.dothome.co.kr/postal/" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/postal.png" />
  <meta property="og:description" content="우정사업본부" />
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>아이디 중복 검색</title>
  <style type="text/css">
    body,
    button {
      font-family: 'paybooc-Medium';
    }
    button:active {
      box-shadow: 1px 1px 0 rgb(0, 0, 0, 0.5);
      position: relative;
      top: 2px;
      background-color: #a13329;
    }
    .result {
      height: 110px;
      text-align: center;
      margin-top: 80px;
    }
    .right, .wrong {
      line-height: 1.5;
      font-weight: bold;
      color: #454851;
      font-size: 30px;
    }
    .use_btn {
      background: #D45246;
      height: 40px;
      width: 130px;
      font-size: 20px;
      text-align: center;
      color: #fff;
      line-height: 20px;
      border-radius: 5px;
      border: none;
      box-shadow: 2px 2px 0 rgb(136 136 136);
      cursor: pointer;
      margin-top: 20px;
      box-sizing: border-box;
    }
  </style>
<?php if(!$num){ ?>
    <script type="text/javascript">
        function return_id(){
            opener.document.getElementById("u_id").value = "<?php echo $u_id;?>";
            window.close();
        };
    </script>
    <?php }; ?>
</head>

<body>
      <div class="result">
      <?php if(!$num){ // if($num == 0) ?>
        <p class="right">이 아이디는 사용 가능합니다.</p>
        <p class="right">사용하시겠습니까?</p>
        <button type="button" class="use_btn" onclick="return_id()">사용하기</button>
      <?php } else{ ?>
        <p class="wrong">사용 중인 아이디 입니다.</p>
        <p class="wrong">다른 아이디를 입력해주세요</p>
        <button type="button" class="use_btn" onclick="history.back()">다시검색</button>
      <?php }; ?>
      </div>

</body>

</html>