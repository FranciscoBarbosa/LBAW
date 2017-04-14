<?php
  
  function createUser( $email, $password, $firstname, $lastname) {
    global $conn;
    //tries to get the email from database, to check if it already exists
    $stmt = $conn->prepare("SELECT email FROM account WHERE email = ?");

    $stmt->execute(array($email));

    $checkedEmail = $stmt->fetch();

    if(checkedEmail!=null){
      //email already exists
      return 1;
    }
    else if (strlen($password)<6){
      //password must have at least 6 characters
      return 2;
    }
    else{
      $hashedPassword = password_hash($password,PASSWORD_BCRYPT);

      //insert into account
      $stmt=$dbh->prepare('INSERT INTO account (email,password) VALUES (:email,:password)');
      $stmt->bindParam(':email',$email);
      $stmt->bindParam(':password',$hashedPassword);   
      
      //insert into user
      $stmt=$dbh->prepare('INSERT INTO user (firstname,lastname) VALUES (:firstname,:lastname)');
      $stmt->bindParam(':firstname',$firstname);
      $stmt->bindParam(':lastname',$lastname); 

      $stmt->execute();  

    }
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM users 
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
?>
