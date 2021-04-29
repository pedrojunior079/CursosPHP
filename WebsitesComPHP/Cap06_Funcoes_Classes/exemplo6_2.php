<?php

   //Usando return em uma função 
   function maiusculo($string)
   {
       $string = strtoupper($string);
       $string = str_replace("á", "Á", $string);
       $string = str_replace("é", "É", $string);
       $string = str_replace("í", "Í", $string);
       $string = str_replace("ó", "Ó", $string);
       $string = str_replace("ú", "Ú", $string);
       $string = str_replace("â", "Â", $string);
       $string = str_replace("ê", "Ê", $string);
       $string = str_replace("ô", "Ô", $string);
       $string = str_replace("Î", "I", $string);
       $string = str_replace("O", "U", $string);
       $string = str_replace("ã", "Ã", $string);
       $string = str_replace("õ", "Õ", $string);
       $string = str_replace("ç", "Ç", $string);
       $string = str_replace("à", "A", $string);
       return $string;
   }
   $nome = "José Antônio";
   $nome_m = maiusculo($nome);
   echo "O nome do rapaz é $nome_m"; 

?>