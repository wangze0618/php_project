<?php
//开启session
session_start();

//清除session
session_destroy();


//跳转至登录页面

header('location:login.html');