<?php require_once 'back-end/database.php'; ?>
<div class="tab-pane fade" id="menu_exibir" role="tabpanel" aria-labelledby="pills-profile-tab">
	 <div id="box-exibir">
	 	<?php
	 		$instance = new Database();
	 		$instance->exibir();
	 	?>
	 </div>
</div>