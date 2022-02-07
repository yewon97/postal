<?php
include '../inc/admin_session.php';

/* 클릭한 사용자 정보 가져오기 */
$u_idx = $_GET['u_idx'];

/* DB 연결 */
include '../../inc/dbcon.php';

/* 쿼리 작성 */
$sql = "select * from member where idx=$u_idx;";

/* 쿼리 전송 */
$result = mysqli_query($dbcon, $sql);

/* 결과 가져오기 */
$array = mysqli_fetch_array($result);
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
  <meta property="og:image" content="../../images/postal.png" />
  <meta property="og:description" content="우정사업본부" />
    <title>관리자(회원정보수정)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style type="text/css">
      body {padding: 15px;}
      ul {list-style: none; padding: 0; overflow: hidden;}
      .menu_list li {float: left;}
      .menu_list li:after {content: '|'; margin: 0 10px; color:#212529;}
      a{text-decoration:none;color:#0C6EFD}
      a:hover{color:rgb(255, 153, 0)}
      body,select,option,button{font-size:16px}
      input{border:1px solid #999;font-size:14px;padding:5px 10px}
      input,button,select,option{vertical-align:middle}
      form{width:700px;padding: 10px 15px;}
      .border {border: #000}
      input[type=checkbox]{width:20px;height:20px}
      span{font-size:14px;color:#f00}
      p span{display:block;margin-left:130px}
      .btn {padding: 3px 5px;}
      .txt{display:inline-block;width:120px}
      .btn_wrap{text-align:center}
      .email_sel{width:120px;height:28px}
      .postal_code{width:100px;margin-bottom:5px}
      .addr1{width:400px;margin-bottom:5px}
      .addr2{width:400px;margin-bottom:5px}
    </style>
      <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript">
      function edit_check(){
        var pwd = document.getElementById("pwd");
        var repwd = document.getElementById("repwd");
        var mobile = document.getElementById("mobile");
        if (pwd.value) {
          let regpwd = /^(?=.*[a-zA-z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&\\(\\)\-_=+]).{8,16}$/;
          if (!regpwd.test(pwd.value)) {
            var err_txt = document.querySelector('.err_pwd');
            err_txt.textContent = '비밀번호는 영문, 숫자, 특수문자가 모두 포함된 8~16자여야 합니다.';
            pwd.focus();
            return false;
          }
        };
        if(pwd.value){
            if(pwd.value != repwd.value){
                var err_txt = document.querySelector(".err_repwd");
                err_txt.textContent = "비밀번호를 확인해 주세요.";
                repwd.focus();
                return false;
              };
          };
      };

        function change_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");

            var idx = email_sel.options.selectedIndex;

            var sel_txt = email_sel.options[idx].value;
            email_dns.value = sel_txt;
        };

        function addr_search(){
          let addr2 = document.querySelector('.addr2');
          new daum.Postcode({
            oncomplete: function (data) {
              let postalCode = document.querySelector('#postalCode');
              let addr1 = document.querySelector('.addr1');
              postalCode.value = data.zonecode;
              addr1.value = data.address;
            }
          }).open();
          addr2.focus();
        };

        function del_check(){
            var i = confirm("정말 삭제하시겠습니까?\n삭제한 아이디는 복원하실 수 없습니다.");

            if(i == true){
                location.href = "delete.php?u_idx=<?php echo $u_idx; ?>";
            };
          };
        
    </script>
</head>
<body>
    <h2>* 관리자 페이지 *</h2>
    <p>"<?php echo $s_name; ?>"님, 안녕하세요.</p>
    <ul class="menu_list">
        <li><a href="/postal/index.php" class="bar">홈으로</a></li>
        <li><a href="/postal/admin/members/list.php" class="bar">회원 관리</a></li>
        <li><a href="#none" class="bar">게시판 관리</a></li>
        <li><a href="/postal/login/logout.php">로그아웃</a></li>
    </ul>
    <hr>
    <form name="edit_form" action="edit_ok.php" method="post" onsubmit="return edit_check()" class="border border-info">
        <fieldset>
            <legend>* 회원 정보 수정</legend>
            <input type="hidden" name="u_idx" value="<?php echo $u_idx; ?>">
            <p>
                <div class="txt">이름</div>
                <?php echo $array['u_name']; ?>
            </p>

            <p>
                <div class="txt">아이디</div>
                <?php echo $array['u_id']; ?>
            </p>

            <p>
                <label for="pwd" class="txt">비밀번호</label>
                <input type="password" name="pwd" id="pwd" class="pwd">
                <br>
                <span class="err_pwd">* 비밀번호는 영문, 숫자, 특수문자가 모두 포함된 8~16자여야 합니다.</span>
            </p>

            <p>
                <label for="repwd" class="txt">비밀번호 확인</label>
                <input type="password" name="repwd" id="repwd" class="repwd">
                <br>
                <span class="err_repwd"></span>
            </p>
            
            <?php
// str_replace("어떤 문자를", "어떤 문자로", "어떤 문장에서");
// $birth = str_replace("-", "", $array["birth"]);
?>
            <p>
                <label for="repwd" class="txt">생년월일</label>
                <input type="text" name="birth" id="birth" class="birth" value="<?php echo $array['birth']; ?>">
                <input type="number" name="birth_cal_type" id="birth_cal_type" class="birth_cal_type" value="<?php echo $array['birth_cal_type'] === '1' ? '1' : '2'; ?>" maxlength="1" max="2">
                <br>
                <span>* ex 2021-10-22</span>
                <span>* 양력 : 1 / 음력 : 2</span>
            </p>

            <p>
                <label for="postalCode" class="txt">주소</label>
                <input type="text" name="postalCode" id="postalCode" class="postal_code" value="<?php echo $array['postalCode']; ?>">
                <button type="button" class="btn btn-outline-primary" onclick="addr_search()">주소검색</button>
                <br>
                <label for="addr1" class="txt">기본주소 </label>
                <input type="text" name="addr1" id="addr1" class="addr1" value="<?php echo $array['addr1']; ?>">
                <br>
                <label for="addr2" class="txt">상세주소 </label>
                <input type="text" name="addr2" id="addr2" class="addr2" value="<?php echo $array['addr2']; ?>">
            </p>

            <?php // explode("기준 문자", "어떤 문장에서");

$email = explode('@', $array['email']); ?>
            <p>
                <label for="" class="txt">이메일</label>
                <input type="text" name="email_id" id="email_id" class="email_id" value="<?php echo $email[0]; ?>"> @ 
                <input type="text" name="email_dns" id="email_dns" class="email_dns" value="<?php echo $email[1]; ?>"> 
                <select name="email_sel" id="email_sel" class="email_sel" onchange="change_email()">
                    <option value="">직접 입력</option>
                    <option value="naver.com">naver.com</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="hanmail.net">hanmail.net</option>
                    <option value="daum.com">daum.com</option>
                    <option value="nate.com">nate.com</option>
                </select>
            </p>
            
            <p>
                <label for="mobile" class="txt">전화번호</label>
                <input type="text" name="mobile" id="mobile" class="mobile" value="<?php echo $array['mobile']; ?>">
                <br>
                <span class="err_mobile">* 010-1234-5678</span>
            </p>

            <p>
                <div class="txt">가입일</div>
                <?php echo $array['reg_date']; ?>
            </p>

            <p class="btn_wrap">
                <button type="button" class="btn btn-outline-primary" onclick="history.back()">이전으로</button>
                <button type="button" class="btn btn-outline-primary" onclick="location.href='../admin.php'">홈으로</button>
                <button type="button" class="btn btn-outline-primary" onclick="del_check()">회원삭제</button>
                <button type="submit" class="btn btn-outline-primary">정보수정</button>
            </p>
        </fieldset>
    </form>
</body>
</html>