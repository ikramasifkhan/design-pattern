<?php
require ('Fecade.php');

$basicInfo = Fecade::basicInfo("Ikram Asif Khan", "asif@gmail.com", "01937302480");
$otherInfo = Fecade::otherInfo("Male", "BCSE");


print_r([
    "basic_info"=>$basicInfo,
    "other_info"=>$otherInfo,
]);


