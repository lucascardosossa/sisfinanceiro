<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:58
 */
$objFuncoes = new \Utilities\Funcoes();
?>
<div class="title_left">
    <h3>Lançamentos
        <small>próximos 30 dias</small>
    </h3>
</div>
<div id="ctpagar" class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Contas a Pagar

            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['contaPagar'] as $item): ?>
                    <tr>
                        <td><?= $item['descricao'] ?></td>
                        <td><?= $objFuncoes->exibeValor($item['valor']) ?></td>
                        <td><?= $objFuncoes->ExibeData($item['data']) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div style="margin-top: 5%"></div>
<div id="ctpagar" class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Contas a Receber

            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table id="datatable-responsive" class="table table-striped table-bordered">
                <thead>
                <tr>

                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['contaReceber'] as $item): ?>
                    <tr>
                        <td><?= $item['descricao'] ?></td>
                        <td><?= $objFuncoes->exibeValor($item['valor']) ?></td>
                        <td><?= $objFuncoes->ExibeData($item['data']) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Balanço Financeiro</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content2">
            <input type="hidden" id="ctpagar_fin" value="<?= $data['grafico']['ctpagar_fin'] ?>">
            <input type="hidden" id="ctreceber_fin" value="<?= $data['grafico']['ctreceber_fin'] ?>">
            <input type="hidden" id="equilibrio_fin" value="<?= $data['grafico']['equilibrio_fin'] ?>">
            <div id="balanco" style="width:100%; height:300px;"></div>
        </div>
    </div>
</div>