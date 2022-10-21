<?php

	
setlocale(LC_TIME, "fr_FR", "French");





echo "A cet instant, le timestamp est : ", time(),"<br><br><br>";
$date = date('d-m-y h:i:s');
echo "Aujourd'hui, nous sommes le: ".$date."<br><br><br>";


//Exercice 2

$birthDate=mktime(0,0,0,12,25,1993);
$now=time();
$myAgeInSeconds=$now-$birthDate;



echo "Il s'est écoulé ".$myAgeInSeconds." secondes depuis que je suis née <br><br><br>";

// Exercice 3

if(checkdate(2,29,1962)) 
    {
        echo "date valide <br><br>";
    }
    else
    {
        echo "date non valide <br><br>";
    }


//Exercice 4

$dateb=mktime(0, 0, 0, 3, 3, 1993);
setlocale(LC_TIME, "fr_FR");
echo "le 3 mars 1993 était un " .strftime("%A", date($dateb))."<br><br><br>";

// Exercice 5


function checkYear($myYear){
    if ($myYear % 400 == 0)
   echo $myYear." est une année bissextile <br> <br> <br>";
 else if ($myYear % 100 == 0)
 echo $myYear." n'est pas une année bissextile <br> <br> <br>";
 else if ($myYear % 4 == 0)
 echo $myYear." est une année bissextile <br> <br> <br>";
 else
 echo $myYear." n'est pas une année bissextile <br> <br> <br>";
}



for($myYear=2005; $myYear<2052; $myYear++){
    checkYear($myYear);
}

// Exercice 6

?>
