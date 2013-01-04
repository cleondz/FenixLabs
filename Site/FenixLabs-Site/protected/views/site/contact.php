<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
		'Contact',
);
?>
<div>


	<?php if(Yii::app()->user->hasFlash('contact')): ?>

	<div class="flash-success">
		<h2><?php echo Yii::app()->user->getFlash('contact'); ?></h2>
		<?php echo CHtml::link('Inicio', array('site/index'),array('class'=>'btn')); ?>
		<br/>
		<br/>
	</div>

	<?php else: ?>



	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span10">
			<h1>Contáctenos</h1>

			<p>Si tiene alguna consulta de negocio u otras preguntas , por favor
				llene el formulario para contactarnos y contestaremos a la
				brevedad. Gracias.</p>

		</div>
		<div class="span1"></div>
	</div>


	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span8">
			<h2>Twitter</h2>
			<a href="https://twitter.com/FenixLabs" class="twitter-follow-button"
				data-show-count="false" data-lang="es">Seguir a @FenixLabs</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



		</div>
		<div class="span2"></div>
	</div>



	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span8">
		
		
			<h2>Correo electrónico</h2>
		

			<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'contact-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array('validateOnSubmit'=>true,),
					'htmlOptions'=>array('class'=>'form-horizontal'),
			)); ?>



			<?php echo $form->errorSummary($model,'','',array('class'=>'label label-warning')); ?>

			<div>
				<?php echo $form->labelEx($model,'Nombre'); ?>
				<?php echo $form->textField($model,'name'); ?>
				<?php echo $form->error($model,'Nombre'); ?>

			</div>


			<div>
				<?php echo $form->labelEx($model,'Correo Electrónico'); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'Correo Electrónico'); ?>
			</div>

			<div>
				<?php echo $form->labelEx($model,'Título'); ?>
				<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'Encabezado'); ?>
			</div>

			<div style="width: 80%">
				<?php echo $form->labelEx($model,'Mensaje'); ?>
				<?php echo $form->textArea($model,'body',array('rows'=>8, 'cols'=>80)); ?>
				<?php echo $form->error($model,'Mensaje'); ?>
			</div>



			<?php if(CCaptcha::checkRequirements()): ?>
			<div>
				<?php echo $form->labelEx($model,'Código de verificación'); ?>
				<div>
					<?php $this->widget('CCaptcha'); ?>
					<?php echo $form->textField($model,'verifyCode'); ?>
				</div>
				<div class="hint">
					<small>Favor de capturar las letras que son mostradas en la imagen
						anterior.Las letras no tiene que coicidir en mayúsculas o
						minúsculas.</small>
				</div>
				<?php echo $form->error($model,'verifyCode'); ?>
			</div>
			<?php endif; ?>

			Campos con <span class="required">*</span> son requeridos.

			<div>
				<?php echo CHtml::submitButton('Enviar',array('class'=>'btn btn-custom')); ?>
			</div>



			<?php $this->endWidget(); ?>


		</div>
		<div class="span2"></div>

		<div></div>
	</div>

</div>
<!-- form -->

<?php endif; ?>