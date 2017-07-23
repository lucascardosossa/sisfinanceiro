<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 20:59
 */

?>


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Nova Conta Receber </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <form id="demo-form2" action="#" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descrição <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="descricao" name="ContaReceber[descricao]" required="required"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor">Valor <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ContaReceber[valor]" name="ContaReceber[valor]" required="required"
                                   class="form-control col-md-7 col-xs-12 money">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dt_recebimento" class="control-label col-md-3 col-sm-3 col-xs-12">Data
                            recebimento <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="dt_recebimento" class="form-control col-md-7 col-xs-12" type="text"
                                   name="ContaReceber[data]" required="required" data-inputmask="'mask': '99/99/9999'">
                        </div>
                    </div>
                    <input type="hidden" name="action" id="action" value="insert_ctreceber">
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="reset">Limpar</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
