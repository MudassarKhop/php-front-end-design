<style>
    #institution {
        display: none;
    }
</style>

<form action="<?php $_SERVER["PHP_SELF"] ?>" style="" id="ecom" method="POST">
    <h1>E-commerce Questions</h1>
    <h2>1. What is the scale of your store?</h2>
    <div>
        <input type="radio" name="ecom_1" value="1" />
        <label for="ecom">Up and coming</label>
    </div>
    <div>
        <input type="radio" name="ecom_1" value="3" />
        <label for="ecom">We want to add the cherry on top</label>
    </div>
    <div>
        <input type="radio" name="ecom_1" value="2" />
        <label for="ecom">We want to grow to the next level</label>
    </div>
    <br>
    <h2>2. Do you get an influx of products?</h2>
    <div>
        <input type="radio" name="ecom_2" value="1" />
        <label for="ecom">We keeping it nice</label>
    </div>
    <div>
        <input type="radio" name="ecom_2" value="3" />
        <label for="ecom">We set the trends</label>
    </div>
    <div>
        <input type="radio" name="ecom_2" value="2" />
        <label for="ecom">We looking to expand</label>
    </div>
    <br>
    <h2>3. Mutiple catalogs?</h2>
    <div>
        <input type="radio" name="ecom_3" value="1" />
        <label for="ecom">We have our flavour</label>
    </div>
    <div>
        <input type="radio" name="ecom_3" value="2" />
        <label for="ecom">We testing out new flavours</label>
    </div>
    <div>
        <input type="radio" name="ecom_3" value="3" />
        <label for="ecom">We want all the flavours</label>
    </div>
    <br>
    <h2>4. Want to have all the customization?</h2>
    <div>
        <input type="radio" name="ecom_4" value="1" />
        <label for="ecom">Something basic</label>
    </div>
    <div>
        <input type="radio" name="ecom_4" value="2" />
        <label for="ecom">Add some more flare</label>
    </div>
    <div>
        <input type="radio" name="ecom_4" value="3" />
        <label for="ecom">All the bells and whistles</label>
    </div>
    <br>
    <h2>5. Need a safety net?</h2>
    <div>
        <input type="radio" name="ecom_5" value="1" />
        <label for="ecom">We like living on the edge</label>
    </div>
    <div>
        <input type="radio" name="ecom_5" value="3" />
        <label for="ecom">Safety first</label>
    </div>
    <div>
        <input type="radio" name="ecom_5" value="2" />
        <label for="ecom">Full scale protection</label>
    </div>
    <input type="submit" value="submit" name="submit_ecom">
</form>