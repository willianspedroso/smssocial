 <?php
//pega os dados do usuario que está logado
$current_user = wp_get_current_user();
if($current_user->ID == 0) {
?>
	<div >
	  <div >
	    <span>
	      <b>SMS</b> Social
	      <img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/smsSocial.png" width="50" title="SMSSocial">
	    </span>
	  </div>
	</div>
	<br>
	<br>
<?php
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Fale Conosco</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">          
					<form name="form" id="form" action="<?php bloginfo('template_url'); ?>/login/actions.php?mt=fale_conosco" method="post" >
						<div class="col-md-6">
							<label> Nome </label>
							<input type="text" name="nome" value="" placeholder="Nome" class="form-control">
						</div>
						<div class="col-md-12">&nbsp;</div>

						<div class="col-md-6">
							<label> Email </label>
							<input type="text" name="email" value="" placeholder="Email" class="form-control">
						</div>
						<div class="col-md-12">&nbsp;</div>

						<div class="col-md-6">
							<label> Telefone </label>
							<input type="text" name="telefone" value="" placeholder="Telefone" class="form-control">
						</div>
						<div class="col-md-12">&nbsp;</div>

						<div class="col-md-6">
							<label> Texto </label>
							<textarea rows="3" cols="50" name="texto" class="form-control"></textarea>
						</div>
						<div class="col-md-12">&nbsp;</div>

						<div class="col-md-12">
							<button class="btn  btn-primary" type="submit">Enviar</button>
						</div>
					</form>
       			</div><!-- /.box-header -->
			</div>
		</div>
	</div>
</section>
