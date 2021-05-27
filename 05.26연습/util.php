<?php

function DB_getRow($sql){
    global $dbConn;
    
    $rs = mysqli_query($dbConn, $sql);
    $row = mysqli_fetch_assoc($rs);

    return $row;
}

function DB_getRows($sql){
    global $dbConn;
    $rs = mysqli_query($dbConn, $sql);
    
    $rows = [];

    while($row = mysqli_fetch_assoc($rs)){
        $rows[] = $row;
    }

    return $rows;
}

function DB_insert($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);

    return mysqli_insert_id($dbConn);
}

function DB_update($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);
}

function DB_delete($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);
}





?>