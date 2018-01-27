<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
 		<div class="navbar nav_title" style="border: 0;">
			<a href="<?php echo base_url(); ?>" class="site_title"><i class="fa fa-globe"></i> <span style="font-size: 20px;"><?php echo 'Maintenance' ?></span></a>

		</div>

		<div class="clearfix"></div>
		<!-- menu logo -->
		<div class="profile clearfix">
			<div>
				<img class="logo_img" src="<?php echo base_url('assets/images/MFB_DGI.png') ?>" alt="..." >
			</div>
		</div>
		<!-- /menu logo -->
		<br>
		<!-- Sidebar Menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>Menu</h3>
				<ul class="nav side-menu">
					<li><a><i class="fa fa-home"></i> Accueil <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('home') ?>">Index</a></li>
							<li><a href="<?php echo base_url('construction') ?>">Tableau de bord<span class="label label-success pull-right">En construction</span></a></li>
							<li><a href="<?php echo base_url('construction') ?>">Statistique<span class="label label-success pull-right">En construction</span></a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('demande') ?>">
							<i class="fa fa-male"></i> 
							Demande d'intervention
						</a>
					</li>
					<li><a><i class="fa fa-list"></i>Liste des interventions<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url('liste/toutes') ?>">Liste de toutes les interventions</a></li>
                            <li><a href="<?php echo base_url('liste/agents') ?>">Liste par agents</a></li>
                            <li><a href="<?php echo base_url('liste/services') ?>">Liste par services</a></li>
                        </ul>
					</li>
					<li><a><i class="fa fa-gear"></i> Espace privée <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">	
							<li><a href="<?php echo base_url('construction') ?>">Profil<span class="label label-success pull-right">En construction</span></a></li>
							<li><a href="<?php echo base_url('construction') ?>">...<span class="label label-success pull-right">En construction</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Sidebar Menu -->

		<!-- menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Paramètres">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Plein écran">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Déconnexion" href="login.html">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>