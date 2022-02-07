<?php
session_start();

/* 로그인 사용자 */
$s_idx = $_SESSION["s_idx"];
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
$s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"]:"";

/* DB 연결 */
include "../inc/dbcon.php";

/* 쿼리 작성 */
$sql = "select * from member where idx=$s_idx;";

/* 쿼리 전송 */
$result = mysqli_query($dbcon, $sql);

/* 결과 가져오기 */
$array = mysqli_fetch_array($result);
$email = explode("@", $array["email"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="우정사업본부" />
  <meta property="og:url" content="http://higomn05.dothome.co.kr/BUSTAGO" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/postal.png" />
  <meta property="og:description" content="우정사업본부" />
  <title>공지사항</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- 외부 css -->
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/sub_common.css" type="text/css">
  <link rel="stylesheet" href="../css/edit.css" type="text/css">
  <!-- 외부 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="../js/common.js" type="text/javascript"></script>
</head>

<body>
  <!-- header starts -->
  <? include $_SERVER["DOCUMENT_ROOT"]."/postal/inc/header.php" ?> 

  <!-- header end -->

  <div class="cont_title_wrap">
    <h2 class="cont_title">정보수정</h2>
  </div>

  <!-- main starts -->
  <main id="main" class="main">
    <!-- aside starts -->
    <aside id="aside" class="lnb_aside">
      <div class="lnb_aside_wrap">
        <p class="aside_top_img"></p>
        <ul class="lnb_aside_list">
          <li>
            <h2>마이페이지</h2>
          </li>
          <li><a href="#tab1">장바구니</a></li>
          <li><a href="#tab2">신고접수 내역</a></li>
          <li><a href="#tab3">정보수정</a></li>
        </ul>
      </div>
    </aside>
    <!-- aside end -->

    <!-- 정보수정 폼 부분 -->
    <section id="tab1" class="cont_container">
      <form name="edit_form" action="edit_ok.php" method="post"
        onsubmit="return edit_check();" class="user_edit_part" id="edit">
        <fieldset>
          <legend class="join_page_legend">개인정보수정</legend>
          <ul class="all_input_wrap">
            <li>
              <label for="u_name">이름 *</label>
              <input type="text" id="u_name" name="u_name" readonly value="<?php echo $array["u_name"]; ?>">
              <span class="error_txt err_name"></span>
            </li>
            <li>
              <label for="pwd">비밀번호 *</label>
              <input type="password" class="pwd" id="pwd" name="pwd">
              <span class="add_desc">(영문+숫자+특수문자 조합, 8~25자)</span>
              <span class="error_txt err_pwd"></span>
            </li>
            <li>
              <label for="repwd">비밀번호 확인 *</label>
              <input type="password" id="repwd" class="repwd">
              <span class="error_txt err_repwd"></span>
            </li>
            <li class="user_birth">
              <label for="birth">생년월일 *</label>
              <input type="text" class="birth_year" id="birth" maxlength="8" oninput="autoHyphen_b(this)" name="birth" value="<?php echo $array["birth"]; ?>">

                <input type="radio" id="solar_cal" name="birth_cal_type" value="1" <?php if($array["birth_cal_type"]=="1") echo "checked"?>>
                <label for="solar_cal">양력</label>
                <input type="radio" id="lunar_cal" name="birth_cal_type" value="2" <?php if($array["birth_cal_type"]=="2") echo "checked"?>>
                <label for="lunar_cal">음력</label>
 

              <span class="add_desc">ex)19900101 (숫자만 8자리)</span>
              <span class="error_txt err_birth"></span>
            </li>
            <li class="user_email">
              <label for="email_id">이메일 *</label>
              <input type="text" id="email_id" name="email_id" value="<?php echo $email[0]; ?>">
              <span class="connect_word"> @ </span>
              <input type="text" id="email_dns" name="email_dns" maxlength="10" value="<?php echo $email[1]; ?>">
              <div class="email_sel">
                <div class="dns_option_select">
                  <span>직접 입력</span>
                  <span class="down_icon">도메인 선택</span>
                </div>
                <ul class="email_dns_list">
                  <li data-value=" "><a href="javascript:void(0);">직접 입력</a></li>
                  <li data-value="naver.com"><a href="javascript:void(0);">naver.com</a></li>
                  <li data-value="hanmail.net"><a href="javascript:void(0);">hanmail.net</a></li>
                  <li data-value="daum.net"><a href="javascript:void(0);">daum.net</a></li>
                  <li data-value="nate.com"><a href="javascript:void(0);">nate.com</a></li>
                  <li data-value="gmail.com"><a href="javascript:void(0);">gmail.com</a></li>
                </ul>
              </div>
              <span class="error_txt err_email"></span>
            </li>
   
            <li class="user_address">
              <label for="postalCode" class="postal_code">주소 *</label>
              <input type="text" name="postalCode" id="postalCode" class="postalCode" readonly maxlength="5"  value="<?php echo $array["postalCode"]; ?>">
              <button type="button" class="search_addr_btn" onclick="addr_search()">주소검색</button>
              <br>
              <div class="detail_addr">
                <label for="addr1" class="txt">기본주소 </label>
                <input type="text" name="addr1" id="addr1" class="addr1" readonly  value="<?php echo $array["addr1"]; ?>">
                <label for="addr2" class="txt">상세주소 </label>
                <input type="text" name="addr2" id="addr2" class="addr2"  value="<?php echo $array["addr2"]; ?>">
                <span class="error_txt err_address"></span>
              </div>
            </li>
          
            <li class="user_phone">
              <label for="mobile">휴대폰 번호 *</label>
              <input type="text" id="mobile" maxlength="13" oninput="autoHyphen_p(this)" name="mobile" value="<?php echo $array["mobile"]; ?>">
              <span class="add_desc">숫자만 입력하세요.</span>
              <span class="error_txt err_mobile"></span>
            </li>
          </ul>

          <div class="btn_wrap">
            <button type="submit" form="join" class="user_join_btn">수정하기</button>
          </div>
        </fieldset>
      </form>
    <!-- 정보수정 폼 부분 끝 -->
  </main>
  <!-- main end -->

  <!-- footer start -->
  <footer id="footer" class="footer">
    <div class="footer_top">
      <h2 class="blind">사이트 이용안내</h2>

      <div class="law-site_wrap">
        <div class="footer_law">
          <h3 class="blind">약관 및 정책</h3>
          <ul>
            <li><a href="terms/sub06_terms_homepage.html">개인정보처리방침</a></li>
            <li><a href="terms/sub06_terms_privacy.html">제한적보안확인제 / I-PIN제도</a></li>
            <li><a href="terms/sub06_terms_email.html">이용약관</a></li>
          </ul>
        </div>

        <div class="family_site">
          <h3>Family Site</h3>
          <ul>
            <li><a href="" target="_blank">정부24</a></li>
            <li><a href="" target="_blank">과학기술정보통신부</a></li>
            <li><a href="" target="_blank">한국우표포털서비스</a></li>
            <li><a href="" target="_blank">우정박물관</a></li>
            <li><a href="" target="_blank">한국우편사업진흥원</a></li>
            <li><a href="" target="_blank">우체국공익재단</a></li>
            <li><a href="" target="_blank">우체국시설관리단</a></li>
            <li><a href="" target="_blank">우체국물류지원단</a>
            <li><a href="" target="_blank">별정우체국연금관리단</a></li>
            <li><a href="" target="_blank">우체국금융개발원</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer_bottom">
      <h2>우정사업본부</h2>

      <div class="footer_bottom_cont_wrap">
        <div class="footer_bottom_cont1">
          <address>(30114)세종특별자치시 도움5로 19(어진동)</address>
          <p>사업자등록번호 101-83-02925</p>
          <p>E-mail webpost@koreapost.go.kr</p>
        </div>
        <div class="footer_bottom_cont2">
          <p>고객센터(우편 1588-1300, 예금 1599-1900, 보험 1599-0100), FAX : 0505-005-1024, 당직실 : 044-200-8841 (평일 야간, 공휴일)</p>
        </div>
        <div class="footer_bottom_cont3">
          <p>Copyright⒞2016 KOREA POST(Office of postal service). All rights reserved.</p>
          <strong>해당 사이트는 포트폴리오 목적으로 제작된 사이트 입니다.</strong>
        </div>
      </div>

      <ul class="footer_bottom_mark">
        <li><a href="javascript:;"><img src="../images/mark_wa.png" alt="웹 접근성 품질인증 마크"></a></li>
        <li><img src="../images/mark_ncsi.png" alt="국가고객만족도 수상마크"></li>
      </ul>
    </div>
  </footer>
  <!-- footer end -->

</html>