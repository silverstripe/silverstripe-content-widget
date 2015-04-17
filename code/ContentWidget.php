<?php

/**
 * Content Widget
 *
 * @package silverstripe-content-widget
 */
class ContentWidget extends Widget {
	/**
	 * @var array
	 */
	public static $db = array(
		"HTML" => "HTMLText"
	);

	/**
	 * @var string
	 */
	private static $title = "HTML Content";

	/**
	 * @var string
	 */
	private static $cmsTitle = "HTML Content";

	/**
	 * @var string
	 */
	private static $description = "Custom HTML content widget.";

	/**
	 * @return FieldList
	 */
	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->push(TextField::create("Title"));
		$fields->push(HtmlEditorField::create("HTML", "Content"));

		return $fields;
	}
}
