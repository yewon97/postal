<?php
session_start();

$s_id = isset($_SESSION['s_id']) ? $_SESSION['s_id'] : '';
$s_name = isset($_SESSION['s_name']) ? $_SESSION['s_name'] : '';
?>

<header id="header" class="header">
  <h1 class="logo"><a href="/postal/index.php">우정사업본부</a></h1>
  <nav class="gnb">
    <div class="gnb_wrap">
      <h2 class="blind">주요메뉴</h2>
      <ul>
        <li class="menu1"><a href="javascript:void(0);">기관소개</a>
          <ul class="lnb">
            <li><a href="/postal/sub_01/sub_01.php">소속 기관 소개</a></li>
            <li><a href="/postal/sub_01/sub_02.php">찾아오시는 길</a></li>
            <li><a href="/postal/sub_01/sub_03.php">이용시간</a></li>
          </ul>
        </li>
        <li class="menu2"><a href="javascript:void(0);">쇼핑하기</a>
          <ul class="lnb">
            <li><a href="">우표류</a></li>
            <li><a href="">엽서류</a></li>
            <li><a href="">축하카드류</a></li>
          </ul>
        </li>
        <li class="menu3"><a href="javascript:void(0);">우정소식</a>
          <ul class="lnb">
            <li><a href="/postal/notice_board/notice.php">공지사항</a></li>
            <li><a href="/postal/notice_board/complain.php">민원신청</a></li>
            <li><a href="/postal/notice_board/faq.php">자주하는 질문(FAQ)</a></li>
          </ul>
        </li>
        <li class="menu4"><a href="javascript:void(0);">방문접수</a>
          <ul class="lnb">
            <li><a href="">이용안내</a></li>
            <li><a href="">접수예약/조회</a></li>
            <li><a href="">반품예약/조회</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="topmenu">
    <div class="topmenu_wrap">
      <h2 class="blind">사용자메뉴</h2>
      <ul>
        <?php if (!$s_id) { ?>
          <!-- 로그인 전 -->
        <li><a class="login" href="/postal/login/login.php">로그인</a></li>
        <li><a class="joinup" href="/postal/members/join_step01.php">회원가입</a></li>
        <li><a class="mypage" href="#">My Page</a></li>
        <?php } else { ?>
          <!-- 로그인 후 -->
        <li class="user_name--li">"
          <?php echo $s_name; ?>"님
        </li>
        <li><a class="logout" href="/postal/login/logout.php">로그아웃</a></li>
        <?php if ($s_id == 'admin') { ?>
        <!-- 관리자 -->
        <li><a class="mypage" href="/postal/admin/members/list.php">My Page</a></li>
        <?php } else { ?>
        <li><a class="mypage" href="/postal/members/list.php">My Page</a></li>
        <?php } ?>
        <?php } ?>
        <li><a class="cart" href="#"><img src="/postal/images/cart.png" alt="장바구니"><span>0</span></a></li>
      </ul>
    </div>
  </div>
</header>