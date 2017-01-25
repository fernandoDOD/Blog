<!-- Page Heading Start -->
<div class="page-heading">
	<h1>Administración Blog Personal</h1>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><i class="icon-picture-2"></i> <strong>Slide</strong> Principal</h2>
				<div class="additional-btn">
					<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content">
				<div class="statistic-chart">
					<div class="row stacked">
						<div class="col-sm-12">
							<div class="toolbar">
								<div class="pull-right">
									<label class="left">Galeria</label>
									<div class="btn-group">
										<select class="form-control" id="Slide_Principal">
											<?php foreach ($galleries as $key => $gallery) { ?>
											<option value="<?php echo $gallery->id_gallery; ?>" <?php echo ($currentGallery->id_gallery == $gallery->id_gallery)?'selected="selected"':''; ?>><?php echo $gallery->name; ?></option>
											<?php } ?>
										</select>
									</div>
									<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary btn-xs general-value-set" data-element-val="#Slide_Principal" data-value-bd="8" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
							<div class="morris-chart principal-slide" style="height: 500px;">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner js-container-ajax" role="listbox">
										<?php foreach ($currentGallery->images as $key => $image) { ?>
										<div class="item <?php echo ($key==0)?'active':''; ?>">
											<div class="my-item-slide" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/galleries/<?php echo $currentGallery->id_gallery ?>/<?php echo $image->name; ?>)"></div>
										</div>
										<?php } ?>
									</div>
									<script type="text/javascript">
									loadAjax = {
									"url":"<?php echo $this->createUrl('galleries/loadGalleryFull'); ?>",
									"filter":null,
									"container":".js-container-ajax",
									"page":0,
									"load":false
									}
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><i class="icon-info"></i> <strong>Info Footer</strong></h2>
				<div class="additional-btn">
					<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="col-xs-6">
					<div class="form-group">
						<label for="fraseUno">Frase Izquierda</label>
						<div class="input-group">
							<textarea class="form-control" id="fraseUno" style="height: 150px;"><?php echo $frase1->value; ?></textarea>
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#fraseUno" data-value-bd="1" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label for="fraseDos">Frase Derecha</label>
						<div class="input-group">
							<textarea class="form-control" id="fraseDos" style="height: 150px;"><?php echo $frase2->value; ?></textarea>
							<span class="input-group-btn">
								<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#fraseDos" data-value-bd="2" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
<div class="col-lg-12">
	<div class="widget">
		<div class="widget-header transparent">
			<h2><i class="icon-share-2"></i> <strong>Redes</strong> Sociales</h2>
			<div class="additional-btn">
				<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
				<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
				<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
			</div>
		</div>
		<div class="widget-content padding">
			<div class="col-xs-6">
				<div class="form-group">
					<label for="Facebook_url">Facebook</label>
					<div class="input-group">
						<input type="text" class="form-control" id="Facebook_url" value="<?php echo $facebook->value; ?>" placeholder="Enter Facebook Page">
						<span class="input-group-btn">
							<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Facebook_url" data-value-bd="3" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="Twitter_url">Twitter</label>
					<div class="input-group">
						<input type="text" class="form-control" id="Twitter_url" value="<?php echo $twitter->value; ?>" placeholder="Enter Twitter Page">
						<span class="input-group-btn">
							<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Twitter_url" data-value-bd="4" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="Youtube_url">YouTube</label>
					<div class="input-group">
						<input type="text" class="form-control" id="YouTube_url" value="<?php echo $youtube->value; ?>" placeholder="Enter YouTube Page">
						<span class="input-group-btn">
							<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#YouTube_url" data-value-bd="5" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="Whatsapp_url">Whatsapp</label>
					<div class="input-group">
						<input type="text" class="form-control" id="Whatsapp_url" value="<?php echo $whatsapp->value; ?>" placeholder="Enter Number">
						<span class="input-group-btn">
							<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Whatsapp_url" data-value-bd="6" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="google_url">Google +</label>
					<div class="input-group">
						<input type="text" class="form-control" id="Google_url" value="<?php echo $googleplus->value; ?>" placeholder="Enter Google + Page">
						<span class="input-group-btn">
							<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Google_url" data-value-bd="7" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="linkedin_url">Linkedin</label>
					<div class="input-group">
						<input type="text" class="form-control" id="Linkedin_url" value="<?php echo $linkedin->value; ?>" placeholder="Enter Linkedin Profile">
						<span class="input-group-btn">
							<a href="<?php echo $this->createUrl('generalvalue/set'); ?>" class="btn btn-primary general-value-set" data-element-val="#Linkedin_url" data-value-bd="8" data-toggle="tooltip" title="Establecer"><i class="icon-check-1"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>