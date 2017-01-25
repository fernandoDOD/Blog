<div class="profile-banner">
	<div class="my-header-blur" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin/gray.jpg );"></div>
</div>

<div class="row">
	<div class="col-sm-3">
		<!-- Begin user profile -->
		<div class="text-center user-profile-2">
			<h4><?php echo $model->nombre; ?></h4>
		</div><!-- End div .box-info -->
		<!-- Begin user profile -->
	</div><!-- End div .col-sm-3 -->
	<div class="col-sm-12">
		<div class="widget widget-tabbed">
			<!-- Nav tab -->
			<ul class="nav nav-tabs nav-justified">
			  <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-tags"></i><?php echo $model->nombre; ?></a></li>
			</ul>
			<!-- End nav tab -->

			<!-- Tab panes -->
			<div class="tab-content">
				
				<!-- Tab about -->
				<div class="tab-pane animated fadeInRight active" id="about">
					<div class="user-profile-content">
						<div class="row">
							<div class="col-sm-12">
								<h2>Contenido</h2>
								<p><?php echo $model->descripcion; ?></p>
							</div>
						</div>
					</div><!-- End div .user-profile-content -->
				</div><!-- End div .tab-pane -->
			</div><!-- End div .tab-content -->
		</div><!-- End div .box-info -->
	</div>
</div>