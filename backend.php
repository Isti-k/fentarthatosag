<?php
    //var_dump($_GET);
    //űrlap kiértékelés
    if(isset($_POST["szemetem"])){
        $kivSzemet = $_POST["szemetem"];
        if($kivSzemet == "papír" || $kivSzemet == "tejes doboz"){
            echo "kék színű gyűjtő";
        }elseif ($kivSzemet == "bab konzerv" || $kivSzemet == "nylon csomagolás"){
            echo "Sárga színű gyűjtő";
        }else{
            echo "Nem színes kuka.";
        }
    }
?>