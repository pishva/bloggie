<?php

class Default_LogoutSuccessView extends BlogDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting()->gen('login');
		$this->getContainer()->getResponse()->setRedirect($url);
		$this->setAttribute('_title', 'Logout');
	}
}

?>