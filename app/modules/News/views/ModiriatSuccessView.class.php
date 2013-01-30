<?php

class News_ModiriatSuccessView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'c');
		
		$this->setAttribute('_title', 'Modiriat');
	}
}

?>