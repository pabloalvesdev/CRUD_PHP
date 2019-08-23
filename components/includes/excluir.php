<?php require_once 'back-end/database.php';?>
<div class="tab-pane fade" id="menu_excluir" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div id="box-excluir">
	 	<?php
	 		$alterar = new Database();
	 		$alterar->alterarDados();
	 	?>
    </div>
</div>