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
  <link rel="stylesheet" href="../css/sub_02.css" type="text/css">
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
      <h3>찾아오시는 길</h3>
      <article class="main_cont1">
        <div class="main_cont1_wrap">
          <div id="map"></div>
        </div>
      </article>

      <article class="main_cont2">
        <div class="main_cont2_wrap">
          <h3>주소</h3>
          <ul>
            <li>우편번호 : 30114, 세종특별자치시 도움5로 19 (어진동)</li>
            <li>고객 콜센터 우편서비스 : 1588-1300</li>
            <li>금융서비스 : (예금) 1599-1900 / 1588-1900, (보험) 1599-0100</li>
            <li>Fax : 0505-005-1024</li>
          </ul>
        </div>
      </article>
      <article class="main_cont3">
        <div class="main_cont3_wrap">
          <h3>교통정보 안내</h3>
          <ul>
            <li>승용차</li>
            <li>기차</li>
            <li>고속・시외버스</li>
          </ul>
          <div>
            <ul>
              <li>
                <h4>경부고속도로</h4>
                <p>남청주IC(구. 청원IC) <i class="fas fa-arrow-right"></i> 부강 <i class="fas fa-arrow-right"></i> 국지도 96호 <i
                    class="fas fa-arrow-right"></i> 정부세종청사(8동, 우정사업본부)</p>
                <p>
                  청주IC <i class="fas fa-arrow-right"></i> 36번 국도(조치원 방향) <i class="fas fa-arrow-right"></i> 정부세종청사(8동,
                  우정사업본부)
                </p>
              </li>
              <li>
                <h4>호남고속도로</h4>
                <p>유성IC <i class="fas fa-arrow-right"></i> 1번 국도(조치원방향) <i class="fas fa-arrow-right"></i> 정부세종청사(8동,
                  우정사업본부)</p>
              </li>
              <li>
                <h4>논산천안 고속도로</h4>
                <p>정안IC <i class="fas fa-arrow-right"></i> 정부세종청사 연결도로 <i class="fas fa-arrow-right"></i> 은하수공원 <i
                    class="fas fa-arrow-right"></i> 정부세종청사(8동, 우정사업본부)</p>
              </li>
              <li>
                <h4>당진영덕 고속도로</h4>
                <p>서세종IC(동공주IC) <i class="fas fa-arrow-right"></i> 36번 국도 <i class="fas fa-arrow-right"></i>
                  정부세종청사(8동,
                  우정사업본부)</p>
                <p>남세종IC(북유성IC) <i class="fas fa-arrow-right"></i> 1번 국도(조치원 방향) <i class="fas fa-arrow-right"></i>
                  정부세종청사(8동, 우정사업본부)</p>
              </li>
            </ul>
          </div>
          <div>
            <ul>
              <li>조치원역(청사까지 30분 소요) 버스터미널 <i class="fas fa-arrow-right"></i> 550번, 551번, 601번, 602번 버스이용 <i
                  class="fas fa-arrow-right"></i> 정부세종청사(북측) 하차</li>
              <li>오송역(청사까지 20분 소요) BRT 또는 751번 버스 이용 <i class="fas fa-arrow-right"></i> 정부세종청사(북측) 하차</li>
              <li>대전역(청사까지 60분 소요) 지하철 승차(반석행) <i class="fas fa-arrow-right"></i> 반석역(6번출구)[환승]BRT이용 <i
                  class="fas fa-arrow-right"></i> 정부세종청사(북측) 하차</li>
              <li>세종시 BRT 대전 반석역 <i class="fas fa-arrow-right"></i> 세종터미널 <i class="fas fa-arrow-right"></i> 첫마을 <i
                  class="fas fa-arrow-right"></i> 세종청사 <i class="fas fa-arrow-right"></i> 오송역</li>
            </ul>
          </div>
          <div>
            <ul>
              <li>세종시 고속시외버스터미널 (070-4904-3262) BRT 또는 601번, 602번, 751번 버스 이용,<br> 세종청사터미널(정부세종청사 종합안내실 앞,
                044-200-2114)에서 도보이동</li>
            </ul>
          </div>
        </div>
      </article>
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