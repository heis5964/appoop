<?php

    //สร้างคลาส
    class UserLogin {
        private $conn;
        private $table_name = "users";

        //พรอมเพอตี้
        public $email;
        public $password;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        //ตรวจสอบว่ามีemailในระบบหรือเปล่า
        public function emailNotExists() {
            $query = "SELECT id FROM {$this->table_name} WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":email", $this->email);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                return true; //Email does not exist
            } else {
                return false; //Email exists
            }
        }

        //ตรวจสอบรหัสผ่าน
        public function verifyPassword() {
            $query = "SELECT id, password FROM {$this->table_name} WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":email", $this->email);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $hashedPassword = $row['password'];

                //กรณีรหัสผ่านถูกต้อง
                if (password_verify($this->password, $hashedPassword)) {
                    // return true;
                    $_SESSION['userid'] = $row['id'];
                    header("Location: welcome.php");
                } else {
                    return false; //Password do not match
                }
            }
            return false; // email not found
        }

        public function userData($userid) {
            $id = $userid;
            $query = "SELECT * FROM {$this->table_name} WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            //ตรวจสอบถ้ามีid
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                return $user;
            } else {
                return false;
            }
        }

        //สร้างฟังก์ชั่นLogout
        public function logOut() {
            session_start();
            unset($_SESSION['userid']);
            // session_destroy();
            header("Location: signin.php");
            exit;
        }

    }




?>