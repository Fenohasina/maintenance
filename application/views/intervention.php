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