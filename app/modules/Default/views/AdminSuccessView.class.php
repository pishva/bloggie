<?php

class Default_AdminSuccessView extends BlogDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Admin');
	}
}

?>