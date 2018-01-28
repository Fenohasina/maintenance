<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <!-- Titre -->
            <div class="x_title">
                <h2>Dispatch <small>Dispatch des tâches de maintenance</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- CONTENU -->
            <div class="x_content">
                <!-- Dispatch-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="" class="form-horizontal form-label-left">
                            <!--                            Responsable-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12">Responsable du dispatch</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" readonly="readonly" placeholder="Tahiry SAHONDRARISON">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Date du dispatch
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
                                        <input id="date_dispatch" type="text" class="form-control has-feedback-left" placeholder="JJ/MM/AAAA" required="required">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ln_solid"></div>

                            <!--                            Agent-->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12">IM de l'agent de maintenance
                                        <span class="required">*</span>
                                    </label>
                                    <div class="input-group col-md-4 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" required="required" placeholder="296001">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">SEARCH</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12">Nom de l'agent</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" readonly="readonly" placeholder="RAZAKANAIVO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12">Prénoms</label>
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" readonly="readonly" placeholder="Bacchi Rija Yvon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-5 col-xs-12">Grade</label>
                                    <div class="col-md-6 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" readonly="readonly" placeholder="EFA II">
                                    </div>
                                </div>
                            </div>
<!--                            Droite-->
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="al_center">
                                        <img class="photoid " src="<?php echo base_url('assets/files/photoid/025023022.png') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="al_center">
                                    <button type="submit" class="btn btn-success">Dispatcher</button>
                                </div>
                            </div>
                        </form>
                        <!-- Fin Dispatch -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>