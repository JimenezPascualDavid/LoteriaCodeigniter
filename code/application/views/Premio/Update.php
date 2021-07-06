<div class="container">
    <h1 class="text-white" style="margin-top:60px;margin-left:400px;text-shadow: 0.1em 0.1em 0.05em #333">Modificar premio</h1>
    <form action="<?= base_url()?>Premio/UpdatePost" method="post">
        <span class="text-white" style="margin-top:100px;margin-left:50px;text-shadow: 0.1em 0.1em 0.05em #333"><b>Elija un numero:</b></span>
        <select name="idNumero" style="margin-left:40px">
        <?php foreach($premios as $premio):?>
        <option value="<?=$premio->id?>"><?=$premio->numero?></option>
        <?php endforeach;?>
        </select>
        <input type="number" name="numero"   style="margin-top:90px;margin-left:80px;width:380;" maxlength="5">

        </div>

        <input type="hidden" name="idActivo" value="<?= $_SESSION['usuario']->id?>">
        <input type="submit" class="btn btn-danger btn-lg d-block mx-auto" style="color:white;" value="Añadir Premio">
    </form>
</div>