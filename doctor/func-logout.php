<?php
session_start();
include('include/config.php');
$_SESSION['dlogin'] == "";
date_default_timezone_set('Asia/Kolkata');
$ldate = date('d-m-Y h:i:s A', time());
$did = $_SESSION['id'];
session_unset();
$_SESSION['errmsg'] = "You Have Successfully Logout";
?>
<script language="javascript">
    document.location = "../doctor/index.php";
</script>