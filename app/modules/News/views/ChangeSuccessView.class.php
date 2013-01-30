<?php

class News_ChangeSuccessView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'c');
		
		$this->setAttribute('_title', 'Change');
	}
}

?>