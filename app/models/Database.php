<?php

function dbConnect()
{
    $db = new PDO("mysql:host=localhost;dbname=festival;charset=utf8","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}