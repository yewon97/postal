<meta charset="utf-8">
<?php
header ("content-type:text/html; charset=utf-8");

$inputkeyword = $_GET["inputkeyword"];
// echo $inputkeyword; exit;

?>

<?php
echo "
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script type=\"text/javascript\">
const URL =
  'https://api.odcloud.kr/api/15070368/v1/uddi:cea8854d-35c4-4a7f-a100-f241ea289d76?page=1&perPage=3396&serviceKey=2MlX7gbD3hRfwbKnnAd8WXgMGGFflDzdbYF%2BpFZbV0ys%2F3aq%2FoEWmEcb5ZE4Xqz6fOYAh7F1tqO0Z%2FO9KQ%2FmGA%3D%3D';

$.get(URL)
  .done(function (data) {
    for(let i = 0; i < 3396; i++) {
      if(data.data[i].우체국명.includes('$inputkeyword')){
        const hTbody = document.getElementById('htmlTbody');
        const newRow0 = hTbody.insertRow(); 
        const newCell0 = newRow0.insertCell();
        const newCell1 = newRow0.insertCell();
        const newCell2 = newRow0.insertCell();
        const newCell3 = newRow0.insertCell();
        const newCell4 = newRow0.insertCell();
        const newText1 = document.createTextNode(data.data[i].총괄국명);
        newCell1.appendChild(newText1);
        const newText2 = document.createTextNode(data.data[i].우체국명);
        newCell2.appendChild(newText2);
        const newText3 = document.createTextNode(data.data[i]['주소(도로명)']);
        newCell3.appendChild(newText3);
        const newText4 = document.createTextNode(data.data[i].전화번호);
        newCell4.appendChild(newText4);
        console.log(data.data[i]);
        
        const table = document.getElementById('Table');
        console.log(table.rows.length-1);
        let r = table.rows.length-1;
        const newText0 = document.createTextNode(r);
        newCell0.appendChild(newText0);
      }
    }
  })
  .fail(function (data) {
    
  });
</script>
";
?>
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
  <link rel="stylesheet" href="../css/sub_01.css" type="text/css">
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
      <h3>소속 기관 소개</h3>

      <!-- <div class="postal_search_wrap">
        <div class="introduce">찾으시는 지역을 선택하시면 해당 지역의 우체국 리스트가 보여집니다.</div>
        <h4 class="blind">지역별 우체국 안내</h4>
        <ul>
          <li><a href="">서울</a></li>
          <li><a href="">경인</a></li>
          <li><a href="">부산</a></li>
          <li><a href="">충청</a></li>
          <li><a href="">전남</a></li>
          <li><a href="">경북</a></li>
          <li><a href="">전북</a></li>
          <li><a href="">강원</a></li>
          <li><a href="">제주</a></li>
        </ul>
      </div> -->

      <div class="search_wrap">
        <form action="search_postal.php" name="search_postal" method="get" onsubmit="return searchkeyword()">
          <fieldset>
            <legend class="blind">우체국 검색</legend>
            <div class="search_input_wrap">
              <label for="inputKeyword">우체국명</label>
              <input type="text" placeholder="검색어 입력" id="inputkeyword" name="inputkeyword">
              <button type="submit" class="notice_search_icon">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </fieldset>
        </form>
      </div>

      <table summary="등록된 공지사항" class="table" id="Table">
        <caption class="blind">우체국 리스트</caption>
        <thead>
          <tr>
            <th class="list_number">번호</th>
            <th class="list_region">총괄국명</th>
            <th class="list_title">우체국명</th>
            <th class="list_address">주소</th>
            <th class="list_phone">전화번호</th>
          </tr>
        </thead>
        <tbody id="htmlTbody">
        </tbody>
      </table>

      <!-- <div class="page_list">
        <p class="page_prev">
        <?php if ($page <= 1) { ?>
          <a href="sub_01.php?page=1" title="이전 페이지"><i class="fas fa-angle-left"></i></a>
        <?php } else { ?>
          <a href="sub_01.php?page=<?php echo $now_block == 1 ? '1' : ($now_block - 1) * 5; ?>" title="이전 목록" title="이전 목록"><i class="fas fa-angle-double-left"></i></a>

          <a href="sub_01.php?page=<?php echo $page - 1; ?>" title="이전 페이지"><i class="fas fa-angle-left"></i></a>
        <?php } ?>
        </p>

        <div class="page_num">
          <ul>
            <?php for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) { ?>
              <li>
                <a id="page<?php echo $print_page; ?>" href="sub_01.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?>
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>

        <p class="page_next">
        <?php if ($page >= $total_page) { ?>
            <a href="sub_01.php?page=<?php echo $total_page; ?>">
            <i class="fas fa-angle-right"></i>
            </a>
        <?php } else { ?>
          <a href="sub_01.php?page=<?php echo $page + 1; ?>">
          <i class="fas fa-angle-right"></i>
          </a>
          <a href="sub_01.php?page=<?php echo $now_block != 1 ? ($now_block == $total_block ? $total_page : $now_block * 5 + 1) : $e_pageNum + 1; ?>" title="다음 목록">
          <i class="fas fa-angle-double-right"></i>
        </a>
        <?php } ?>
        </p>
      </div> -->
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

  <!-- <?php echo '<script>
  let page_num = document.getElementById("page' .$page .'");
  page_num.style.color = "#D45246";
  page_num.style.fontWeight = "bold";
  page_num.style.borderBottom = "1px solid #454851";
  </script>'; ?> -->
</body>

</html>