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

    p.search_wrap {
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      overflow: hidden;
    }

    legend {
      font-size: 30px;
      text-align: center;
      color: #454851;
      margin-bottom: 20px;
    }

    input {
      width: 200px;
      height: 40px;
      padding: 0 10px;
      border-radius: 5px;
      color: #D45246;
      font-size: 14px;
      font-family: 'paybooc-Medium';
      border: 1px solid #ced4da;
      box-shadow: 2px 2px 0 rgb(136 136 136 / 38%);
    }

    input:active {
      box-shadow: 1px 1px 0 rgb(0, 0, 0, 0.5);
      position: relative;
      top: 2px;
    }

    input:focus {
      outline: 2px solid #D45246;
    }

    form {
      border-radius: 5px;
      background: #fff;
      padding: 30px;
      box-sizing: border-box;
      margin: 0 auto;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      width: 400px;
      height: 300px;
      margin-top: 15px;
    }

    .btn {
      background: #D45246;
      height: 40px;
      width: 70px;
      font-size: 19px;
      text-align: center;
      color: #fff;
      line-height: 20px;
      border-radius: 5px;
      border: none;
      box-shadow: 2px 2px 0 rgb(136 136 136);
      cursor: pointer;
    }

    button:active {
      box-shadow: 1px 1px 0 rgb(0, 0, 0, 0.5);
      position: relative;
      top: 2px;
      background-color: #a13329;
    }

    .err_id {
      color: #D45246;
      font-weight: bold;
      font-size: 14px;
      padding: 20px;
      margin-top: 10px;
    }
  </style>

  <script type="text/javascript">
    function check_id() {
      var input_id = document.getElementById("input_id");

      if (input_id.value == "") {
        var err_txt = document.querySelector('.err_id');
        err_txt.textContent = '아이디를 입력하세요.';
        input_id.focus();
        return false;
      }
      if (input_id.value) {
        let regid = /^[a-z]+[a-z0-9]{5,19}$/g;
        if (!regid.test(input_id.value)) {
          var err_txt = document.querySelector('.err_id');
          err_txt.textContent = '영어+숫자 조합, 6~20자만 가능합니다.';
          input_id.focus();
          return false;
        }
      }
    };
  </script>
</head>

<body>
  <form name="check_id_form" action="result_id.php" method="post" onsubmit="return check_id()">
    <fieldset>
      <legend>중복 검색</legend>
      <p class="search_wrap">
        <label for="input_id" class="blind">아이디</label>
        <input type="text" name="input_id" id="input_id" autofocus>
        <button type="submit" class="btn"><i class="fas fa-search"></i></button><br>
      </p>
      <span class="err_id"></span>
    </fieldset>
  </form>
</body>

</html>