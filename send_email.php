<?php
$title=$_REQUEST["title"];
$name=$_REQUEST["name"];
$middle_name=$_REQUEST["middle_name"];
$last_name=$_REQUEST["last_name"];
$dob=$_REQUEST["dob"];
$state=$_REQUEST["state"];
$residential_address=$_REQUEST["residential_address"];
$current_address=$_REQUEST["current_address"];
$person_height=$_REQUEST["person_height"];
$qualification=$_REQUEST["qualification"];
$mobile_number=$_REQUEST["mobile_number"];
$alternate_number=$_REQUEST["alternate_number"];
$instagram=$_REQUEST["instagram"];
$msg="Title : ".$title."\nName is : ".$name."\n Middle name : ".$middle_name."\n Last name : ".$last_name."\nD.O.B : ".$dob."\nState : ".$state."\nResidential Address : ".$residential_address."\nCurrent Address : ".$current_address."\nPerson Height : ".$person_height."\nQualification : ".$qualification."\nMobile Number : ".$mobile_number."\nAlternate Number : ".$alternate_number."/nInstagram :".$instagram;
echo $msg;
$sub="New Enquiry at IFS";
mail("pardhiman832@gmail.com",$sub,$msg);
header("Submitted successfully")
?>
