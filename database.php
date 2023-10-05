<?php

    class ConnectionOperation {
        private $conn;
        function __construct() {
            $this->connect_db();
        }

        public function connect_db() {
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "PIZZANOSSADB";

            $this->conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            //Check connection
            if (mysqli_connect_error()) {
                die("ERROR: Could not connect: ".mysqli_connect_error());
            }
        }

        public function registerOrder($daydate,$wholeSlicePizza, $numberPizza, $shape, $size, $toppings, $styleCrust, $typeDelivery, $fname, $lname, $pnumber, $c_address, $additional){
            $insertQuery = "INSERT INTO ORDERPIZZA (DAYDATE, WHOLESLICEPIZZA, NUMBERPIZZA, SHAPE, SIZE, TOPPINGS, STYLECRUST, TYPEDELIVERY, FNAME, LNAME, PNUMBER, C_ADDRESS, ADDITIONAL) VALUES ('$daydate','$wholeSlicePizza', '$numberPizza', '$shape', '$size', '$toppings', '$styleCrust', '$typeDelivery', '$fname', '$lname', '$pnumber', '$c_address', '$additional')";
            $queryResult = mysqli_query($this->conn, $insertQuery);
            if($queryResult){
                return true;
            } else {
                return false;
            }
        }

        public function readOrders() {
            $selectQuery = "SELECT * FROM ORDERPIZZA";
            $queryResult = mysqli_query($this->conn, $selectQuery);
            return $queryResult;
        }
    }

    $connectionOperation = new ConnectionOperation();
?>