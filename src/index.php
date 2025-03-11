<?php
echo "Projet PHP avec RabbitMQ (Dockerisé) !\n";

if (extension_loaded('amqp')) {
    echo "L'extension AMQP pour PHP est activée.\n";
 

} else {
    echo "L'extension AMQP pour PHP n'est PAS activée.\n";
}
