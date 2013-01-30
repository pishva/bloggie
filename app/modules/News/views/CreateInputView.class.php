<?php

class News_CreateInputView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'c');
		
		$this->setAttribute('_title', 'Create');
	}
}

?>