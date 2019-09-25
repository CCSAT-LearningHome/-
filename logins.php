<?php
  session_start();
  header("Content-type:text/html;charset=utf-8");
  $link = mysqli_connect('localhost','root','root','test');
  if (!$link) {
    die("连接失败:".mysqli_connect_error());
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm = 1;
  $email = 1;
  $code = $_POST['code'];
  if($username == "" || $password == "" || $confirm == "" || $code == "")
  {
    echo "<script>alert('信息不能为空！重新填写');window.location.href='zhuce.html'</script>";
  } elseif ((strlen($username) < 3)||(!preg_match('/^\w+$/i', $username))) {
    echo "<script>alert('用户名至少3位且不含非法字符！重新填写');window.location.href='zhuce'</script>";
    //判断用户名长度
  }elseif(strlen($password) < 5){
      echo "<script>alert('密码至少5位！重新填写');window.location.href='zhuce.html'</script>";
      //判断密码长度
  } elseif($code != $_SESSION['authcode']) {
    echo "<script>alert('验证码错误！重新填写');window.location.href='zhuce.html'</script>";
    //判断验证码是否填写正确
  } else{
      echo "<script>alert('注册成功！去登陆');window.location.href='login.html'</script>";
    }
?>