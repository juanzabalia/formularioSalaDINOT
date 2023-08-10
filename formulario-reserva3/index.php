<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Reserva Sala</title>
<link rel="stylesheet" href="style.css">

<head>

    <img src="img/Dinot PNG-Para word.png" alt="logoMinisterio" class="logo">
    <title>Formulario de Reserva</title>

</head>

<body>
    <form method="post">

        <h2 class="titulo">Formulario de Reserva de Sala</h1>
            <h2>Ingrese datos requeridos:</h2>
            <div class="opciones">
                <label>Seleccione un piso:</label>
                <select name="pisos">
                    <option value="1erPiso" name="primerPiso">1er piso</option>
                    <option value="4toPiso" name="cuartoPiso">4to piso</option>
                </select>
            </div>

            <div class="caja">
                <div class="grid3x2">
                    <div>
                        <label>Funcionario que solicita la reserva:</label><br>
                        <label>Organismo / UO:</label><br>
                        <label>Tel. de contacto:</label><br>
                        <label>Tu E-Mail:</label><br>

                    </div>
                    <div>
                        <input type="text" placeholder="funcionario" name="funcionario" required=""><br>
                        <input type="text" placeholder="Organismo" name="organismo" required=""><br>
                        <input type="number" placeholder="Teléfono" name="telefono" required=""><br>
                        <input type="email" placeholder="E-Mail" name="email" required=""><br>
                    </div>
                </div>
            </div>

            <div class="caja">
                <div class="grid2x3">
                    <div>
                        <label>Tema:</label><br>
                        <label>Fecha:</label><br>
                    </div>
                    <div>
                        <input type="text" placeholder="Tema" name="tema" required=""><br>
                        <input type="date" placeholder="Fecha" name="fecha" required=""><br>
                    </div>

                    <div>
                        <label>Numero de personas:</label><br>
                        <label>Hora Inicio:</label><br>
                        <label>Hora Fin:</label><br>
                    </div>
                    <div>
                        <input type="number" placeholder="Número de personas" name="numeroPersonas" required=""><br>
                        <input type="time" placeholder="Hora de Inicio" name="horaInicio" required=""><br>
                        <input type="time" placeholder="Hora Fin" name="horaFin" required=""><br>
                    </div>
                </div>
            </div>

            <!--<div class="caja">
                <div>
                    <label>Opciones de Sala:</label><br>
                    <select name="opciones" onchange="mostrarTerciarias(this)">
                        <option value="">Selecciona una opción</option>
                        <option value="soloSala" name="soloSala" required="">Solo sala</option>
                        <option value="conProyeccion" name="conProyeccion" required="">Con proyección</option>
                        <option value="conVideoconferencia" name="conVideoconferencia" required="">Con videoconferencia
                        </option>
                    </select>
                </div>
                <div class="terciarias" id="soloSalaTerciarias">
                    <label class="terciarias-label">Con audio:</label><br>
                    <input type="radio" name="conAudioSi" value="audioSi" required="">Si
                    <input type="radio" name="conAudioNo" value="audioNo" required="">No
                    <br>
                    <label class="terciarias-label">Con acceso a recursos de red:</label><br>
                    <input type="radio" name="conRecursosRedSi" value="recursosRedSi" required="">Si
                    <input type="radio" name="conRecursosRedNo" value="recursosRedNo" required="">No
                </div>
                <div class="terciarias" id="conProyeccionTerciarias">
                    <label class="terciarias-label">Con audio:</label><br>
                    <input type="radio" name="conAudioSi" value="audioSi" required="">Si
                    <input type="radio" name="conAudioNo" value="audioNo" required="">No
                </div>
                <div class="terciarias" id="conVideoconferenciaTerciarias">
                    <label class="terciarias-label">Anfitrión:</label><br>
                    <input type="radio" name="anfitrion" value="anfitrión" required="">
                    <br>
                    <label class="terciarias-label">Invitado:</label><br>
                    <input type="radio" name="invitado" value="invitado" required="">
                    <br>
                    <label class="terciarias-label">Aplicación para videoconferencia:</label><br>
                    <input type="text" placeholder="Escriba aquí la aplicación de videoconferencia" name="aplicacion"
                        required="">
                </div>
            </div>-->

            <div class="caja">
                <label>Observaciones:</label><br>
                <input type="text" placeholder="Escriba aquí..." class="observaciones" name="observaciones" required="">
            </div>

            <div class="caja">
                <p class="titulo">Notas</p>
                <ul class="viñeta">
                    <li>La disponibilidad para el uso de las salas debera ser en el horario entre las 9 y las 16 horas.
                    </li>
                    <li>La sala no podrá ser utilizada para eventos sociales: lunch, desayunos, comidas, bufets, etc.
                    </li>
                    <li>Capacidad máxima de cada sala: - 1er Piso máximo de 12 (doce) personas.
                        - 4to Piso máximo de 40 (cuarenta) personas.
                    </li>
                    <li>La reserva de sala puede ser suspendida por prioridad de las autoridades.</li>
                    <li>La disposición de la sala NO puede ser modificada, sin previa autorización de la Secretaría.
                    </li>
                    <li>El Solicitante será responsable de dejar los equipos informáticos y aire acondicionados apagados
                        al
                        finalizar.</li>
                </ul>
            </div>

            <div class="caja columnas">
                <label> Firma ________________________________________</label>
                <label> Fecha ________________________________________</label>
            </div>

            <div class="caja">
                <input type="submit" name="enviar">

                <p>Galicia 1133 - Teléfonos de contacto: 2917 0710 int. 3102 - 3103 - dinot@mvot.gub.uy</p>
            </div>


            <?php
            include("correo.php");
           
            
            ?>
    </form>
</body>
<script src="codigo2.js"></script>

</html>