<div class="form">
        <h3 class="titulos">Agregar</h3>
        <div class="raya"></div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
            <div class="forms">
                <label for="nombre">Nombre</label>
                <input type="text" class="textos" name="nombre" id="nombre" placeholder="Nombre" required>
            </div>
            <div id="raya gris"></div>
            <div class="forms">
                <label for="apellido">Apellido</label>
                <input type="text" class="textos" name="apellido" id="apellido" placeholder="apellido" required>
            </div>
            <input type="submit" value="Agregar" class="boton">
        </form>
    </div>