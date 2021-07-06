<div class="container">
<?php if($tipo!='admin'):?>
    <div  style="margin-top:220px">
        <button class="btn btn-danger btn-lg" style="float:left"><a href="<?= base_url()?>boleto/create" style="text-decoration:none;color:white;">Añadir Boleto</a></button>
        <button class="btn btn-danger btn-lg" style="margin-left:150px"><a href="<?= base_url()?>boleto/update" style="text-decoration:none;color:white;">Modificar Boleto</a></button>
        <button class="btn btn-danger btn-lg "style="float:right"><a href="<?= base_url()?>participar/create" style="text-decoration:none;color:white;">Participar</a></button>
        <button class="btn btn-danger btn-lg"style="margin-left:200px"><a href="<?= base_url()?>participar/ver" style="text-decoration:none;color:white;">Ver Participaciones</a></button>
    </div>
<?php else:?>
    <div  style="margin-top:220px">
        <button class="btn btn-danger btn-lg"style="margin-left"><a href="<?= base_url()?>premio/create" style="text-decoration:none;color:white;">Añadir Premio</a></button>
        <button class="btn btn-danger btn-lg" style="margin-left:50px"><a href="<?= base_url()?>boleto/create" style="text-decoration:none;color:white;">Añadir Boleto</a></button>
        <button class="btn btn-danger btn-lg" style="margin-left:50px"><a href="<?= base_url()?>boleto/update" style="text-decoration:none;color:white;">Modificar Boleto</a></button>
        <button class="btn btn-danger btn-lg "style="margin-left:50px"><a href="<?= base_url()?>participar/create" style="text-decoration:none;color:white;">Participar</a></button>
        <button class="btn btn-danger btn-lg"style="float:right"><a href="<?= base_url()?>participar/ver" style="text-decoration:none;color:white;">Ver Participaciones</a></button>

    </div>
<?php endif?>

</div>
