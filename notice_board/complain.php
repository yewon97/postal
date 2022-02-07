<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="우정사업본부" />
  <meta property="og:url" content="http://yebang97.dothome.co.kr/postal/" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/postal.png" />
  <meta property="og:description" content="우정사업본부" />
  <title>공지사항</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- 외부 css -->
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/sub_common.css" type="text/css">
  <link rel="stylesheet" href="../css/complain.css" type="text/css">
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
    <h2 class="cont_title">우정소식</h2>
  </div>

  <!-- main starts -->
  <main id="main" class="main">
    <!-- aside starts -->
    <aside id="aside" class="lnb_aside">
      <div class="lnb_aside_wrap">
        <p class="aside_top_img"></p>
        <ul class="lnb_aside_list">
          <li>
            <h2>우정소식</h2>
          </li>
          <li><a href="notice.php">공지사항</a></li>
          <li><a href="#">민원신청</a></li>
          <li><a href="#tab3">자주하는 질문 (FAQ)</a></li>
        </ul>
      </div>
    </aside>
    <!-- aside end -->

    <!-- 민원신청 폼 부분 -->
    <section id="tab1" class="cont_container">
      <h3>민원신청</h3>
      <form name="complain_form" action="complain_ok.php" method="post"
        onsubmit="return form_check();" class="complain_form" id="complain">
        <div class="character_img"></div>
        <fieldset>
          <legend class="join_page_legend blind">민원신청</legend>
          <ul class="all_input_wrap">
            <li>
              <label for="complain_type">유형 *</label>
              <select name="complain_type" id="complain_type">
                <option value="1">칭찬 글</option>
                <option value="2">불만 글</option>
                <span class="error_txt err_complain_type"></span>
              </select>
            </li>
            <li>
              <label for="complain_title">민원 제목 *</label>
              <input type="text" maxlength="200" class="complain_title" id="complain_title" name="complain_title">
              <span class="add_desc">(200자 내외)</span>
              <span class="error_txt err_complain_title"></span>
            </li>
            <li>
              <label for="complain_text">민원 내용 *</label>
              <textarea name="complain_text" id="complain_text" maxlength="1800" cols="20" rows="10"></textarea>
              <span class="add_desc">(1800자 내외)</span>
              <span class="error_txt err_complain_text"></span>
            </li>
            <li>
              <label for="complain_file">첨부파일</label>
              <input type="file" id="complain_file" name="complain_file">
              <span class="add_desc">(최대 16MB)</span>
            </li>       
          </fieldset>
        </form>
        <div class="btn_wrap">
          <button type="submit" form="complain_form" class="submit_complain">문의하기</button>
        </div>
    <!-- 민원신청 폼 부분 끝 -->
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