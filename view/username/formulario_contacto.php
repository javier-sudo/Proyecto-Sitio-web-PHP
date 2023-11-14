<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/Estilo.css">
</head> 
<body id="CuerpoFormulario">
   <form id="form_formulario" action="https://formsubmit.co/javier.larraguerrero@gmail.com" method="POST" />
    <H2>Contacto </H2>

    <div class="input-group">

    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Nombre">

    <label for="phone">Telefono</label>
    <input type="tel" name="phone" id="phone" placeholder="Telefono">

    <label for="email">Correo</label>
    <input type="email" name="email" id="email" placeholder="email">

    <label for="message">Mensaje</label>
    <textarea name="message" id="mesa" cols="30" rows="50" placeholder="Mensaje"></textarea>

    <div class="form-txt">
        <a href="">Politica de privacidad</a>
        <a href="">Terminos y condiciones</a>
    </div>
    <input class="btn" type="submit" value="Enviar">
    </div>
   </form>
   
</body>
</html>