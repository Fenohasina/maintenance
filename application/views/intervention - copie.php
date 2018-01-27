<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="x_panel">
			<div class="" role="tabpanel" data-example-id="togglable-tabs">

				<!-- Tab List -->
				<ul id="Tab" class="nav nav-tabs bar_tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#tab1" role="tab" data-toggle="tab" id="tab1-tab" aria-expanded="true">Info</a>
					</li>
					<li role="presentation" class="">
						<a href="#tab2" role="tab" data-toggle="tab" id="tab2-tab" aria-expanded="true">Coordonnées</a>
					</li>
					<li role="presentation" class="">
						<a href="#tab3" role="tab" data-toggle="tab" id="tab3-tab" aria-expanded="true">Affectations</a>
					</li>
					<li role="presentation" class="">
						<a href="#tab4" role="tab" data-toggle="tab" id="tab4-tab" aria-expanded="true">Banques</a>
					</li>
					<li role="presentation" class="">
						<a href="#tab5" role="tab" data-toggle="tab" id="tab5-tab" aria-expanded="true">Logiciels</a>
					</li>
					<li role="presentation" class="">
						<a href="#tab6" role="tab" data-toggle="tab" id="tab6-tab" aria-expanded="true">Accès</a>
					</li>					
				</ul>

				<!-- Tab Content -->
				<div id="TabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1-tab">
						<?php $this->load->view('tab/permanentes')?>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="tab2" aria-labelledby="tab2-tab">
						<?php $this->load->view('tab/coordonnees')?>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="tab3" aria-labelledby="tab3-tab">
						<?php $this->load->view('tab/affectations')?>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="tab4" aria-labelledby="tab4-tab">
						<?php $this->load->view('tab/banques')?>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="tab5" aria-labelledby="tab5-tab">
						<?php $this->load->view('tab/logiciels')?>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="tab6" aria-labelledby="tab6-tab">
						<?php $this->load->view('tab/acces')?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>        	