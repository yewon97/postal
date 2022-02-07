<?
	$idx = $_GET['idx'];
	$no = $_GET['no'];
  include "../inc/dbcon.php";

  $sql = "SELECT * FROM boards WHERE idx = $idx;";
  $count_sql = "SELECT count(*) from boards";
  $p_sql = "SELECT * FROM boards WHERE idx < $idx ORDER BY idx DESC LIMIT 1;";
  $n_sql = "SELECT * FROM boards WHERE idx > $idx ORDER BY idx ASC LIMIT 1;";

  $result = mysqli_query($dbcon, $sql);
  $count_result = mysqli_query($dbcon, $count_sql);
  $p_result = mysqli_query($dbcon, $p_sql);
  $n_result = mysqli_query($dbcon, $n_sql);

	$array = mysqli_fetch_array($result);
  $row = mysqli_fetch_row($count_result);
  $total_count = $row[0];
	$p_array = mysqli_fetch_array($p_result);
	$n_array = mysqli_fetch_array($n_result);
	$subject = $array['subject'];
	$content = $array['content'];
	$office = $array['office'];
	$regDate = $array['regDate'];
	$hit = $array['hit'];
	$hit = $hit + 1;
	$up_filename = $array['up_filename'];

  $back_page = ($total_count - $no)/10;
  // echo is_int($back_page); exit;
  // echo $back_page; exit;
  // echo $array[2]; 
/*   print_r($array);
  exit; */
/*   while ($row = mysqli_fetch_array($result)){
    print_r($row);
    echo '<br>';
 } */
//  exit;

	// DB 조회수 1 증가 쿼리
	$sql = "update boards set hit=$hit where idx=$idx";
  $result = mysqli_query($dbcon, $sql);
	mysqli_close($dbcon);
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
  <link rel="stylesheet" href="../css/notice_cont.css" type="text/css">
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
    <h2 class="cont_title">공지사항</h2>
  </div>

  <!-- main starts -->
  <main id="main" class="main">
    <!-- aside starts -->
    <aside id="aside" class="lnb_aside">
      <div class="lnb_aside_wrap">
        <p class="aside_top_img"></p>
        <ul class="lnb_aside_list">
          <li>
            <h2>기관소개</h2>
          </li>
          <li><a href="#tab1">공지사항</a></li>
          <li><a href="#tab2">민원신청</a></li>
          <li><a href="#tab3">자주하는 질문 (FAQ)</a></li>
        </ul>
      </div>
    </aside>
    <!-- aside end -->

    <!-- 공지사항 테이블 부분 -->
    <section id="tab1" class="cont_container">
      <div class="list_number"><span>No.</span> <?= $no ?></div>
      <div class="cont_info">
        <ul>
          <li>
            <h4>제목</h4>
            <span class="cont_info-title"><?= $content ?></span>
          </li>
          <li>
            <h4>등록일</h4>
            <span class="cont_info-regdate"><?= $regDate ?></span>
          </li>
          <li>
            <h4>담당지역</h4>
            <span class="cont_info-region"><?= $office ?></span>
          </li>
          <li>
            <h4>조회수</h4>
            <span class="cont_info-view"><?= $hit ?></span>
          </li>
        </ul>
      </div>

      <div class="cont_text">
      <?php if ($up_filename !== null) { ?>
        <img src="../images/certifi_wa.gif" alt="" style="width: 60%;">
      <?php } ?>
        <p>
        <?= $content ?>
        </p>
      </div>
      
      <div class="cont_move">
        <ul>
          <li>
            <h4>이전글</h4>
            <h5 class="cont_move-ptitle">
            <?php if (empty($p_array['idx'])) { ?>
              이전 글이 없습니다.
            <?php } else { ?>
              <a href="notice_cont.php?idx=<?= $p_array['idx'] ?>&no=<?= $no - 1 ?>"><?= $p_array['subject'] ?></a>
            <?php } ?>
            </h5>
            <span class="cont_move-pregdate">
              <?php echo empty($p_array['idx']) ? '.' : $p_array['regDate']; ?>
            </span>
          </li>
          <li>
            <h4>다음글</h4>
            <h5 class="cont_move-ntitle">
            <?php if (empty($n_array['idx'])) { ?>
              다음 글이 없습니다.
            <?php } else { ?>
              <a href="notice_cont.php?idx=<?= $n_array['idx'] ?>&no=<?= $no + 1 ?>"><?= $n_array['subject'] ?></a>
            <?php } ?>
            </h5>
            <span class="cont_move-nregdate">
              <?php echo empty($n_array['idx']) ? '.' : $n_array['regDate']; ?>
            </span>
          </li>
        </ul>
      </div>
      
      <div class="cont_return">
        <p><a href="notice.php?page=<?php echo is_int($back_page) ? $back_page+1 : ceil($back_page); ?>">목록 보기</a></p>
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
  
</body>

</html>