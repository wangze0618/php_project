<?php
session_start();
if (session_destroy()) {
    echo "<script>alert('ιεΊζε');
    location.href='../../index.php'</script>";
}