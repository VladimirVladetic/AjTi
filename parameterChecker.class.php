<?php
include 'database.php';

class ParameterChecker{
    private $alerttext = "Password errors: ";
    public function checkParameters($name,$surname,$yearofbirth,$password,$password2,$registration){
        $error = false;
        if((strlen($password) < 8)){
            $error = true;
            $this->alerttext .= "Password must be longer than 8 characters. ";
            //echo "<script>alert('Password must be longer than 8 characters.')</script>"; 
        }
        if(preg_match('/[A-Z]/', $password)===0){
            $error = true;
            $this->alerttext .= "Password must contain at least one uppercase letter. ";
            //echo "<script>alert('Password must contain at least one uppercase letter.')</script>";
        } 
        if(preg_match('/[a-z]/', $password)===0){
            $error = true;
            $this->alerttext .= "Password must contain at least one lowercase letter. ";
            //echo "<script>alert('Password must contain at least one lowercase letter.')</script>";
        }
        if(preg_match('/[0-9]/', $password)===0){
            $error = true;
            $this->alerttext .= "Password must contain at least one number. ";
            //echo "<script>alert('Password must contain at least one number.')</script>";
        }
        if($password != $password2 && $registration){
            $error = true;
            $this->alerttext .= "Passwords must match. ";
        }

        
        if($name == ""){
            $error = true;
            $this->alerttext .= " Name errors: ";
            $this->alerttext .= "Name required. ";
        }
        if($surname == ""){
            $error = true;
            $this->alerttext .= " Surname errors: ";
            $this->alerttext .= "Surname required. ";
        }

        $currentDate = new DateTime();
        $currentyear = $currentDate->format("Y");
        if($yearofbirth > $currentyear || $yearofbirth < 1800 || ($currentyear - $yearofbirth) < 18){
            $error = true;
            $this->alerttext .= " Year of birth errors: ";
            $this->alerttext .= "Input valid year of birth. ";
            //echo "<script>alert('Input valid year of birth.')</script>";
        }
        if($error)
        // echo "<script>showPopup('$alerttext')</script>";

        return $error;
    }

    public function getAlertText(){
        return $this->alerttext;
    }

}