<?php

   class Newsletter{
    // Properties
    private $_email;
    
    // Methods
    public function __construct($_email) {
        $this->_email = $_email;
    }
   
    public function saveEmail($_email)
    {   //connection to database
        $pdo = getPdo();
        //prepared statement
        $sql = "INSERT INTO newsletter(email) VALUES(?)";
        $query = $pdo->prepare($sql);
        $query->execute([$_email]);  
    }
    
  }
  

 
 
  


  


  