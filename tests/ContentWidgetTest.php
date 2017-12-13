<?php

namespace SilverStripe\ContentWidget\Tests;

use SilverStripe\ContentWidget\ContentWidget;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class ContentWidgetTest extends SapphireTest
{
    public function testHasTitleAndHtmlEditorField()
    {
        $widget = new ContentWidget;

        $fields = $widget->getCMSFields();

        $this->assertInstanceOf(TextField::class, $fields->fieldByName('Title'));
        $this->assertInstanceOf(HTMLEditorField::class, $fields->fieldByName('HTML'));
    }
}
