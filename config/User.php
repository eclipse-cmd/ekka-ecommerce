<?php

class User
{
    public static function sign_up($data)
    {
        $recovery_token = substr(str_shuffle('1234567890ASDFGHJKLPOIUYTREWQasdfghjklpoiuytreww'),0,5);
        $hash_password = password_hash($data["password"], PASSWORD_DEFAULT);
        $statement = $GLOBALS['dbh']->prepare("INSERT INTO user (firstname, lastname, gmail, username, password, remember_token) VALUES(?, ?, ?, ?, ?, ?)");
        try {
            $statement->execute([$data["first_name"], $data["last_name"], $data['email'], $data["username"],  $hash_password,  $recovery_token]);
            $registration_success =  [
                "success" => true,
                "message" => "Registration successful, please log in",
            header("Location: ./login.php")
            ];
            return $registration_success;
        } catch (PDOException $e) {
            return [
                'success' => false,
                'error' => $e->getmessage()
            ];
            // return (str_split($errors[0], "1062"));
        }
    }

    public static function login($data)
    {
        $stm = $GLOBALS['dbh']->prepare('SELECT * FROM user WHERE gmail = ? OR username =?');
        try {
            $stm->execute([$data['param'], $data['param']]);
            if ($stm->rowCount() !== 1) {
                return [
                    'status' => false,
                    'message' => "No User found"
                ];
            }
            $user = $stm->fetch();

            if (password_verify($data['password'], $user["password"])) {
                return [
                    'status' => true,
                    'user' => $user
                ];
            } else {
                return [
                    'status' => false,
                    'messages' => "Incorrect password"
                ];
            }
        } catch (PDOException $e) {
            return [
                'status' => false,
                'message' => "Error!:" . $e->getMessage() . "</br>"
            ];
        }
        return [
            'status' => false,
            'message' => "Login failed"
        ];; 
    }

    public static function passwordRecovery($gmail)
    {
        $stm = $GLOBALS['dbh']->prepare('SELECT * FROM user WHERE gmail = ?');
        try{
          $stm->execute([$gmail['recoverpass']]);
                if ($stm->rowCount() !== 1) {
                     return [
                        "status" => false,
                        "message" => ucwords( "email is invalid")
                    ];
                }else{
                    return [
                        "status" => true,
                        // "messages" => ucwords("checkdate your mail for OTP")
                    ];
                }
        } catch (PDOException $e) {
            return [
                'status' => false,
                'message' => "Error!:" . $e->getMessage() . "</br>"
                ];
            }
    }

     public static function tokenvalidation($token)
    {
        $stm = $GLOBALS['dbh']->prepare('SELECT * FROM user WHERE remember_token = ?');
        try{
          $stm->execute([$token['token']]);
            if ($stm->rowCount() !== 1) {
                 return [
                    "status" => false,
                    "message" => ucwords( "token is invalid")
                ];
            }else{
                return [
                    "status" => true,
                    // "messages" => ucwords("checkdate your mail for OTP")
                ];
            }
        } catch (PDOException $e) {
            return [
                'status' => false,
                'message' => "Error!:" . $e->getMessage() . "</br>"
            ];
        };
    }
    public static function NewPasswords($passwordReset){
        
        $stm = $GLOBALS['dbh']->prepare('SELECT * FROM user WHERE password = ?');
        try {
            $stm->execute([$passwordReset['NewPassword']]);
            if ($stm->rowCount() !== 1) {
                return [
                    'status' => false,
                    'messge' => ucwords('this password is cool')
                ];

            }else{
                return [
                    'status' => true,
                    'message' => "password updated"
                ];
            }
        } catch (Exception $e) {
            
        }
    }
  
}