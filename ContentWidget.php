<?php

/**
* Content Widget
*/
class ContentWidget extends Widget{
	
	static $db = array(
		"Title" => "Varchar(255)",
		"Html" => "HTMLText"
	);

	private static $title = null; //don't show a title for this widget by default
	private static $cmsTitle = "Content";
	private static $description = "Add a section of content to your page. Optionally add a title.";

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->push(TextField::create("Title"));
		$fields->push(HtmlEditorField::create("Html","Content"));
		return $fields;
	}

	function Title(){
		if($this->Title){
			return $this->Title;
		}
		return parent::Title();
	}

	function CMSTitle(){
		return $this->Title();
	}

}