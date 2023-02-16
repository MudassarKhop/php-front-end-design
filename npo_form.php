<style>
    #institution {
        display: none ;
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
  height:100vh;
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
  flex-direction:column;
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
  flex-direction:column;
  flex-wrap:nowrap;
  justify-content:start;
  align-items:center;
  gap:20px;
}
.content{
  display:flex;
  flex-direction:column;
  flex-wrap:wrap;
  justify-content:center;
  align-items:center;
  min-height:50% !important;
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

label:active{
  background-color:white;
}
</style>
 <form class="form1" action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="npo" method="POST">
        <h1>NPO Questions</h1>
        <div class="content">
        <h2>1. What is the scale of your business?</h2>
        <div>
            <input type="radio" name="npo_1" value="2" />
            <label for="npo">Up and coming</label>
        </div>
        <div>
            <input type="radio" name="npo_1" value="3" />
            <label for="npo">We want to elevate to the next level</label>
        </div>
        <div>
            <input type="radio" name="npo_1" value="3" />
            <label for="npo">We want the cherry on the top</label>
        </div>
        <br>
        <h2>2. Do you deal with donations?</h2>
        <div>
            <input type="radio" name="npo_2" value="2" />
            <label for="npo">Yes we do</label>
        </div>
        <div>
            <input type="radio" name="npo_2" value="1" />
            <label for="npo">We handle it ourselves</label>
        </div>
        <div>
            <input type="radio" name="npo_2" value="3" />
            <label for="npo">We want a handler</label>
        </div>
        <br>
        <h2>3. Want to be able to make changes to your site?</h2>
        <div>
            <input type="radio" name="npo_3" value="1" />
            <label for="npo">Teach me the basics</label>
        </div>
        <div>
            <input type="radio" name="npo_3" value="2" />
            <label for="npo">Show me it's features</label>
        </div>
        <div>
            <input type="radio" name="npo_3" value="3" />
            <label for="npo">Make me a pro</label>
        </div>
        <br>
        <h2>4. Want to have all the customization?</h2>
        <div>
            <input type="radio" name="npo_4" value="1" />
            <label for="npo">Something basic</label>
        </div>
        <div>
            <input type="radio" name="npo_4" value="2" />
            <label for="npo">Add some more flare</label>
        </div>
        <div>
            <input type="radio" name="npo_4" value="3" />
            <label for="npo">All the bells and whistles</label>
        </div>
        <br>
        <h2>5. Is content the name of the game, need extra room?</h2>
        <div>
            <input type="radio" name="npo_5" value="1" />
            <label for="npo">Short and sweet</label>
        </div>
        <div>
            <input type="radio" name="npo_5" value="2" />
            <label for="npo">Story time</label>
        </div>
        <div>
            <input type="radio" name="npo_5" value="3" />
            <label for="npo">It's a Novel</label>
        </div>
        <input type="submit" value="submit" name="submit_npo">
</div>
    </form>
