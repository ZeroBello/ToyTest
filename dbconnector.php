<?php

$connection = pg_connect("host=ec2-107-22-222-161.compute-1.amazonaws.com port=5432 dbname=dav5pmcstt56t9 user=ozktoyiunzgqjg password=a335284e90c1802c93a35a05892c211e5ba327abdcbeddac688a81af067ec211");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
