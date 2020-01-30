<div class="tabla">
        <h3 class="titulos">Usuarios</h3>
        <div class="raya"></div>
        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <?php foreach($usuarios as $key):?>
            <tr>    
                <td><button class="editar" onClick="llenar(<?php echo $key['id'].",'".$key['nombre']."','".$key['apellido']."'"?>)">Editar</button><?php echo " ".$key["nombre"]?></td>
                <td><?php echo " ".$key["apellido"]?></td>
            </tr>
            <?php endforeach;?>   
        </table>
    </div>