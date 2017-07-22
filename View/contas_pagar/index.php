<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:58
 */

?>
<?php if ($data['newRecord'] == 1) : ?>
    <div class="alert alert-success alert-dismissible fade in" style="margin-top: 5%" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        Conta receber inserida com <strong>sucesso!</strong>
    </div>
<?php endif; ?>
<div id="ctpagar" class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Contas a Pagar

            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['dados'] as $item): ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $item['descricao'] ?></td>
                        <td><?= $item['valor'] ?></td>
                        <td><?= $item['data'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
