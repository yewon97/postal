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
  <title>찾아오시는 길</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- 외부 css -->
  <link rel="stylesheet" href="../css/sub_common.css" type="text/css">
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/sub_03.css" type="text/css">
  <!-- 외부 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="../js/common.js" type="text/javascript"></script>
  <script src="../js/sub_01.js" type="text/javascript"></script>
</head>

<body>
  <!-- header starts -->
  <? include $_SERVER["DOCUMENT_ROOT"]."/postal/inc/header.php" ?>
  <!-- header end -->

  <div class="cont_title_wrap">
    <h2 class="cont_title">기관소개</h2>
  </div>

  <!-- main starts -->
  <main id="main" class="main">
    <aside id="aside" class="lnb_aside">
      <div class="lnb_aside_wrap">
        <p class="aside_top_img"></p>
        <ul class="lnb_aside_list">
          <li>
            <h2>기관소개</h2>
          </li>
          <li><a href="sub_01.php">소속 기관 소개</a></li>
          <li><a href="sub_02.php">찾아오시는 길</a></li>
          <li><a href="sub_03.php">이용시간</a></li>
        </ul>
      </div>
    </aside>

    <section id="tab1" class="cont_container">
    <h3>이용시간</h3>
    <div class="service_hours">
      <p>* 운송여건에 따라 '오늘출발 우편물 접수마감시간'이 우체국마다 다를 수 있으니, 우편업무 이용 시 해당우체국에 마감시간을 문의하시기 바랍니다.</p>
      <table class="ctn_table1" style="max-width: none; border: 1px solid #000">
        <caption>우편서비스, 금융서비스 이용시간표로 구분,요일,이용시간,비고 정보를 나타냄</caption>
        <colgroup>
          <col style="width: 8%;">
          <col style="width: 15%;">
          <col style="width: 18%;">
          <col style="width: 15%;">
          <col style="width: 14%;">
          <col style="width: auto;">
        </colgroup>
        <thead>
          <tr>
            <th class="left_none" colspan="3" scope="col">구분</th>
            <th scope="col">요일</th>
            <th scope="col">이용시간</th>
            <th scope="col">비고</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="left_none" rowspan="4" scope="row">우편<br>서비스</th>
            <td>우체국창구</td>
            <td>-</td>
            <td>월~금 (평일)</td>
            <td>09:00~18:00</td>
            <td class="tl">공휴일 이용불가</td>
          </tr>
          <tr>
            <td rowspan="2">무인우편창구</td>
            <td>내부</td>
            <td>월~금 (평일)</td>
            <td>09:00~18:00</td>
            <td class="tl">공휴일 이용불가</td>
          </tr>
          <tr>
            <td><a href="#">옥외(위치안내)</a></td>
            <td>연중무휴</td>
            <td>08:00~22:00</td>
            <td class="tl">365일 언제나</td>
          </tr>
          <tr>
            <td>우편집중국</td>
            <td>-</td>
            <td>월~금 (평일)</td>
            <td>09:00~18:00</td>
            <td class="tl">공휴일 이용불가<br><span class="ico_star">성남 우편집중국 창구업무 취급하지 않음</span></td>
          </tr>
          <tr>
            <th class="left_none" rowspan="4" scope="row">금융<br>서비스</th>
            <td rowspan="3">우체국창구</td>
            <td>대민업무</td>
            <td>월~금 (평일)</td>
            <td>09:00~16:30</td>
            <td class="tl">공휴일 이용불가</td>
          </tr>
          <tr>
            <td>CD/ATM<br><span class="ico_star">우체국 내부설치 자동화기기</span></td>
            <td>월~금 (평일)</td>
            <td>09:00~18:00</td>
            <td class="tl">공휴일 이용불가</td>
          </tr>
          <tr>
            <td>365코너</td>
            <td>연중무휴</td>
            <td>07:00~23:30</td>
            <td class="tl">450개 일부 장소는 05시~익일 04시까지 영업</td>
          </tr>
          <tr>
            <td>우편집중국</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td class="tl">예금, 보험등의 서비스를 취급하지 않음</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

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
            <li><a href="">개인정보처리방침</a></li>
            <li><a href="">제한적보안확인제 / I-PIN제도</a></li>
            <li><a href="">이용약관</a></li>
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

  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9f830b2581d16d38ce0453990c04a721"></script>

  <script>
    var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
    var options = { //지도를 생성할 때 필요한 기본 옵션
      center: new kakao.maps.LatLng(36.504765530366605, 127.25925211402125), //지도의 중심좌표.
      level: 3 //지도의 레벨(확대, 축소 정도)
    };
    var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴
  </script>
</body>

</html>