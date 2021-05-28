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

function jsAlter($msg) {
    echo "<script>";
    echo"alert('$msg')";
    echo "</script>";
}

function jsLocationReplaceExit($url, $msg = null) {
    if ( $msg ) {
        jsAlter($msg);
    }
    echo "<script>";
    echo"location.replace('$url')";
    echo "</script>";
    exit;
}

function jsHistoryBackExit($msg = null) {
    if ( $msg ) {
        jsAlter($msg);
    }
    echo "<script>";
    echo"history.back()";
    echo "</script>";
    exit;
}

function getIntValueOr($value, $defaultValue){
    if( isset($value) ){
        return intval($value);
    }
    return $defaultValue;
}

function getStringValueOr($value, $defaultValue){
    if( isset($value) ){
        return strval($value);
    }
    return $defaultValue;
}


?>