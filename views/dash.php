    <div class="row">
        <!-- datelist vai ser a rota -->
        <form action="datelist" method="post">

            <label for="inicial">Data inicial</label>
            <input type="date" id="inicial" name="inicial">

            <label for="final">Data Final</label>
            <input type="date" id="final" name="final">

            <button type="submit" class="btn btn-outline-warning">Filtrar</button>
        </form>

    </div>

    <div class="row">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Filme</th>
                    <th>Loja</th>
                    <th>Última atulização</th>
                </tr>
            </thead>
            <tbody>
            <!--  foreach faz o loop -->
            <?php foreach ($data as $d) { ?>
                <tr>
                    <td> <?php echo $d['title']; ?> </td>
                    <td> <?php echo $d['store_id']; ?> </td>
                    <td> <?php echo date_format(date_create( $d['last_update']), 'd/m/Y'); ?> </td>
                </tr>
            <?php }?>
            </tbody>
        </table>

    </div>