<div class="row">
    <div class="col-md-12">
        <!-- Fiche de demande d'intervention -->
        <form action="" class="form-horizontal form-label-left">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Demandeur</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- GAUCHE -->
                    <div class="col-md-9 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">CF ou Service concerné </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" readonly="readonly" placeholder="Centre fiscal Alasora">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Date de la demande <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input id="date_demande" type="text" class="form-control has-feedback-left" placeholder="JJ/MM/AAAA" required="required">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">IM du demandeur
                            </label>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" readonly="readonly" placeholder="333 772">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Nom du demandeur
                            </label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" readonly="readonly" placeholder="RAOBELINA">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Prénoms
                            </label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" readonly="readonly" placeholder="Fenohasina">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Fonction
                            </label>
                            <div class="col-md-6 col-sm-8 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" readonly="readonly" placeholder="Chef de service">
                            </div>
                        </div>
                    </div>

                    <!-- DROITE -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="al_center">
                            <img class="photoid " src="<?php echo base_url('assets/files/photoid/025023021.jpg') ?>" alt="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- Objet de la demande -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Objet de la demande</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Matériel inventorié
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-4 col-xs-12">
                                    <input type="checkbox" class="js-switch" checked required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Code barre SSIF
                                    <span class="required">*</span>
                                </label>
                                <div class="input-group col-md-6 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" required="required" placeholder="Ex: 00000001">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Rechercher</button>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Type de matériel
                                </label>
                                <div class="col-md-8 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control col-md-12 col-xs-12" readonly="readonly" placeholder="Ordinateur">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Description du problème :<span class="required"> *</span></label>
                                <textarea class="form-control" required="required"></textarea>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Informations sur le matériel :</label>
                                <textarea class="form-control" readonly="readonly"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="al_center">
                            <button type="submit" class="btn btn-success">Demander</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Fin FORM -->
    </div>
</div>