<?php

//1สร้างคลาสDatabase
class Database {
    private $host = "localhost";
    private $db   = "login_regis_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public Function getConnection() {
        //กำหนดค่าเป็นnull กรณีที่ยังไม่มีการเชื่อมต่อฐานข้อมูล
        $this->conn = null;

        try {
            //เชื่อมต่อฐานข้อมูล
            $this->conn = new PDO("mysql:host=". $this->host . ";dbname=" . $this->db, $this->username, $this->password);
        } catch (PDOException $exception) {
            //กรณีเชื่อต่อไม่สำเร็จ
            echo "Connection Error: " . $exception->getMessage();
        }
        //กรณีเชื่อต่อสำเร็จ
        return $this->conn;
    }
}


?>