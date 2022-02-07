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
  <title>회원가입(약관동의)</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- 외부 css -->
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/join_step02.css" type="text/css">
  <!-- 외부 js -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/common.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // 약관동의하기
      function checkAgree() {
        if (!$('#agreeCheck_required').prop('checked')) {
          alert('개인정보 수집 및 이용에 대한 안내에 동의해주세요.');
          return false;
        }
        if (!$('#agreeCheck_optional').prop('checked')) {
          $('#agreeCheck_optional').val('n');
        } else {
          $('#agreeCheck_optional').val('y');
        }
      }
      // 전체동의
      $('#all_agree').click(function () {
        console.log('hi');
        if ($('#all_agree').is(':checked')) $('.chk').prop('checked', true);
        else $('.chk').prop('checked', false);
      });

      $('.chk').click(function () {
        var total = $('.chk').length;
        var checked = $('.chk:checked').length;

        if (total != checked) $('#all_agree').prop('checked', false);
        else $('#all_agree').prop('checked', true);
      });
    });
  </script>
</head>

<body>
  <!-- header starts -->
  <? include $_SERVER["DOCUMENT_ROOT"]."/postal/inc/header.php" ?> 

  <!-- header end -->

  <!-- main starts -->
  <main id="main" class="main">
    <div class="cont_title_wrap">
      <h2 class="cont_title">회원가입</h2>
    </div>

    <section class="use_term">
      <form action="join.php" method="get" name="agreement_terms" onsubmit="return checkAgree()">
        <fieldset>
          <legend class="blind">버스타고 이용약관 안내</legend>

          <article class="agreement1">
            <h3>개인정보 수집 및 이용에 대한 안내 (필수)</h3>

            <div class="terms_cont">
              <span class="term_subtitle">제 1조 수집하는 개인정보 항목 및 수집 방법</span><br><br>
              회사는 다음의 개인정보 항목을 수집하고 있습니다.
              <ol class="circle_number">
                <li>홈페이지 회원 가입 및 관리<br>
                  필수항목 : 아이디, 비밀번호, 성명, 생년월일, 이메일, 휴대폰 번호, IP 주소</li>
                <li>인터넷 서비스 이용과정에서 아래의 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.<br>
                  IP 주소</li><br>
              </ol>
              회사는 다음과 같은 방법으로 개인정보를 수집하고 있습니다.<br>
              <ol class="circle_number">
                <li>이용자로부터의 제공</li>
                <li>이용자의 인터넷 이용 시 자동으로 생성되는 정보의 수집</li>
              </ol><br>
              회사는 다음과 같은 방법으로 개인정보를 수집하고 있습니다.<br>
              <ol class="circle_number">
                <li>이용자로부터의 제공</li>
                <li>본인인증 시스템으로부터의 제공 (생년월일, 이름, 중복가입 확인정보[DI])</li>
                <li>이용자의 인터넷 이용 시 자동으로 생성되는 정보의 수집</li>
              </ol><br>
              <span class="term_subtitle">제 2조 개인정보의 수집 및 이용 목적</span><br>
              회사는 다음과 같은 목적을 위하여 개인정보를 수집하며, 해당 목적 내에서만 수집한 개인정보를 이용하고 있습니다.<br>
              <ol class="circle_number">
                <li>회원관리<br>
                  회원제 서비스 이용 및 제한적 본인 확인제에 따른 본인확인, 개인식별, 불량회원의 부정 이용방지와 비인가 사용방지, 가입의사 확인, 분쟁 조정을 위한 기록보존, 불만처리 등
                  민원처리,
                  공지사항 등 최신정보 안내, 서비스 변경 처리에 대한 안내, 상담 결과 등 고객과의 커뮤니케이션 경로, 장기 미사용 고객 휴면계정 처리 등</li>
                <li>서비스 관리<br>
                  모니터링 시스템을 통한 서비스 품질 관리</li>
              </ol><br>
              <span class="term_subtitle">제 3조 개인정보의 보유 및 이용기간</span><br>

              고객의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br>
              <ol class="circle_number">
                <li>관련법령에 의한 정보보유 사유
                  <ol class="decimal_number">
                    <li>웹사이트 방문기록: 3개월 (통신비밀보호법)</li>
                    <li>회원 탈퇴시까지</li>
                  </ol>
                </li>
              </ol>
            </div>

            <p>원하지 않는 경우 개인정보 수집 및 이용에 동의하지 않을 수 있습니다.<br>이러한 경우 서비스 가입(회원가입)을 할 수 없음을 알려드립니다.</p>

            <div class="agree_wrap terms1">
              <input type="checkbox" id="agreeCheck_required" name="agreeCheck_required" class="chk">
              <label for="agreeCheck_required" class="agreeCheck">동의(필수)</label>
            </div>
          </article>

          <article class="agreement2">
            <h3>개인정보 수집 및 이용에 대한 안내 (선택)</h3>
            <div class="terms_cont">
              <span class="term_subtitle">제 1조 수집하는 개인정보 항목 및 수집 방법</span><br>
              <br>
              회사는 다음의 개인정보 항목을 수집하고 있습니다.<br>
              <ol class="circle_number">
                <li>홈페이지 회원 가입 및 관리<br>
                  선택항목 : 성별</li>
              </ol><br>
              <li>회사는 다음과 같은 방법으로 개인정보를 수집하고 있습니다.<br>
                <ol class="circle_number">
                  <li>이용자로부터의 제공</li>
                </ol>
                <br>
                <span class="term_subtitle">제 2조 개인정보의 수집 및 이용 목적</span><br>
                회사는 다음과 같은 목적을 위하여 개인정보를 수집하며, 해당 목적 내에서만 수집한 개인정보를 이용하고 있습니다.<br>
                <ol class="circle_number">
                  <li>마케팅 및 광고에의 활용<br>
                    새로운 서비스/신상품이나 이벤트 정보의 안내.<br>
                    개인 맞춤 서비스의 제공 및 부가서비스 제공을 위한 필요한 자료 제공</li>
                </ol>
                <br>
                <span class="term_subtitle">제 3조 개인정보의 보유 및 이용기간</span><br>
                고객의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br>
                <ol class="circle_number">
                  <li>관련법령에 의한 정보보유 사유
                    <ol class="decimal_number">
                      <li>웹사이트 방문기록: 3개월 (통신비밀보호법)</li>
                      <li>회원 탈퇴시까지</li>
                    </ol>
                  </li>
                </ol>
            </div>
            <p>원하지 않는 경우 개인정보 선택 수집항목에 동의하지 않을 수 있습니다.<br>동의 거부 시에도 회원가입은 가능하나 당사에서 진행하는 이벤트 서비스는 제공되지 않습니다.</p>

            <div class="agree_wrap terms2">
              <input type="checkbox" id="agreeCheck_optional" name="agreeCheck_optional" class="chk">
              <label for="agreeCheck_optional" class="agreeCheck">
                동의(선택)</label>
            </div>
            </div>
          </article>

          <div class="agree_check_container">
            <p>이용약관, 개인정보 수집 및 이용에 대한 안내(필수/선택)에 모두 동의합니다.</p>
            <div class="agree_wrap">
              <div>
                <input type="checkbox" id="all_agree" name="all_agree">
                <label for="all_agree" class="check_all">전체 동의</label>
              </div>
            </div>
          </div>

          <div class="btn_wrap">
            <button type="button" class="go_back_btn" onclick="history.back()">이전으로</button>
            <button type="submit" class="user_join_btn">다음</button>
          </div>
        </fieldset>
      </form>
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

</body>

</html>