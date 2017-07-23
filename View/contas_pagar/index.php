<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:58
 */
$objFuncoes = new \Utilities\Funcoes();
?>
<?php if ($data['newRecord'] == 1) : ?>
    <div class="alert alert-success alert-dismissible fade in" style="margin-top: 5%" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        Conta a pagar inserida com <strong>sucesso!</strong>
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

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['dados'] as $item): ?>
                    <tr>
                        <td><?= $item['descricao'] ?></td>
                        <td><?= $objFuncoes->exibeValor($item['valor']) ?></td>
                        <td><?= $objFuncoes->ExibeData($item['data']) ?></td>
                        <td>
                            <a class="edit" href="<?= $item['id'] ?>"><i class="fa fa-edit"> Editar</i></a>
                            <a class="delete" href="<?= $item['id'] ?>"><i class="fa fa-trash"> Deletar</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<input type="hidden" id="action_index" value="ctpagar">
<div id="modal-edit" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editar Conta Receber</h4>
            </div>
            <div class="modal-body">
                <form id="edit_registry" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="descricao">Descrição <span
                                    class="required">*</span>
                        </label>
                        <div class="col-sm-8 ">
                            <input type="text" id="descricao" name="ContaPagar[descricao]" required="required"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label  col-sm-2 " for="valor">Valor <span
                                    class="required">*</span>
                        </label>
                        <div class=" col-sm-8 ">
                            <input type="text" id="valor" name="ContaPagar[valor]" required="required"
                                   class="money form-control ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dt_recebimento" class="control-label  col-sm-2 ">Data
                            recebimento <span
                                    class="required">*</span>
                        </label>
                        <div class=" col-sm-8 ">
                            <input id="data" class="form-control  " type="text" required="required"
                                   name="ContaPagar[data]" data-inputmask="'mask': '99/99/9999'">
                        </div>
                    </div>
                    <input type="hidden" id="id" name="ContaPagar[id]">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="save btn btn-primary">Salvar mudanças</button>
            </div>

        </div>
    </div>
</div>