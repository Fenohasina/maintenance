<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<!-- Titre -->
			<div class="x_title">
				<h2>Liste des banques</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Contenu -->
			<div class="x_content">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<table class="table table-striped jambo_table">
							<thead>
								<tr class="headings">
									<th class="column-title">Etat </th>
									<th class="column-title">Priorité </th>
									<th class="column-title">Banque </th>
									<th class="column-title">Lieu </th>
									<th class="column-title">RIB </th>
									<th class="column-title no-link last"><span class="nobr">Action</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php for ($i = 1; $i <= 3; $i++) {?>
								<tr>
									<td class=" ">Actif</a></td>
									<td class=" ">1</td>
									<td class=" ">BOA</td>
									<td class=" ">Antaninarenina</td>
									<td class=" ">00009 05604 12345678901 05</td>
									<td class=" last"><a href="#">Modifier</a></td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target=".banques_modal">Ajouter</button>
				</div>
			</div>
		</div>
	</div>
</div>