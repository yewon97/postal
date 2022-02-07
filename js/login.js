function login_check() {
  let u_id = document.getElementById('u_id');
  let pwd = document.getElementById('pwd');

  if (u_id.value == '') {
    var err_txt = document.querySelector('.err_id');
    err_txt.textContent = '아이디를 입력하세요.';
    u_id.focus();
    return false;
  }

  if (pwd.value == '') {
    var err_txt = document.querySelector('.err_pwd');
    err_txt.textContent = '비밀번호를 입력하세요.';
    pwd.focus();
    return false;
  }
}


function copyClipBoard() {
  if (window.clipboardData.setData("text", URL))
    alert("URL is copied in your clipboard");
  else
    alert("Coping URL is failed");
}