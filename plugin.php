<?php
ET::$pluginInfo["AttachmentsLightbox"] = array(
	"name"        => "Attachments (Lightbox)",
	"description" => "Make attachments open in lightbox",
	"version"     => "1.0",
	"author"      => "Martin Mårtensson",
	"authorEmail" => "martin@redward.se",
	"authorURL"   => "http://redward.se",
	"license"     => "GPLv2",

	/*"dependencies" => array(
		"Attachments" => ESOTALK_VERSION
	)*/
);

class ETPlugin_AttachmentsLightbox extends ETPlugin {
	public function handler_conversationController_renderBefore($sender) {
		/*$sender->addCSSFile($this->resource("fineuploader/fineuploader.css"));*/
		$sender->addCSSFile($this->resource("colorbox.css"));
		$sender->addJSFile($this->resource("jquery.colorbox-min.js"));
		$sender->addJSFile($this->resource("attachmentslightbox.js"));

		// make the configuration available to javascript
		$sender->addJSVar('AttachmentsLightboxConfig', $this->getConfig());
	}

	// Construct and process the settings form.
	public function settings($sender) {
		// Set up the settings form.
		$form = ETFactory::make("form");
		$form->action = URL("admin/plugins/settings/AttachmentsLightbox");

		$config = $this->getConfig();

		// settings
		$form->setValue("transition", $config->transition);
		$form->setValue("speed", $config->speed);
		$form->setValue("scalePhotos", $config->scalePhotos);
		$form->setValue("opacity", $config->opacity);
		$form->setValue("open", $config->open);
		$form->setValue("returnFocus", $config->returnFocus);
		$form->setValue("preloading", $config->preloading);
		$form->setValue("overlayClose", $config->overlayClose);
		$form->setValue("escKey", $config->escKey);
		$form->setValue("arrowKey", $config->arrowKey);
		$form->setValue("className", $config->className);
		$form->setValue("fadeOut", $config->fadeOut);
		$form->setValue("closeButton", $config->closeButton);

		// dimensions
		$form->setValue("width", $config->width);
		$form->setValue("height", $config->height);
		$form->setValue("innerWidth", $config->innerWidth);
		$form->setValue("innerHeight", $config->innerHeight);
		$form->setValue("initialWidth", $config->initialWidth);
		$form->setValue("initialHeight", $config->initialHeight);
		$form->setValue("maxWidth", $config->maxWidth);
		$form->setValue("maxHeight", $config->maxHeight);

		// If the form was submitted...
		if ($form->validPostBack("attachmentsLightboxSave")) {

			$values = $form->getValues();

			// unset values not needed
			unset($values['token']);
			unset($values['attachmentsLightboxSave']);

			// Construct an array of config options to write.

			if (!$form->errorCount()) {

				$this->correctOpacity($values['opacity']);

				// save the changes to a new user file
				file_put_contents(__DIR__ . '/config.json', json_encode($values));

				$sender->message(T("message.changesSaved"), "success autoDismiss");
				$sender->redirect(URL("admin/plugins"));

			}
		}

		$sender->data("attachmentsSettingsForm", $form);
		return $this->view("settings");
	}

	protected function getConfig() {
		// first get default config
		$config = json_decode(file_get_contents(__DIR__ . '/config.default.json'));

		// then get user config and merge it with same array
		if (file_exists(__DIR__ . '/config.json'))
			$config = (object)array_merge((array)$config, json_decode(file_get_contents(__DIR__ . '/config.json'), true));

		return $config;
	}

	/**
	 * Make sure opacity is an int and doesn't have a comma in it
	 * @param str|int $opacity
	 *
	 * @return int (reference)
	 **/
	protected function correctOpacity(&$opacity) {
		$opacity = (float)str_replace(array(' ', ','), array('', '.'), $opacity);

		// make sure it's lower or equal to 1 and higher or equal to 0
		if ($opacity < 0) $opacity = 0;
		if ($opacity > 1) $opacity = 1;
	}
}