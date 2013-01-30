<?php

class News_CreateErrorView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Create');
	}
}

?>