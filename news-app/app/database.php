<?php


$conn = mysqli_connect("localhost", "root", "", "news_app");
if (!$conn) {
    die("connection Error : " . mysqli_connect_error());
}


function dbInsert($table, $data)
{
    global $conn;
    $keys = array_keys($data);
    $keys = "`" .implode("`,`", $keys) ."`";
    $values = array_values($data);
    $values = "'" . implode("','", $values) ."'";
    die;
    $sql = "INSERT INTO `$table`($keys) VALUES($values)";
    try {

        $result = mysqil_query($conn, $sql);
    } catch (mysqli_sql_exception $e) {
        die("insert error : " . $e->getMessage());
    }
}


function dbGet($table)
{    
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    try {
        $result = mysqli_query($conn, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    } catch (mysqli_sql_exception $e) {
        die("insert error : " . $e->getMessage());
    }
}