<?php
// Bool e null são sempre comparados como booleanos
var_dump(1  == TRUE); // TRUE - same as (bool)1 == TRUE
var_dump(0 == FALSE); // TRUE - same as (bool)0 == FALSE
var_dump(100 < TRUE); // NULL - same as (bool)100 < TRUE
var_dump(-10 < FALSE); // FALSE - same as (bool)-10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool)NULL < (bool)-100 is
// FA LSE < TRUE
?>