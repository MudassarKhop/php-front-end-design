<?php
error_reporting(0);

$arr_role = ['npo', 'ecom', 'smme', 'maint'];
//Institution Form Functionality
if (isset($_POST['submit_1'])) {
  $op_role = $_POST['institution'];


  foreach ($arr_role as $role) {
    if ($op_role === $role) {
      if ($role === 'npo') {

        require('npo_form.php');
      } else if ($role === 'ecom') {

        require('ecom_form.php');
      } else if ($role === 'smme') {

        require('smme_form.php');
      } else if ($role === 'maint') {

        require('maintenance_form.php');
      }
    }
  }
}

//NPO Form Functionality
if (isset($_POST['submit_npo'])) {
  $npoq_1 = $_POST["npo_1"];
  $npoq_2 = $_POST["npo_2"];
  $npoq_3 = $_POST["npo_3"];
  $npoq_4 = $_POST["npo_4"];
  $npoq_5 = $_POST["npo_5"];


  require 'npo.php';
}




if (isset($_POST['submit_ecom'])) {
  $ecomq_1 = $_POST["ecom_1"];
  $ecomq_2 = $_POST["ecom_2"];
  $ecomq_3 = $_POST["ecom_3"];
  $ecomq_4 = $_POST["ecom_4"];
  $ecomq_5 = $_POST["ecom_5"];


  require 'ecom.php';
}

if (isset($_POST['submit_smme'])) {
  $smmeq_1 = $_POST["smme_1"];
  $smmeq_2 = $_POST["smme_2"];
  $smmeq_3 = $_POST["smme_3"];
  $smmeq_4 = $_POST["smme_4"];
  $smmeq_5 = $_POST["smme_5"];

  $smmea =  $smmeq_1 + $smmeq_2 + $smmeq_3 + $smmeq_4 + $smmeq_5;

  require 'smme.php';
}


if (isset($_POST['submit_main'])) {

  $mainq_1 = $_POST["main_1"];
  $mainq_2 = $_POST["main_2"];
  $mainq_3 = $_POST["main_3"];
  $mainq_4 = $_POST["main_4"];

  $maina = $mainq_1 + $mainq_2 + $mainq_3 + $mainq_4;

  require 'maintenance.php';
}






?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.cdnfonts.com/css/freshwost" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/instagram-sans-2" rel="stylesheet">
  <title>Document</title>
</head>
<style>
  *{
    padding:0;
    margin:0;
  }
  @import url('https://fonts.cdnfonts.com/css/instagram-sans-2');
  @import url('https://fonts.cdnfonts.com/css/freshwost');
  @font-face {
  font-family: "font-1";
  src: url("assets/sovana-regular.ttf")
}
.form1{
  height:100vh;
  background-color:#8181e0;
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
}
#institution{
  padding:20px;
  border-radius:12px;
  background-color:#e7e8f9;
  height:50%;
  width:65%;
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
h1{
  font-family: 'freshwost', sans-serif;
  font-size:55px;
  letter-spacing:2px;
  text-shadow: 2px 4px 3px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);
}
label{
  font-family: 'Instagram Sans', sans-serif;
  padding:10px;
  font-size:23px;
  color:#cbccf5;
  display:flex;
  flex-direction:column;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
  height:80px;
  width:300px;
  background-color:#8181e0;
  border-radius:12px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
label:hover{
  /* border:2px solid red; */
}
form div{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:start;
  align-items:center;
  gap:20px;
}
.content{
  display:flex;
  flex-direction:column;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
  height:80%;
  width:20%;
}
.content-2{
  display:flex;
  flex-direction:column;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
  width:40%;
  height:80%
}
div > input{ /* HIDE RADIO */
    visibility: hidden; /* Makes input not-clickable */
    position: absolute; /* Remove input from document flow */
}
 form > input + div{ /* DIV STYLES */
    cursor:pointer;
    border:2px solid transparent;
}
.submit-btn{
  border:none;
  background-color:#8181e0;
  border-radius:12px;
  height:60px;
  width:150px;
  position:absolute;
  margin-top:400px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

    /* margin-top:500px; */
}
</style>
<body>
  <section class="form1">
    <form action="<?php $_SERVER["PHP_SELF"] ?>" id="institution" method="POST">
      <h1>What Type Of Institution Are You? </h1>
      <div class="content">
        <div>
          <input type="radio" name="institution" value="npo"/>
          <label for="npo">NPO</label>
        </div>
        <div>
          <input type="radio" name="institution" value="ecom" />
          <label for="ecom">ECOM</label>
        </div>
</div>
<div class="content-2">
        <div>
          <input type="radio" name="institution" value="smme" />
          <label for="smme">SMME</label>
        </div>
        <div>
          <input type="radio" name="institution" value="maint" />
          <label for="maint">MAINTENANCE</label>
        </div>
        <button type="submit" value="submit" name="submit_1" class="submit-btn">submit</button>
      </div>
    </form>
  </section>
</body>

</html>