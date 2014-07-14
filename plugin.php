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
	}
}