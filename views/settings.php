<?php
if (!defined("IN_ESOTALK")) exit;

$form = $data["attachmentsSettingsForm"];
?>
<?php echo $form->open(); ?>

<div class='section'>
	<h2><?= T('Settings') ?></h2>
	<p><?= sprintf(T('For more information, visit %s.'), "<a href='http://www.jacklmoore.com/colorbox/' target='_blank'>Colorbox</a>") ?></p>
	<ul class='form'>
		<li>
			<label>transition</label>
			<?php echo $form->input("transition", "text"); ?>
			<small><?php echo T("The transition type. Can be set to 'elastic', 'fade' or 'none'."); ?></small>
		</li>
		<li>
			<label>speed</label>
			<?php echo $form->input("speed", "number", array('min' => 0)); ?>
			<small><?php echo T("Sets the speed of the fade and elastic transitions, in milliseconds."); ?></small>
		</li>
		<li>
			<label>scalePhotos</label>
			<?php echo $form->input("scalePhotos", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. If true, and if maxWidth, maxHeight, innerWidth, innerHeight, width, or height have been defined, Colorbox will scale photos to fit within the those values."); ?></small>
		</li>
		<li>
			<label>opacity</label>
			<?php echo $form->input("opacity", "number", array('min' => '0.0', 'max' => '1.0', 'step' => 'any')); ?>
			<small><?php echo T("The overlay opacity level. Range: 0 to 1. E.g: 0.5"); ?></small>
		</li>
		<li>
			<label>open</label>
			<?php echo $form->input("open", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. If true, Colorbox will immediately open."); ?></small>
		</li>
		<li>
			<label>returnFocus</label>
			<?php echo $form->input("returnFocus", "text"); ?>
			<small><?php echo T("true or false. If true, focus will be returned when Colorbox exits to the element it was launched from."); ?></small>
		</li>
		<li>
			<label>preloading</label>
			<?php echo $form->input("preloading", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. Allows for preloading of 'Next' and 'Previous' content in a group, after the current content has finished loading. Set to false to disable."); ?></small>
		</li>
		<li>
			<label>overlayClose</label>
			<?php echo $form->input("overlayClose", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. If false, disables closing Colorbox by clicking on the background overlay."); ?></small>
		</li>
		<li>
			<label>escKey</label>
			<?php echo $form->input("escKey", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. If false, will disable closing colorbox on 'esc' key press."); ?></small>
		</li>
		<li>
			<label>arrowKey</label>
			<?php echo $form->input("arrowKey", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. If false, will disable the left and right arrow keys from navigating between the items in a group."); ?></small>
		</li>
		<li>
			<label>className</label>
			<?php echo $form->input("className", "text"); ?>
			<small><?php echo T("Adds a given class to colorbox and the overlay."); ?></small>
		</li>
		<li>
			<label>fadeOut</label>
			<?php echo $form->input("fadeOut", "number", array('min' => 0)); ?>
			<small><?php echo T("Sets the fadeOut speed, in milliseconds, when closing Colorbox."); ?></small>
		</li>
		<li>
			<label>closeButton</label>
			<?php echo $form->input("closeButton", "number", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("true or false. Set to false to remove the close button."); ?></small>
		</li>
	</ul>
	<h2><?= T('Dimensions') ?></h2>
	<ul class='form'>
		<li>
			<label>width</label>
			<?php echo $form->input("width", "text", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("Set a fixed total width. This includes borders and buttons. Example: 100%, 500px, or 500"); ?></small>
		</li>
		<li>
			<label>height</label>
			<?php echo $form->input("height", "text", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("Set a fixed total height. This includes borders and buttons. Example: 100%, 500px, or 500"); ?></small>
		</li>
		<li>
			<label>innerWidth</label>
			<?php echo $form->input("innerWidth", "text", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T('This is an alternative to width used to set a fixed inner width. This excludes borders and buttons. Example: 50%, 500px, or 500'); ?></small>
		</li>
		<li>
			<label>innerHeight</label>
			<?php echo $form->input("innerHeight", "text", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T('This is an alternative to height used to set a fixed inner height. This excludes borders and buttons. Example: 50%, 500px, or 500'); ?></small>
		</li>
		<li>
			<label>initialWidth</label>
			<?php echo $form->input("initialWidth", "number", array('min' => 0)); ?>
			<small><?php echo T("Set the initial width, prior to any content being loaded."); ?></small>
		</li>
		<li>
			<label>initialHeight</label>
			<?php echo $form->input("initialHeight", "number", array('min' => 0)); ?>
			<small><?php echo T("Set the initial height, prior to any content being loaded."); ?></small>
		</li>
		<li>
			<label>maxWidth</label>
			<?php echo $form->input("maxWidth", "text", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("Set a maximum width for loaded content. Example: 100%, 500, 500px"); ?></small>
		</li>
		<li>
			<label>maxHeight</label>
			<?php echo $form->input("maxHeight", "text", array('min' => 0, 'max' => 1)); ?>
			<small><?php echo T("Set a maximum height for loaded content. Example: 100%, 500, 500px"); ?></small>
		</li>
	</ul>
</div>
<div class='buttons'>
<?php echo $form->saveButton("attachmentsLightboxSave"); ?>
</div>

<?php echo $form->close(); ?>