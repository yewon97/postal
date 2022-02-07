<?php
include '../inc/admin_session.php';

/* DB 연결 */
include '../../inc/dbcon.php';

/* 쿼리 작성 */
$sql = 'select * from member;';

/* 쿼리 전송 */
$result = mysqli_query($dbcon, $sql);

/* 결과 가져오기 */
/* paging : 전체 데이터 수 */
$num = mysqli_num_rows($result);
// echo $num;

/* paging : 한 페이지 당 데이터 개수 */
$list_num = 10;

/* paging : 한 블럭 당 페이지 수 */
$page_num = 5;

/* paging : 현재 페이지 */
$page = isset($_GET['page']) ? $_GET['page'] : 1;

/* paging : 전체 페이지 수 = 전체 데이터 / 페이지당 데이터 개수, ceil : 올림값, floor : 내림값, round : 반올림 */
$total_page = ceil($num / $list_num);
// echo "전체 페이지 수 : ".$total_page;

/* paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수 */
$total_block = ceil($total_page / $page_num);

/* paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수 */
$now_block = ceil($page / $page_num);

/* paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭번호 - 1) * 블럭당 페이지 수 + 1 */
$s_pageNum = ($now_block - 1) * $page_num + 1;
// 데이터가 0개인 경우
if ($s_pageNum <= 0) {
  $s_pageNum = 1;
}

/* paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수 */
$e_pageNum = $now_block * $page_num;
// 마지막 번호가 전체 페이지 수를 넘지 않도록
if ($e_pageNum > $total_page) {
  $e_pageNum = $total_page;
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="우정사업본부" />
    <meta property="og:url" content="http://yebang97.dothome.co.kr/postal/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="images/postal.png" />
    <meta property="og:description" content="우정사업본부" />
    <title>관리자(회원목록)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style type="text/css">
        body{font-size:16px; padding : 15px;}
        a{text-decoration:none;color:#0C6EFD}
        a:hover{color:rgb(255, 153, 0)}
        ul {list-style: none; padding: 0; overflow: hidden;}
        .menu_list li {float: left;}
        .menu_list li:after {content: '|'; margin: 0 10px; color:#212529;}
        table{width:100%;border-collapse:collapse;}
        table a{text-decoration:none;color:#000;border:1px solid #333;display:inline-block;padding:2px 3px;font-size:12px;border-radius:5px; box-sizing:border-box;}
        table a:hover{border:0 none;background: #0C6EFD;color:#fff; box-sizing:border-box;}
    </style>
    <script type="text/javascript">
        function del_check(idx){
            var i = confirm("정말 삭제하시겠습니까?\n삭제한 아이디는 복원하실 수 없습니다.");

            if(i == true){
                // alert("delete.php?u_idx="+idx);
                location.href = "delete.php?u_idx="+idx;
            };
        };
    </script>
</head>
<body>
    <h2>* 관리자 페이지 *</h2>
    <p>"<?php echo $s_name; ?>"님, 안녕하세요.</p>
    <ul class="menu_list">
        <li><a href="/postal/index.php" class="bar">홈으로</a></li>
        <li><a href="#" class="bar">회원 관리</a></li>
        <li><a href="#none" class="bar">게시판 관리</a></li>
        <li><a href="/postal/login/logout.php">로그아웃</a></li>
    </ul>
    <hr>
    <p>총 <?php echo $num; ?>명</p>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr class="title">
              <td>번호</td>
              <td>이름</td>
              <td>아이디</td>
              <td>생년월일</td>
              <!-- <td>양/음력</td> -->
              <td>주소</td>
              <td>이메일</td>
              <td>전화번호</td>
              <td>가입일</td>
              <td>수정</td>
              <td>삭제</td>
          </tr>
        </thead>
        <tbody>
        <?php
        $start = ($page - 1) * $list_num;
        $sql = "select * from member limit $start, $list_num;";
        $result = mysqli_query($dbcon, $sql);
        $cnt = $start + 1;
        while ($array = mysqli_fetch_array($result)) { ?>
        <tr class="brd">
            <!-- <td><?php echo $i; ?></td> -->
            <td><?php echo $cnt; ?></td>
            <td><?php echo $array['u_name']; ?></td>
            <td><?php echo $array['u_id']; ?></td>
            <td><?php echo $array['birth']; ?></td>
            <!-- <td><?php
            $birthCal = $array['birth_cal_type'] === '1' ? '양력' : '음력';
            echo $birthCal;
            ?></td> -->
            <td><?php echo $array['addr1'] . ' ' . $array['addr2']; ?></td>
            <td><?php echo $array['email']; ?></td>
            <td><?php echo $array['mobile']; ?></td>
            <td><?php echo $array['reg_date']; ?></td>
            <td><a href="edit.php?u_idx=<?php echo $array['idx']; ?>">수정</a></td>
            <td><a href="#" onclick='del_check(<?php echo $array['idx']; ?>)'>삭제</a></td>
        </tr>
        <?php $cnt++;}
        ?>
        </tbody>
    </table>
    <p class="pager">

    <?php

if ($page <= 1) { ?>
    <a href="list.php?page=1">이전</a>
    <?php } else { ?>
    <a href="list.php?page=<?php echo $page - 1; ?>">이전</a>
    <?php } ?>

    <?php

for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) { ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php } ?>

    <?php

if ($page >= $total_page) { ?>
    <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else { ?>
    <a href="list.php?page=<?php echo $page + 1; ?>">다음</a>
    <?php } ?>

    </p>
</body>
</html>