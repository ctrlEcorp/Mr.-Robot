<?php 

$horario = readline ("Que horas são? ");
if ( $horario >=6 && $horario <12 ){
    echo "Bom dia";
}

else if ( $horario >=12 && $horario <18 ){
   echo "Boa Tarde";
}

else if ($horario>=18 && $horario <=24){
    echo "Boa Noite";
}

else {
    echo "Volte a dormir";
};
?>