﻿<?php

class Data extends mysqli {

  public function __construct() {
    parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $this->connect_errno ? die('Error en la conexión a la base de datos') : null;
  }

  public function recorrer($query) {
    return mysqli_fetch_array($query);
  }

}

function getConnection(){

    $mysqli = new mysqli("localhost", "root", "", "tostador");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
}


?>