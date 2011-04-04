<?php
// set global variables

$fNameDoc = "First Name";
$lNameDoc = "Last Name";
$phoneDoc = "Phone";
$addressDoc = "Address";
$cityDoc = "City";
$stateDoc = "State";
$zipDoc = "Zip";
$clear = 1;





// set post
function setPost(){
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$cvm = $_POST['cvm'];
	
	$formArray = array(
	$fName, $lName, $phone, $address, $city, $state, $zip
	);
}



// check for an empty field
function emptyCheck($n){
	if(isset($_POST['send'])){
		if (empty($n) || ($n == 'First Name') || ($n == 'Last Name') || ($n == 'Phone') || ($n == 'Address')
			|| ($n == 'City') || ($n == 'State') || ($n == 'Zip')){
			echo "Please Enter your $n <br />";
		}// end of if(empty)
	}// end of if send
}// endo of funtion

function checkNumLen($n, $len){
	if(isset($_POST['send'])){
		$c = strlen($n);
		if ($c < $len)
			echo "$n number must be $len numerical digits! <br />";
	}// end of isset
}// end of checkPhone()

// run empty check for form fields
function formCheck($formArray){
	foreach ($formArray as $fa){
		//echo $fa . "<br />";
		emptyCheck($fa);
	}// end of foreach
}// end if formCheck


// list order if all fields cleared validation
function listOrder(){
	if ($clear == 0){
		foreach ($formArray as $la){
			echo $_POST['$la'] . "<br />";
		}// end of foreach	
	}// end of clear
}// end of listOrder()