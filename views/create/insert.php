<?php

if(isset($_POST))
{

    $pic = $_FILES['pic']['name'];
    $filetmp = $_FILES['pic']['tmp_name'];
   $title = $_POST['title'];
   $ftitle = $_POST['ftitle'];
   $mtitle = $_POST['mtitle'];
    $gender= $_POST['gender'];
    $dob= $_POST['dob'];
    $religion= $_POST['religion'];
    $nationality= $_POST['nationality'];
    $school= $_POST['school'];
    $syear= $_POST['syear'];
    $sdept= $_POST['sdept'];
    $sgpa= $_POST['sgpa'];
    $college= $_POST['college'];
    $hyear= $_POST['hyear'];
   $hdept = $_POST['hdept'];
    $hgpa= $_POST['hgpa'];
    $buni= $_POST['buni'];
    $byear= $_POST['byear'];
    $bdept= $_POST['bdept'];
    $bgpa= $_POST['bgpa'];
    $muni= $_POST['muni'];
   $myear = $_POST['myear'];
    $mdept= $_POST['mdept'];
    $mgpa= $_POST['mgpa'];
    $paddress= $_POST['paddress'];
    $praddress= $_POST['praddress'];
    $mobile= $_POST['mobile'];
    $mail= $_POST['mail'];
    $cobj= $_POST['cobj'];
    $skill= $_POST['skill'];


    $validextensions = array("jpeg", "jpg", "png");
    $ext = explode('.', basename($pic));//explode file name from dot(.)
    $file_extension = end($ext); //store extensions in the variable
    $picname = md5(uniqid()) . "." . $ext[count($ext) - 1];
    $path= "img/".$picname;



    if(in_array($file_extension,$validextensions))
    {

      $move = move_uploaded_file($filetmp,"../../".$path);


        include("../../src/admin/config.php");

        $sql = "INSERT INTO `info` (`pic`, `title`, `ftitle`, `mtitle`, `gender`, `dob`, `religion`, `nationality`, `school`, `syear`, `sdept`, `sgpa`, `college`, `hyear`, `hdept`, `hgpa`, `buni`, `byear`, `bdept`, `bgpa`, `muni`, `myear`, `mdept`, `mgpa`, `paddress`, `praddress`, `mobile`, `mail`, `cobj`, `skill`) VALUES ('$path', '$title', '$ftitle', '$mtitle', '$gender', '$dob', '$religion', '$nationality', '$school', '$syear', '$sdept', '$sgpa', '$college', '$hyear', '$hdept', '$hgpa', '$buni', '$byear', '$bdept', '$bgpa', '$muni', '$myear', '$mdept', '$mgpa', '$paddress', '$praddress', '$mobile', '$mail', '$cobj', '$skill')";
        $query = mysqli_query($myConnection,$sql) or die (mysqli_error($myConnection));

        $view = "SELECT id FROM info WHERE pic='$path'";
        $res = mysqli_query($myConnection,$view);
        while($row = mysqli_fetch_array($res)) {
            $id=$row['id'];
            header("location: ../list/view/?id=$id");


        }

    }
}
else{
    header("location: ../");
}