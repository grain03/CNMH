<?php
define('Root', dirname(__FILE__));
    error_reporting(E_ALL);

    require_once './Application/DatabaseConnection.php';
    require_once './Application/DAL/StudentDAO.php';
    require_once './Application/BLL/StudentBLO.php';
    require_once './Application/Entities/Student.php';

