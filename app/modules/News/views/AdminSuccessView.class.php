<?php

class News_AdminSuccessView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'c');
		
		$this->setAttribute('_title', 'Admin');
	}
}

?>