<?php

class Database {
    private $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $this->conn = new mysqli($servername, $username, $password);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        $this->createDb();
    }

    public function createDb() {
        $dbname = "donationdb";
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if ($this->conn->query($sql) === TRUE) {
            // echo "Database created successfully";
        } else {
            echo "Error creating database: " . $this->conn->error;
        }

        $this->conn->select_db($dbname);
        $sql = "CREATE TABLE IF NOT EXISTS donations (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL,
            mobile_number VARCHAR(15) NOT NULL,
            donation_amount DECIMAL(10, 2) NOT NULL,
            card_holder_name VARCHAR(50) NOT NULL,
            credit_card_no VARCHAR(16) NOT NULL,
            security_code VARCHAR(3) NOT NULL,
            expiry_date VARCHAR(5) NOT NULL,
            message TEXT,
            anonymous ENUM('Yes', 'No') NOT NULL
        )";
    
        if ($this->conn->query($sql) === TRUE) {
            // echo "Table created successfully";
        } else {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    public function insertDonation($firstName, $lastName, $email, $mobileNumber, $donationAmount, $cardHolderName, $creditCardNo, $securityCode, $expiryDate, $message, $anonymous) {
        $sql = "INSERT INTO donations (first_name, last_name, email, mobile_number, donation_amount, card_holder_name, credit_card_no, security_code, expiry_date, message, anonymous)
                VALUES ('$firstName', '$lastName', '$email', '$mobileNumber', '$donationAmount', '$cardHolderName', '$creditCardNo', '$securityCode', '$expiryDate', '$message', '$anonymous')";

        if ($this->conn->query($sql) === TRUE) {
            return "New record created successfully";
        } else {
            return "Error: Creating record";
            // return "Error: " . $sql . "<br>" . $this->conn->error;

        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}

?>