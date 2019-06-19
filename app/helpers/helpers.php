
<?php 


function slug(string $name){
    return strtolower(trim(str_replace(' ' , '_'  ,$name)));
}