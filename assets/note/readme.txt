ขั้นตอนการการทำงาน OOP MySQL Bootstrap5
1.เข้าไปที่โฟลเดอร์ xampp/htdocs/
2.สร้างโฟลเดอร์ appoop
1.สร้างไฟล์เชื่อมต่อฐานข้อมูล 
  -connect.php
2.สร้างฐานข้อมูล
  -pdo_db
3.สร้างตาราง
  -users 
  จำนวน 4 ฟิลด์
  -id
  -username
  -email
  -password
4.เปิดไฟล์ register.php
  -ที่ฟอร์มให้กำหนด action="../apppdo/service/users/register.php"
  -เปิดแท๊ก <?php session_start(); ?>
5.การinputข้อมูลของแต่ละตัวให้กำหนด
  -username ดังนี้ name="username" type="text"
  -email ดังนี้  name="email"    type="email"
  -password ดังนี้ name="password" type="password"
  -Confirm password ดังนี้ name="confirm_password" type="password"
ุุ6.กำหนด button ดังนี้
  -name="register"
7.เขียนโค๊ดที่ไฟล์ ../service/users/register.php
8.เปิดไฟล์ register.php เพื่อตรวจสอบsession
  -ใต้ฟอร์ม h1 ให้เปิด <?php   ?> เพื่อตรวจสอบsession
9.ทำระบบLogin
10.เปิดไฟล์ login.php
11.กำหนด name
  -email
  -password
12.เขียนโค๊ดที่ไฟล์ ../service/users/login.php
13.สร้างไฟลdashboard.php


