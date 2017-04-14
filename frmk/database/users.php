<?php

    function email_password_exists($username, $password) {

        global $dbh;
        try {
			$stmt = $dbh->prepare('SELECT * FROM Account WHERE email = ?');
			$stmt->execute(array($email));
            $result = $stmt->fetch();
            return ($result !== false && password_verify($password, $result['password']));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
    }

    /**
     * Add a user to database.
     */
    function add_user($email, $password) {

        global $dbh;
        $options = ['cost' => 12];
        $hash = password_hash($password, PASSWORD_DEFAULT, $options);
        try {
            $stmt = $dbh->prepare("INSERT INTO Account (email, password)
                                    VALUES (:email, :password)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hash);
            $stmt->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
    }

?>
