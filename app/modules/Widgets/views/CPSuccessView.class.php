<?php

class Widgets_CPSuccessView extends BlogWidgetsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'CP');
	}
}

?>