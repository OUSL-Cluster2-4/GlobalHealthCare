<?php
session_start();
include('include/config.php');
$_SESSION['dlogin'] == "";
date_default_timezone_set('Asia/Kolkata');
session_unset();
$_SESSION['errmsg'] = "You Have Successfully Logout";
?>
<script language="javascript">
    document.location = "../doctor/index.php";
</script>
