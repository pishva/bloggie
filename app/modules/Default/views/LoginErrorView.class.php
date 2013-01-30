<?php

class Default_LoginErrorView extends BlogDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$this->setAttribute('_title', 'Error');
	}
}

?>