<div id="wrapper">
	<!-- /.navbar-static-top -->
	<?php // load dashboard admin menu ?>
	<?php $this->load->view("dashboard_menu"); ?>
	<!-- /.navbar-static-side -->
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					<?= $subtitle; ?>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h2>
							<i class="fa fa-search fa-fw"></i> Role ID: &nbsp;
							<?= $role->role_id?>
						</h2>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<!-- Nav tabs -->
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="role_view-pills">
								<h3>System Name</h3>
								<p>
									<?= $role->name; ?>
								</p>
								<div>
									<h3>System ID</h3>
									<p>
										<?=  $role->slug; ?>
									</p>
									<h3>Description</h3>
									<p>
										<?=  $role->description; ?>
									</p>
								</div>
							</div>
						</div>
						<!-- /.panel-body -->
					</div>
				</div>
				<?= $link_back; ?>
			</div>
			<?= br(); ?>
			<!-- /.row -->
		</div>
		<!-- /#page-wrapper -->
	</div>
</div>
<!-- /#wrapper -->