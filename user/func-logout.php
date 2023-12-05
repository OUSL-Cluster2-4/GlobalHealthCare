<?php
session_start();
include('include/config.php');
$_SESSION['login'] == "";
date_default_timezone_set('Asia/Kolkata');
session_unset();
$_SESSION['errmsg'] = "You have Successfully Logout";
?>
<script language="javascript">
    document.location = "../user/index.php";
</script>
