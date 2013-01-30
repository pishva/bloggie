<?php

class News_EditSuccessView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Edit');
	}
}

?>