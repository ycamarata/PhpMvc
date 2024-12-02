<?php

spl_autoload_register(function ($class) {
   
   // Vérifie si le fichier existe
   spl_autoload_register(function ($class) {
   if(file_exists('./Core/' . $class . '.php')):
   include './Core/' . $class . '.php';
   elseif (file_exists('./Models/' . $class . '.php')):
   include './Models/' . $class . '.php';
   elseif (file_exists('./Controllers/' . $class . '.php')):
   include './Controllers/' . $class . '.php';
   elseif (file_exists('./DAO/' . $class . '.php')):
    include './DAO/' . $class . '.php';
   endif;
   });

}
);

 $test= new defaultDao;
echo "<br>";
echo"<pre>";
// Appeler la méthode getAll()
$test = new defaultDAO;
$results8 = $test->getAll();
print_r($results8);



?>


