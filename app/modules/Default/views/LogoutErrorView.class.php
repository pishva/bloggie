<?php

class Default_LogoutErrorView extends BlogDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting()->gen('cpanel');
		$this->getContainer()->getResponse()->setRedirect($url);
		$this->setAttribute('_title', 'Logout');
	}
}

?>