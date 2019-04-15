<?php 
$conn = mysqli_connect("localhost","root","","rage");

$sql = "CREATE TABLE feedback(
fid INT(6) AUTO_INCREMENT PRIMARY KEY, 
name varchar(30),
email varchar(30),
exp varchar(40)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
/*
CREATE TABLE users (
cid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone VARCHAR(50),
password VARCHAR(50)
)"
*/
/*
CREATE TABLE drivers (
did INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
dname VARCHAR(30) NOT NULL,
dphone VARCHAR(50),
dest varchar(30),
src varchar(40),
cartype VARCHAR(30),
carno VARCHAR(30),
status VARCHAR(30),
rating varchar(1)
)

CREATE TABLE bookings(
date date,
cid varchar(30),
did varchar(30),
src varchar(30),
dest varchar(30)


INSERT INTO drivers(dname,dphone,dest,src,cartype,carno,status,rating)
VALUES ('jack', '939939939', 'bus', 'rail','economy','4006', 'avail','3'),
('xjack', '639939939', 'bank', 'rail','enterprise','4010', 'avail','3'),
('yjack', '439939939', 'bank', 'air','standard','4010', 'avail','3')

*/
