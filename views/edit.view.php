<div class="form">
        <h3 class="titulos">Editar</h3>
        <div class="raya"></div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="forms">
                <label for=id>ID</label>
                <input type="text" class="textos" name="editarid" id="id" placeholder="id">
            </div>
            <div class="forms">
                <label for="editarnombre">Nombre</label>
                <input type="text" class="textos" name="editarnombre" id="editarnombre" placeholder="Nombre">
            </div>
            <div id="raya gris"></div>
            <div class="forms">
                <label for="editarapellido">Apellido</label>
                <input type="text" class="textos" name="editarapellido" id="editarapellido" placeholder="Apellido">
            </div>
            <input type="submit" value="Editar" class="boton">
        </form>
    </div>