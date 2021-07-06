<div class="container">

    <table class="table table-striped table-dark" style="margin-top:20px">
        <tr>
            <th>Boleto</th>
            <th>Cantidad</th>
            <th>Ingresar</th>
        </tr>
        <?php foreach($boletos as $boleto):?>
        <tr>
            <form action="<?base_url();?>createPost"  method="post">
                <?php if($_SESSION['usuario']->id!=$boleto->usuario->id):?>
                    <td><?=$boleto->numero?></td>
                    <input type="hidden" name="idBoleto" value="<?=$boleto->id?>">
                    <td><input type="number" name="cantidad"></td>
                    <input type="hidden" name="id" value="<?=$_SESSION['usuario']->id?>">
                    <td><input class="btn btn-info" type="submit" value="Aceptar"></td>
                <?php else:?>
                    <?=$boleto->numero=null?>
                <?php endif;?>
            </form>
        </tr>


        <?php endforeach?>
    </table>
</div>
