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
  <title>우정사업본부</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- 외부 css -->
  <link rel="stylesheet" href="css/index.css" type="text/css">
  <link rel="stylesheet" href="css/common.css" type="text/css">
  <!-- 외부 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="js/index.js" type="text/javascript"></script>
  <script src="js/common.js" type="text/javascript"></script>
</head>

<body>
  <!-- header starts -->
  <? include $_SERVER["DOCUMENT_ROOT"]."/postal/inc/header.php" ?> 
  <!-- header end -->

  <main id="main" class="main">
    <div class="main_banner_container">
      <div class="bxslider">
        <div><img src="images/banner_01.png" alt=""></div>
        <div><img src="images/banner_02.png" alt=""></div>
        <div><img src="images/banner_03.png" alt=""></div>
        <div><img src="images/banner_04.png" alt=""></div>
      </div>
    </div>

    <section class="main_cont1">
      <div class="main_cont1_wrap">
        <article class="notice_wrap">
          <h3 class="notice">공지사항</h3>

          <ul class="notice_list">
            <li><a href="#" class="notice_cont">택배노조에 설 특별소통기간 정상 배달 촉구
              </a>
              <span>2022-01-19</span>
            </li>
            <li><a href="#" class="notice_cont">우체국 체크카드 출시 10주년 감사 이벤트
              </a>
              <span>2022-01-18</span>
            </li>
            <li><a href="#" class="notice_cont">우체국, 설 명절 우편물
                특별소통(1.17.~2.4.) 돌입
              </a>
              <span>2022-01-18</span>
            </li>
            <li><a href="#" class="notice_cont">우정사업본부장, 서안양우체국 시설물 긴급
                안전점검
              </a>
              <span>2022-01-18</span>
            </li>
            <li><a href="#" class="notice_cont">소포위탁배달원 개인별 분류 본격 실시
              </a>
              <span>2022-01-18</span>
            </li>
          </ul>
          <a href="" class="notice_more">더보기</a>
        </article>

        <article class="quickbtn_wrap">
          <h3 class="blind">바로가기 모음</h3>
          <ul>
            <li><a href="a" class="quickbtn1">우편번호검색</a></li>
            <li><a href="b" class="quickbtn2">우체국찾기</a></li>
            <li><a href="c" class="quickbtn3">배달사전안내</a></li>
            <li><a href="d" class="quickbtn4">배송조회</a></li>
          </ul>
        </article>
      </div>
    </section>

    <section class="main_cont2">
      <div class="main_cont2_wrap">
        <article class="complain_wrap">
          <h3 class="blind">민원신청</h3>
          <ul class="tabs">
            <li class="compliment tab-link current" data-tab="tab-1">칭찬하기</li>
            <li class="complaint tab-link" data-tab="tab-2">불만신고</li>
          </ul>

          <div id="tab-1" class="tab-content current">
            <img src="images/compliment.png" alt="good">
            <p>
              칭찬을 해주시면<br>저희는 더욱 힘이나요!
            </p>
            <span><a href="/postal/notice_board/complain.php">칭찬 글쓰러 가기</a></span>
          </div>
          <div id="tab-2" class="tab-content">
            <img src="images/complaint.png" alt="bad">
            <p>
              불만족한 경험이<br>있으셨으면<br>신고해주세요!
            </p>
            <span><a href="/postal/notice_board/complain.php">불만 신고하러 가기</a></span>
          </div>
        </article>

        <article class="contact_wrap">
          <h3 class="contact">우편고객센터</h3>
          <a href="#" class="post-talk"><img src="images/post_talk.png" alt="우편톡"></a>
          <p class="contact__number">1588 - 1300</p>
          <p class="contact__work">
            <span>평 일</span>
            09:00~18:00
            <br>
            <span>토요일</span>
            09:00~13:00
          </p>
        </article>

        <article class="findpost_wrap">
          <h3 class="findpost">우체국 찾기</h3>
          <div id="map"></div>
          <button type="button" class="findpost_btn" onclick="window.open('https:/\/map.kakao.com/?itemId=19488833')">지도에서 보기</button>
        </article>
      </div>
    </section>
  </main>

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
        <li><a href="javascript:;"><img src="images/mark_wa.png" alt="웹 접근성 품질인증 마크"></a></li>
        <li><img src="images/mark_ncsi.png" alt="국가고객만족도 수상마크"></li>
      </ul>
    </div>
  </footer>

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