<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Information sur le matériel</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form action="" class="form-horizontal form-label-left">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-md-6 col-sm-12 col-xs-12">Code barre SSIF</label>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly" placeholder="Ex: 00000001">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Description du problème :</label>
                                <textarea class="form-control" readonly="readonly"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-md-6 col-sm-12 col-xs-12">Type du matériel</label>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly" placeholder="Ordinateur">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Information sur le matériel :</label>
                                <textarea class="form-control" readonly="readonly"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4 class="al_center">Référence</h4>
                            <p class="al_center">000001</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4 class="al_center">Code SSIF</h4>
                            <img class="codebarre" src="<?php echo base_url('assets/files/codebarre/09419685.png') ?>" alt="">
                            <p class="al_center">09419685</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <!-- Tab List -->
            <ul id="Tab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tab1" role="tab" data-toggle="tab" id="tab1-tab" aria-expanded="true">Demande</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab2" role="tab" data-toggle="tab" id="tab2-tab" aria-expanded="true">Dispatch</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab3" role="tab" data-toggle="tab" id="tab3-tab" aria-expanded="true">Intervention</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab4" role="tab" data-toggle="tab" id="tab4-tab" aria-expanded="true">Validation</a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div id="TabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1-tab">
                    <?php $this->load->view('tab/demande')?>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="tab2" aria-labelledby="tab2-tab">
                    <?php $this->load->view('tab/dispatch')?>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="tab3" aria-labelledby="tab3-tab">
                    <?php $this->load->view('tab/intervention')?>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="tab4" aria-labelledby="tab4-tab">
                    <?php $this->load->view('tab/validation')?>
                </div>
            </div>
        </div>
    </div>
</div>        	