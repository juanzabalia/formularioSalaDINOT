<?php
require 'PHPMailer-master/src/PHPMailer.php'; // Asegúrate de reemplazar 'path_to_phpmailer' con la ruta real donde tienes PHPMailer instalado
require 'PHPMailer-master/src/SMTP.php'; // Asegúrate de reemplazar 'path_to_phpmailer' con la ruta real donde tienes PHPMailer instalado

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['enviar'])) {
    if (/*!empty($_POST['pisos']) &&*/ !empty($_POST['funcionario']) && !empty($_POST['organismo']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['tema']) && !empty($_POST['fecha']) && !empty($_POST['numeroPersonas']) && !empty($_POST['horaInicio']) && !empty($_POST['horaFin']) && /*!empty($_POST['opciones'])*/ !empty($_POST['observaciones'])) {
        /*$primerPiso = $POST['primerPiso'];
        $cuartoPiso = $POST['cuartoPiso'];*/
        $funcionario = $_POST['funcionario'];
        $organismo = $_POST['organismo'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $tema = $_POST['tema'];
        $fecha = $_POST['fecha'];
        $numeroPersonas = $_POST['numeroPersonas'];
        $horaInicio = $_POST['horaInicio'];
        $horaFin = $_POST['horaFin'];
        /*$soloSala = $POST['soloSala'];
        $conProyeccion = $POST['conProyeccion'];
        $conVideoconferencia = $POST['conVideoconferencia'];
        $conAudioSi = $POST['conAudioSi'];
        $conAudioNo = $POST['conAudioNo'];
        $conRecursosRedSi = $POST['conRecursosRedSi'];
        $conRecursosRedNo = $POST['conRecursosRedNo'];
        $conAudioSi = $POST['conAudioSi'];
        $conAudioNo = $POST['conAudioNo'];
        $anfitrion = $POST['anfitrion'];
        $invitado = $POST['invitado'];
        $aplicacion = $POST['aplicacion'];*/
        $observaciones = $_POST['observaciones'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mail = mail($email, $tema, $header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}
?>