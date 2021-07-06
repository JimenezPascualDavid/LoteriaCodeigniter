<div class="container">

<table class="table table-striped table-dark" style="margin-top:20px">
    <tr>
    <th>Boleto</th>
    <th>Nuevo numero</th>
    <th>Cambiar</th>
</tr>
<?php foreach($boletos as $boleto):?>
    <tr>
        <form action="<?base_url();?>UpdatePost"  method="post">
            <td><?=$boleto->numero?></td>
            <input type="hidden" name="id" value="<?=$boleto->id?>">
            <td><input type="number" name="numero"></td>
            <td><input class="btn btn-info" type="submit" value="Modificar"></td>
        </form>
    </tr>


<?php endforeach?>
</table>
</div>