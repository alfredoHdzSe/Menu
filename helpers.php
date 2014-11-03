<?php
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 21/10/14
 * Time: 05:26 PM
 */

    function view($plantilla,$variables=array()){
        extract($variables);
        require("view/".$plantilla.".ptl.php");
    }
    function controller($nombre){
        if(empty($nombre))
            $nombre='home';
        $archivo="controllers/$nombre.php";
        if(file_exists($archivo))
            require($archivo);
            else
                echo"error";



}