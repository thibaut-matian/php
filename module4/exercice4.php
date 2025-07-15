<?php   

$temperature = 9;
$message = ($temperature < 10) ? "Il fait très froid." :
           (($temperature  <= 20) ? "Il fait frais." :
           (($temperature > 20) ? "Il fait bon." : "Il fait chaud."));
echo $message;
?>

