<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
    $nombreUsuario = $_POST['nombre'];
    $organismoUO = $_POST['organismo']; // Campo del formulario: Organismo / UO
    $telContacto = $_POST['tel_contacto']; // Campo del formulario: Tel. de contacto
    $fechaReserva = $_POST['fecha'];
    $numeroPersonas = $_POST['numero_personas']; // Campo del formulario: Numero de personas
    $horaInicio = $_POST['hora_inicio']; // Campo del formulario: Hora Inicio
    $horaFin = $_POST['hora_fin']; // Campo del formulario: Hora Fin
    // Agregar más variables para otros campos del formulario según sea necesario

    $to = "jcerpa@mvot.gub.uy";
    $subject = "Formulario de Reserva de Sala";
    
    $message = "Información de la reserva:\n\n";
    $message .= "Funcionario que solicita la reserva: $nombreUsuario\n";
    $message .= "Organismo / UO: $organismoUO\n";
    $message .= "Tel. de contacto: $telContacto\n";
    $message .= "Fecha de reserva: $fechaReserva\n";
    $message .= "Número de personas: $numeroPersonas\n";
    $message .= "Hora de inicio: $horaInicio\n";
    $message .= "Hora de fin: $horaFin\n";
    // Agregar más líneas para otros campos del formulario según sea necesario

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Cambia esto al servidor SMTP que estés usando
    $mail->SMTPAuth = true;
    $mail->Username = 'juanzabalia1104@gmail.com';
    $mail->Password = 'Roonyejuma...1104';
    $mail->SMTPSecure = 'tls'; // O 'ssl' si es necesario
    $mail->Port = 587; // Cambia esto al puerto que estés usando

    $mail->setFrom('juanzabalia1104@gmail.com', 'Juan Zabalia');
    $mail->addAddress('jcerpa@mvot.gub.uy', 'Jonathan Cerpa');
    $mail->Subject = 'Prueba Mail Formulario';
    $mail->Body = 'Este es el body Freddyyyyyy';

    if ($mail->send()) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo: " . $mail->ErrorInfo;
    }

    if ($mail->send()) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo: " . $mail->ErrorInfo;
    }
}
?>