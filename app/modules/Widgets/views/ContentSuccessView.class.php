<?php

class Widgets_ContentSuccessView extends BlogWidgetsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Content');
	}
}

?>