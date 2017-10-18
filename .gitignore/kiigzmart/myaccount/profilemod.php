<?php
/* Displays user information and some useful messages */
session_start();


?>
<!DOCTYPE html>
<html >
<head>
<title>profile</title>
  <?php include 'css/profmod.html'; ?>
 
</head>
<body>

<p>change and update account</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'send')">send cash </button>
  <button class="tablinks" onclick="openCity(event, 'withdraw')">withdraw cash</button>
  <button class="tablinks" onclick="openCity(event, 'deposit')">deposit cash</button>
  <button class="tablinks" onclick="openCity(event, 'edit')">update profile</button>
  <button class="tablinks" onclick="openCity(event, 'balance')">my balance</button>
</div>

<div id="send" class="tabcontent">
  <h3>send</h3>
  <p>send money</p>
   <div class="form">
 <div id="sendmoney">   
          <h1>send money</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Enter the amount to send<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name="amount"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Phone Number<span class="req">*</span>
            </label>
            <input type="Phone" required autocomplete="off" name="phone"/>
          </div>
           <button class="button" name="send" />send</button>
          
          </form>
</div>

<div id="withdraw" class="tabcontent">
  <h3>withdraw</h3>
  <p>withdraw cash<</p>
  
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Enter the amount to withdraw<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name="amount"/>
          </div>
           <button class="button" name="withdraw" />withdraw</button>

            </form>

</div>

<div id="deposit" class="tabcontent">
  <h3>deposit</h3>
  <p>deposit cash</p>
  <p>3.deposit cash</p>
</div> 

<div id="edit" class="tabcontent">
  <h3>change</h3>
  <p>change</p>
<p>4.chamge ..number ..chage name ..change email ..change` password = reset password</p>
</div> 


<div id="balance" class="tabcontent">
  <h3>show balance</h3>
  <p>show balance</p>
<p>5.view account balance</p>>
</div> 


   
     




</body>
</html>
