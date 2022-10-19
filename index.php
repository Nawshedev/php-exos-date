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
echo "le 3 mars 1993 était un " .strftime("%A", date($dateb));

// Exercice 5

// afficher toutes les années entre 2005 et 2052
// afficher si elle est bisextile ou pas
//https://www.tutorialspoint.com/php-program-to-check-if-a-year-is-leap-year-or-not#:~:text=php%20function%20year_check(%24my_year)%7B,year_check(%24my_year)%3B%20%3F%3E

function checkYear($startDay, $endDay){
    $startDay=

}


for($i=2005; $i<2052; $i++){

}

?>
