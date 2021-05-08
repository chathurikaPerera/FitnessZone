<?php
   require '../config.php';

   //define variables
   $first_name=$last_name=$nic=$age=$gender=$address=$weight=$height=$register_date='';
   $first_name_err=$last_name_err=$nic_err=$age_err=$gender_err=$address_err=$weight_err=$height_err=$register_date_err='';
   
   //process the date when submit
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
       //validate first name
      if(empty(trim($_POST["firstname"]))){
          $first_name_err= "Please enter first name";

      }
      else{
          $first_name=trim($_POST["firstname"]);
      }

      //validate last name
      if(empty(trim($_POST["lastname"]))){
        $last_name_err= "Please enter last name";

      }
      else{
        $last_name=trim($_POST["lastname"]);
      }

      //validate address
      if(empty(trim($_POST["address"]))){
        $address_err= "Please enter address";

      }
      else{
        $address=trim($_POST["address"]);
      }

      //validate nic
      if(empty(trim($_POST["nic"]))){
        $nic_err= "Please enter nic";

      }
      else{
        $nic=trim($_POST["nic"]);
      }

      //validate gender
      if(empty(trim($_POST["gender"]))){
        $gender_err= "Please enter gender";

      }
      else{
        $gender=trim($_POST["gender"]);
      }

      //validate age
      if(empty(trim($_POST["age"]))){
        $age_err= "Please enter age";

      }
      else{
        $age=trim($_POST["age"]);
      }

      //validate weight
      if(empty(trim($_POST["weight"]))){
        $weight_err= "Please enter gender";

      }
      else{
        $weight=trim($_POST["weight"]);
      }

      //validate height
      if(empty(trim($_POST["height"]))){
        $height_err= "Please enter height";

      }
      else{
        $height=trim($_POST["height"]);
      }
    }




?>