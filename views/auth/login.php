<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>
<?php foreach($errores as $error)://No se ejecuta si el arreglo esta vacio ?>  
<div class="alerta error">
    <?php echo $error; ?>
</div>
<?php endforeach; ?>
    <form method="POST" class="formulario" action="/login">

        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu email" id="email" require>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Tu Password" id="password" requires>
        </fieldset>
<input type="submit" value="Iniciar Sesion" class="boton boton-verde">

    </form>
</main>