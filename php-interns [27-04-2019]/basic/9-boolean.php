<?php 
// boolean > true , false, 1/0

// upload picture
//$fileUploaded = false;

// if(true){ 
// 	echo "Your file was uploaded";
// }

// try also false // 1 & 0
$fileUploaded = 1;

if(! $fileUploaded){ 
	echo "Your file was uploaded";
}


// if (condition) {
// 	# code...
// }

//////////////////////////////////

// $fileUploaded = -1; 
// if($fileUploaded){ 
// 	echo "Your file was uploaded";
//  }

//////////////////////////////////

//where the boolean comes from ?

//$fileIsUploaded = upload_file(); // this function returns true / false vlaue
// $fileIsUploaded = true;
// var_dump($fileIsUploaded);

//////////////////////////////////

//Quic ex of is_int function returns true false
// $isint = 1;
// echo $isint ."<br>";
// $isint = is_int('alex');
// var_dump($isint);
// if($isint){
// 	echo 'That is an integer';
// }

//////////////////////////////////

var_dump(is_int('billy'));
var_dump(is_int(1));

//////////////////////////////////




