<?php
$title = 'Homepage';
$metaD = 'Welcome!';

include ("common/header.php");
?>

<a href="/WBS/consumer/login.php">
<div class="split left">
  <div class="centered">
    <img src="common/styling/img/user_login.png" alt="Consumer">
    <h2>Consumer Login</h2>
    <p>Consumers click here to login.</p>
  </div>
</div>
</a>

<?php 
$today = date("d");
if($today > '15'){ 
  echo"<a href='/WBS/lib/modal.html'><button id='pay_button'>Offer Page</button></a>";
}
?>

<a href="/WBS/admin/login.php">
<div class="split right">
  <div class="centered">
    <img src="common/styling/img/admin_login.png" alt="Admin">
    <h2>Admin Login</h2>
    <p>Administrators can login from here.</p>
  </div>
</div>
</a>

<?php include("common/footer.php"); ?>
