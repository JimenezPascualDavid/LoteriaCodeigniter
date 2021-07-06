<div class="container">
    <h1 class="text-white" style="margin-top:20px;margin-left:400px;text-shadow: 0.1em 0.1em 0.05em #333">Crear premio</h1>
    <form action="<?= base_url()?>Premio/CreatePost" method="post">
        <input type="number" name="numero"   style="margin-top:40px;margin-left:360px;width:380;" maxlength="5">
        <h1 class="text-white" style="margin-top:20px;margin-left:400px;text-shadow: 0.1em 0.1em 0.05em #333">Tipo de premio</h1>
        <select name="tipo"  style="margin-top:40px;margin-left:360px;width:380;" > 
        <option value="1">Primer Premio</option>
        <option value="2">Segundo Premio</option>
        <option value="3">Tercer Premio</option>
        <option value="4">Cuarto Premio</option>
        <option value="5">Quinto Premio</option>
        </select>
        

        <input type="hidden" name="idActivo" value="<?= $_SESSION['usuario']->id?>">
        <input type="submit" class="btn btn-danger btn-lg d-block mx-auto" style="color:white;" value="Añadir Premio">
    </form>
</div>