<?php
$servername = "localhost" ;
$username = "root";
$pass = "";
$dbname = "login_demo";


$conn = new mysqli($servername , $username , $pass  , $dbname) ;

/* 
$sql = "CREATE TABLE employe(
    id int(6) unsigned auto_increment primary key ,
    username varchar(30) not null ,
    pass varchar(20) not null 
)";
$sql = "INSERT INTO employe(username , pass)
VALUES('RUBEL' , 'RUBEL12')
";

if($conn -> query($sql) === true )
{
    echo("Data inserted");
}
else{
    echo("Data not Inserted");
}
*/


?>