<?php

class News_CreateSuccessView extends BlogNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$ro = $this->getContext()->getRouting();
		$this->getContainer()->getResponse()->setRedirect($ro->gen('news.create'));
		
		$this->setAttribute('_title', 'Create');
	}
}

?>