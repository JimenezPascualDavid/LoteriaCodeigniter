<div class="container">
    <table class="table table-striped table-dark" style="margin-top:20px">
        <tr>
            <th class="text-center">Boleto</th>
            <th class="text-center">Propietario</th>
            <th class="text-center">Participantes</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Dinero</th>
        </tr>
            <?php foreach($participar as $participa):?>
        <tr>
            <td class="text-center"><?=$participa->boleto->numero?></td>
            <td class="text-center"><?=$participa->boleto->usuario->nombre?></td>
            <td class="text-center"><?=($participa->participante_id!=null)?$participa->fetchAs('usuario')->participante->nombre:"-";?></td>
            <?php foreach($premio as $premiado):?>
                <?php if($premiado->numero==$participa->boleto->numero):?>
                    <td class="bg-success text-center">Acertado</td>
                    <?php foreach($tipo as $tipos):?>
                        <td class="text-center"><?=$tipos->multiplicador*$participa->cantidad;?>€</td>
                        <?php break;?>
                    <?php endforeach;?>
                    <?php break;?>
                <?php else:?>
                        <td class="bg-danger text-center">Perdido</td>
                        <td class="text-center"><?=$participa->cantidad;?>€</td>
                        <?php break;?>
                <?php endif;?>
            <?php endforeach;?>
        </tr>
            <?php endforeach;?>
    </table>
</div>

