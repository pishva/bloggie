<?php

class News_DisplaySuccessView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Display');
	}
}

?>