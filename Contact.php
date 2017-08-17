<?php
    class Contact
    {

        public static function sayHello()
        {
            echo"<h3>Hello World from contact class<h3>";
        }

        protected static function connectDb()

        {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbname = 'crud';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbname, $dbpass);
            if(!$conn)
            {
                return false;
            }
                return $conn;
        }

        public static function getfruits()
        {
            $conn = Self::connectDb();
            if($conn){
                $sql = "SELECT * FROM fruits";
                $result = $conn->query($sql);

                $rows = [];

                while($row = $result->fetch_assoc())
                {
                    $rows[] = $row;
                }
                return $rows;
            }
                else{
                    return "Cannot connect to db";
                }
        }
    }

?>