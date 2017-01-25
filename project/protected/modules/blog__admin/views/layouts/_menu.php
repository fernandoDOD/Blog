<?php $path = explode("/",Yii::app()->request->pathInfo); ?>
<li>
	<a href='<?php echo $this->createUrl('index/') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'index')?'active':''):'active'; ?>">
		<i class='icon-home-3'></i>
		<span>Dashboard</span>
	</a>
</li>
<li>
	<a href='<?php echo $this->createUrl('items/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'items')?'active':''):''; ?>">
		<i class='icon-map'></i>
		<span>Contenido Index</span>
	</a>
</li>
<li>
	<a href='<?php echo $this->createUrl('posts/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'posts')?'active':''):''; ?>">
		<i class='icon-newspaper-1'></i>
		<span>Posts</span>
	</a>
</li>
<li>
	<a href='<?php echo $this->createUrl('categories/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'categories')?'active':''):''; ?>">
		<i class='icon-edit-alt'></i>
		<span>Categorias</span>
	</a>
</li>
<li class='has_sub'>
	<a href='#'>
		<i class='icon-picture-2'></i>
		<span>Multimedia</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('galleries/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'galleries')?'active':''):''; ?>">
				<span>Galerias</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('imagesbank/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'imagesbank')?'active':''):''; ?>">
				<span>Banco de Imagenes</span>
			</a>
		</li>
	</ul>
</li>
