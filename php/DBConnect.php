<?php


class DBConnect
{

//    These variables and their values are needed for connecting to the MYSQL Server
    public $server;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $connection;


//    Class Constructor method
    public function __construct(
        $server = "localhost",
        $dbname = "testingdatabase",
        $tablename = "testingclass",
        $username = "root",
        $password = ""
    )
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->tablename = $tablename;


        //    Create Connection
        $this->connection = mysqli_connect($server, $username, $password);

// Now we check if connection was successful
        if (!$this->connection){
            die("Connection failed: " .mysqli_connect_error());
        }


// After we have a successful connection to our DB Server we need to connect to a database

// This is a query to create a new database if one does not exist
        $query = "CREATE DATABASE IF NOT EXISTS $dbname";


//  Now we execute the query we just created. So if we have a valid connection and SQL Query, then the IF block will execute successfully
        if (mysqli_query($this->connection, $query)){
            $this->connection = mysqli_connect($server, $username, $password, $dbname); //This logs us into the database $dbname

//  Now that we are in our desired database we can now create a table in it if it does not exist

            //SQL to create new table
            $query = "CREATE TABLE IF NOT EXISTS $tablename 
                    (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                     product_name VARCHAR(25) NOT NULL,
                     product_price FLOAT NOT NULL,
                     product_image VARCHAR(100) NOT NULL);";

            //Now we execute the above query to create the table
            if (!mysqli_query($this->connection, $query)){
                echo "Failed to create database table: " .mysqli_error($this->connection);
            }

            echo "Check your database";

        }else{
            return false;
        }

    }




    public function getProduct(){

        //SQL Query to get data from table
        $query = "SELECT * FROM $this->tablename";


        //You execute the query and keep the results which is the number of rows in the $result variable.
        $result = mysqli_query($this->connection, $query);


        //Note: the items in your table are in rows so you check if there are any row in the table you are selecting from
        //This means that if the results is greater than zero, then when the getProduct function is called the result will be returned to the caller
        if (mysqli_num_rows($result) > 0){
            return $result;
        }
    }





}