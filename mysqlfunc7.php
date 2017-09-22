<?php
$GLOBALS["MySQL_mod"] = "mysqli";
function mysql_query($a) {
return mysqli_query($GLOBALS["MySQLconn"],$a);}
function mysql_affected_rows() {
return mysqli_affected_rows($GLOBALS["MySQLconn"]);}
function mysql_set_charset($a) {
return mysqli_set_charset($GLOBALS["MySQLconn"],$a);}
function mysql_error() {
return mysqli_error();}
function mysql_close($a) {
return mysqli_close($a);}
function mysql_num_rows($a) {
return mysqli_num_rows($a);}
function mysql_fetch_array($a) {
return mysqli_fetch_array($a);}
function mysql_insert_id() {
return mysqli_insert_id($GLOBALS["MySQLconn"]);}
function mysql_fetch_assoc($a) {
return mysqli_fetch_assoc($a);}
function mysql_select_db($a) {
return true;}
function mysql_result($res, $row, $field=0) {
        $res->data_seek($row);
        $datarow = $res->fetch_array();
        return $datarow[$field];}
function mysql_connect($a, $b, $c) {
       $h = M_HOST;  
       $p = M_PORT; 
       $s = "";
       if ($a[0] == "/") {
              $h = "";
              $s = $a;
              $p = 0;
       };
       $GLOBALS["MySQLconn"] = mysqli_connect($h, $b, $c,M_BASE,$p,$s);
return $GLOBALS["MySQLconn"];}
function mysql_real_escape_string($a) {
return mysqli_real_escape_string($GLOBALS["MySQLconn"],$a);}
?>