<?php
include '../inc/dbcon.php';

$t_sql = 'select count(*) from boards';
$t_result = mysqli_query($dbcon, $t_sql);
$row = mysqli_fetch_row($t_result);
$total_count = $row[0];

$list_num = 10;
$page_num = 5;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$total_page = ceil($total_count / $list_num);
$total_block = ceil($total_page / $page_num);

$now_block = ceil($page / $page_num);
// echo $page." ".$total_page." ".$total_block ." ".$now_block;

$s_pageNum = ($now_block - 1) * $page_num + 1;
if ($s_pageNum <= 0) {
  $s_pageNum = 1;
}

$e_pageNum = $now_block * $page_num;
if ($e_pageNum > $total_page) {
  $e_pageNum = $total_page;
}

// echo $e_pageNum;
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
  <title>공지사항</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- 외부 css -->
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/sub_common.css" type="text/css">
  <link rel="stylesheet" href="../css/notice.css" type="text/css">
  <!-- common js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- common js -->
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
          <li><a href="#">공지사항</a></li>
          <li><a href="complain.php">민원신청</a></li>
          <li><a href="#tab3">자주하는 질문 (FAQ)</a></li>
        </ul>
        <?php if($s_id == "admin"){ ?>
        <div class="writing"><a href="#">게시글 작성</a></div>
        <?php } ?>
      </div>
    </aside>
    <!-- aside end -->

    <!-- 공지사항 테이블 부분 -->
    <section id="tab1" class="cont_container">
      <h3>공지사항</h3>
      <article class="top_util_section">
        <div class="total_page">
          total : <span class="total_page_num"><?php echo $total_count; ?></span>
        </div>
        <div class="search_wrap">
          <form action="search_keyword" name="search_notice" method="get" onsubmit="return searchkeyword()">
            <fieldset>
              <legend class="blind">공지사항 검색</legend>
              <select>
                <option selected value="1">제목</option>
                <option value="2">내용</option>
                <option value="3">제목+내용</option>
              </select>
              <div class="search_input_wrap">
                <label class="blind" for="inputkeyword">검색어 입력</label>
                <input type="text" placeholder="검색어 입력" id="inputkeyword" name="inputkeyword">
                <button type="submit" class="notice_search_icon">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </fieldset>
          </form>
        </div>
      </article>

      <table summary="등록된 공지사항" class="notice_table">
        <caption class="blind">공지사항 리스트</caption>
        <thead>
          <tr>
            <th class="list_number">번호</th>
            <th class="list_region">지역</th>
            <th class="list_title">제목</th>
            <th class="list_date">작성일</th>
            <th class="list_view">조회수</th>
          </tr>
        </thead>
        <tbody>
        <?
            $start = ($page-1) * $list_num;
            $sql = "select * from boards order by idx desc limit $start, $list_num";
            $result = mysqli_query($dbcon, $sql);

            // 글 번호
            $print_num = $total_count - $list_num*($page-1);

            while($array = mysqli_fetch_array($result)){
        ?>
          <tr>
            <td><?= $print_num ?></td>
            <td><?= $array['office'] ?></td>
            <td><a href="notice_cont.php?idx=<?= $array['idx'] ?>&no=<?= $print_num ?>"><?= $array['subject'] ?></a></td>
            <td><?= $array['regDate'] ?></td>
            <td><?= $array['hit'] ?></td>
          </tr>
          <?
            $print_num--;
            } // while 문 종료

            mysqli_close($dbcon);
          ?>
        </tbody>
      </table>

      <div class="page_list">
        <p class="page_prev">
        <?php if ($page <= 1) { ?>
          <a href="notice.php?page=1" title="이전 페이지"><i class="fas fa-angle-left"></i></a>
        <?php } else { ?>
          <a href="notice.php?page=<?php echo $now_block == 1 ? '1' : ($now_block - 1) * 5; ?>" title="이전 목록" title="이전 목록"><i class="fas fa-angle-double-left"></i></a>

          <a href="notice.php?page=<?php echo $page - 1; ?>" title="이전 페이지"><i class="fas fa-angle-left"></i></a>
        <?php } ?>
        </p>

        <div class="page_num">
          <ul>
            <?php for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) { ?>
              <li>
                <a id="page<?php echo $print_page; ?>" href="notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?>
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>

        <p class="page_next">
        <?php if ($page >= $total_page) { ?>
            <a href="notice.php?page=<?php echo $total_page; ?>">
            <i class="fas fa-angle-right"></i>
            </a>
        <?php } else { ?>
          <a href="notice.php?page=<?php echo $page + 1; ?>">
          <i class="fas fa-angle-right"></i>
          </a>
          <a href="notice.php?page=<?php echo $now_block != 1 ? ($now_block == $total_block ? $total_page : $now_block * 5 + 1) : $e_pageNum + 1; ?>" title="다음 목록">
          <i class="fas fa-angle-double-right"></i>
        </a>
        <?php } ?>
        </p>
      </div>
    </section>
    <!-- 공지사항 테이블 부분 끝 -->

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
  
  <?php echo '<script>
  let page_num = document.getElementById("page' .$page .'");
  page_num.style.color = "#D45246";
  page_num.style.fontWeight = "bold";
  page_num.style.borderBottom = "1px solid #454851";
    
      </script>'; ?>
</body>

</html>