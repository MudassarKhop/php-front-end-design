<style>
#npo{
  display:none;
}
#institution{
  display:none;
}
</style>
<form action="<?php $_SERVER["PHP_SELF"] ?>" style=""  method="POST"> 
  <h1>Maintenance</h1>
  <div>
  <input type="radio" name="main_1" value="5"/>
  <label for="npo">NPO</label>
  </div>
  <div>
  <input type="radio" name="main_2" value="6"/>
  <label for="ecom">ECOM</label>
  </div>
  <div>
  <input type="radio" name="main_3" value="5"/>
  <label for="smme">SMME</label>
  </div>
  <input type="submit" value="submit" name="submit_main">
  </form> 
