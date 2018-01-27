<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content">
				<div class="table-responsive">
					<!-- <table id="datatable" class="table table-striped jambo_table"> -->
					<table id="liste_toutes" class="table table-striped jambo_table">
						<thead>
							<tr class="headings">
								<th class="column-title">Réf. </th>
								<th class="column-title">Date de la demande </th>
								<th class="column-title">Service </th>
								<th class="column-title">Type de matériel </th>
								<th class="column-title">Code barre </th>
								<th class="column-title">Description du problème </th>
								<th class="column-title">Situation </th>
								<th class="column-title">Agent de maintenance </th>
								<th class="column-title">Date de l'intervention </th>
								<th class="column-title">Date de finalisation </th>
								<th class="column-title">Cause du problème </th>
								<th class="column-title">Solution apportée </th>
								<th class="column-title no-link last"><span class="nobr">Action</span>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class=" "><a href="../intervention" target="_blank">000001</a></td>
								<td class=" ">27/01/2018</td>
								<td class=" ">CF Alasora</td>
								<td class=" ">Ordinateur</td>
								<td class=" ">00000001</td>
								<td class=" ">L'ordinateur n'arrive pas à démarrer</td>
								<td class=" ">Finalisé</td>
								<td class=" ">Mahefa</td>
								<td class=" ">30/01/2018</td>
								<td class=" ">30/01/2018</td>
								<td class=" ">Infecté par des virus</td>
								<td class=" ">Nettoyage des virus</td>
								<td class=" last"><a href="<?php echo base_url('intervention') ?>">Voir</a></td>
							</tr>
							<tr>
								<td class=" "><a href="<?php echo base_url('intervention') ?>" target="_blank">000002</a></td>
								<td class=" ">28/01/2018</td>
								<td class=" ">CF 3</td>
								<td class=" ">Ordinateur</td>
								<td class=" ">00000010</td>
								<td class=" ">Infecté par des virus</td>
								<td class=" ">En cours de réparation</td>
								<td class=" ">David</td>
								<td class=" ">29/01/2018</td>
								<td class=" "></td>
								<td class=" "></td>
								<td class=" "></td>
								<td class=" last"><a href="<?php echo base_url('intervention') ?>">Voir</a></td>
							</tr>
							<?php for ($i = 100003; $i <= 100020; $i++) {?>
							<tr>
								<td class=" "><a href="<?php echo base_url('intervention') ?>" target="_blank"><?php echo $i ?></a></td>
								<td class=" ">29/01/2018</td>
								<td class=" ">CF 1</td>
								<td class=" ">Ecran</td>
								<td class=" ">00000015</td>
								<td class=" ">L'écran ne s'allume plus</td>
								<td class=" ">En attente de dispatch</td>
								<td class=" "></td>
								<td class=" "></td>
								<td class=" "></td>
								<td class=" "></td>
								<td class=" "></td>
								<td class=" last"><a href="<?php echo base_url('intervention') ?>">Voir</a></td>
							</tr>
							<?php }?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>