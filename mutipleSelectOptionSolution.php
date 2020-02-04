

<?php

echo '<form method = "post"> <h4>SELECT PAYMENTS</h4>';



echo '<select name = "payment[]" multiple size = 6>   
                <option value = "pm">PERFECT MONEY</option> 
                <option value = "payeer">PAYEER</option> 
                <option value = "payza">PAYZA</option> 
                <option value = "paypal">PAYPAL</option> 
                <option value = "skrill">SKRILL</option> 
                <option value = "neteller">NETELLER</option> 
            </select> ' ;

echo '<br><br><br> <input type = "submit" name = "submit" value ="Submit"> 
        </form> ';


// Check if form is submitted successfully 
    if(isset($_POST["submit"]))  
    { 
       
        foreach($_POST['payment'] as $value)
        {
          $values[] = $value;
        }
        
        $selectedPayment = implode(',',$values);
        
        echo $selectedPayment;
        
    } 

?>
