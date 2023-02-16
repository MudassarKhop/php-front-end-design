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
<style scoped>
  .instituition{
    display:none;
  }
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
  min-height:100vh !important;
  background: rgb(45,56,86);
background: linear-gradient(355deg, rgba(45,56,86,1) 68%, rgba(140,126,138,1) 100%);
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
}
#institution{
  padding:20px;
  border-radius:12px;
  background-color:#7463fd;
  height:50%;
  width:65%;
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
  align-items:center;
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
}
#passage{
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  width:50%;
  height:100%;
  padding-left:25px;
}
#passage p{
  color:#cbccf5;
  font-size:25px;
  letter-spacing:2px;
  font-family: 'freshwost', sans-serif;
  text-shadow: 1px 2px 3px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);
}
h1{
  font-family: 'freshwost', sans-serif;
  font-size:55px;
  color:white;
  letter-spacing:2px;
  text-shadow: 2px 4px 3px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);
}
label{
  font-family: 'freshwost', sans-serif;
  letter-spacing:2px;
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
  background-color:#242b50;
  border-radius:12px;
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  transition:0.2s ease-out;
  transition: background-color 0.5s ease;
  
}
#labelsel:hover{
background-color:#323858ba;
}
#labelsel.selected{
  box-shadow:none;
  transition: box-shadow 0.5s ease
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
  flex-direction:row;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  height:50%;
  width:60%;
}
  div > input{ /* HIDE RADIO */
    visibility: hidden; /* Makes input not-clickable */
    position: absolute; /* Remove input from document flow */
}
  .radio-1 > input + div{ /* DIV STYLES */
    cursor:pointer;
    border:2px solid transparent;
}

.submit-btn{
  font-family: 'freshwost', sans-serif;
  letter-spacing:3px;
  border:none;
  background-color:#7a7add;
  border-radius:12px;
  height:60px;
  width:150px;
  position:absolute;
  margin-top:380px;
  margin-left:500px;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
font-size:24px;
color:#cbccf5;
transition:0.3s ease-in;
}
.submit-btn2{
  font-family: 'freshwost', sans-serif;
  letter-spacing:3px;
  border:none;
  background-color:#d26c3f;
  border-radius:12px;
  height:60px;
  width:140px;
  text-decoration:none;
  display:flex;
  flex-direction:row;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  position:absolute;
  margin-top:380px;
  margin-left:170px;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 1),rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
font-size:24px;
color:#cbccf5;
transition:0.3s ease-in;


    /* margin-top:500px; */
}
.submit-btn:hover{
background-color:#8181e0bd;
transition:0.3s ease-in;
}

label:active{
  background-color:white;
}
</style>
<body>
  <section class="form1">
    <form action="<?php $_SERVER["PHP_SELF"] ?>" id="institution" method="POST">
    <div id="passage">
    <h1>What Type Of Institution Are You? </h1>
    <p><b>Help us understand your company better, so we can find the perfect package suitable for all your needs.</b></p>
    </div>
      <div class="content" >
        <div class="radio-1" id="selection" >
          <input type="radio" name="institution" value="npo"/>
          <label id="labelsel" for="npo">NPO</label>
        </div>
        <div class="radio-1" id="selection">
          <input type="radio" name="institution" value="ecom" />
          <label id="labelsel" for="ecom">ECOM</label>
        </div>
        <div class="radio-1" id="selection">
          <input type="radio" name="institution" value="smme" />
          <label id="labelsel" for="smme">SMME</label>
        </div>
        <div class="radio-1" id="selection">
          <input type="radio" name="institution" value="maint" />
          <label id="labelsel" for="maint">MAINTENANCE</label>
        </div>
        <button type="submit" value="submit" name="submit_1" class="submit-btn">SUBMIT</button>
        <a href="https://dev-milliseconds.pantheonsite.io" class="submit-btn2">HOME</a>

      </div>
    </form>
  </section>
</body>
</html>
<script>
  const parent = document.querySelector(".content");
  parent.addEventListener("click", function(event) {
    const target = event.target;

    if (target.tagName === "LABEL") {
      const radio = target.previousElementSibling;
      radio.checked = true;
      if(target.textContent === "NPO") {
        console.log('npo selected')
      }
      else if(target.textContent === "ECOM") {
        console.log('something else')
      }
    }
  }); 
const divs = document.querySelectorAll('#labelsel');
let selectedDiv = null;

divs.forEach((div) => {
  div.addEventListener('click', () => {
    if (selectedDiv) {
      selectedDiv.classList.remove('selected');
      selectedDiv.style.backgroundColor = '#323858';
    }
    if (div !== selectedDiv) {
      selectedDiv = div;
      div.classList.add('selected');
      div.style.backgroundColor = '#3b436ecf';
    } else {
      selectedDiv = null;
    }
  });
});
</script>