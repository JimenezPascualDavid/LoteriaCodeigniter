<div class="container " style="padding-top: 10px;margin-top:20px">
    <h1 class="text-white text-center bg-info" style="margin-top:-24px;">LOTERIA NACIONAL DE NAVIDAD</h1>
    <div class="bg-white">
        <table class="table table-striped table-dark">
            <tr>
                <th class="bg-info text-center  " >1er Premio</th>
                <th class="bg-info text-center " >2º Premio</th>
                <th  class="bg-info text-center">3er Permio </th>
                <th  class="bg-info text-center">3er Permio </th>
                <th  class="bg-info text-center" rowspan="1">5º Premio</th>
            </tr>
            <tr>
            <?php foreach($premios as $premio):?>
            
                <td  class="text-center" ><?=$premio->numero?></td>
            
            
            <?php endforeach;?>
            </tr>
            
        </table>
    </div>
        <div>
        <?php if(isset($_REQUEST['politica-cookies'])) {
            
            $caducidad = time() + (60 * 60 * 24 * 365);
            
            setcookie('politica', '1', $caducidad);
        }?>
        <?php if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
            
            <div class="cookies bg-light" style="margin-top:180px;opacity:0.9">
                <p style="color:black;margin-left:320px"><b>El administrador en esta web está configurado como:<p style="margin-left:500px;color:red">admin</p></b></p>
                <button class="btn btn-danger btn-lg"style="margin-left:480px"><a href="?politica-cookies=1" style="text-decoration:none;color:white;">Aceptar</a></button>
            </div>
        <?php endif; ?>
    </div>
</div>
