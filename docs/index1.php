<?php

	if(isset($_POST['submit ']))
	{
		$name=$_POST['name'];
        $name=$_POST['name1'];
		$addressline1=$_POST['address-line1'];
        $city=$_POST['city'];
        $state=$_POST['state'];  
       	$order=$_POST['order'];  

        $to='asifsheikhsheikh786@hmail.com';
        $subject='New_Order';
        $message="Name: ".$name."\n"."address-line1: ".$addressline1."\n"."order: "."\n\n".$order;

        if(mail($to, $subject, $message)){
        	echo "<h3>Thank for your order"." ".$name.",we will complete your order as soon as possible</h3>";
        }
        else{
        	echo "Something went wrong";
        }

	}
?>