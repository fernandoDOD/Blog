<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'notica-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'role'=>'form',
        'enctype'=>"multipart/form-data",
    )
)); ?>
	<div class="row">
		<?php if($form->errorSummary($model) != ""){ ?>
			<div class="col-sm-12">
	            <div class="alert alert-danger">
	                <?php echo $form->errorSummary($model); ?>
	            </div>
	        </div>
        <?php } ?>
		<div class="col-sm-12">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Noticia</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<?php echo $form->labelEx($model,'nombre'); ?>
		        				<?php echo $form->textField($model,'nombre',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Titulo','required'=>true)); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'categoria'); ?>
		        				<?php echo $form->dropDownList($model,'category_fk', MyMethods::getListSelect('Categories', 'id', 'nombre'), array('class'=>'form-control')); ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<div class="imag-before-upload" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin/gray.jpg); max-width: 360px;height: 300px;">
									<?php if(!$model->isNewRecord && $model->imagen != ""){ ?>
										<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/posts/300x300/<?php echo $model->imagen; ?>)"></div>
									<?php } ?>
								</div>
								<input type="file" accept="image/*" class="btn btn-default js-show-before" name="image" data-before=".imag-before-upload" title="<?php echo ($model->isNewRecord)?'Agregar Imagen':'Cambiar Imagen' ?>">
								<p class="help-block"><strong>Nota: </strong> Dimensiones recomendadas de 500x350. Peso maximo 300Kb.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Contenido</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->textArea($model,'descripcion',array('class'=>'js-ckeditor')); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('publicaciones/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>