<?php
  class Default_LoginAction extends BlogDefaultBaseAction
  {
    /**
     * Returns the default view if the action does not serve the request
     * method used.
     *
     * @return     mixed <ul>
     *                     <li>A string containing the view name associated
     *                     with this action; or</li>
     *                     <li>An array with two indices: the parent module
     *                     of the view to be executed and the view to be
     *                     executed.</li>
     *                   </ul>
     */
    public function getDefaultViewName()
    {
      return 'Input';
    }
  
  	public function executeWrite(AgaviRequestDataHolder $rd)
    {
    	$u = $rd->getParameter('username');
    	$p = $rd->getParameter('password');
    	$f = UsernameQuery::create()->filterByUname($u)->filterByPassword($p)->find();
    	
    	if (count($f) == 1) {
    		$this->getContext()->getUser()->setAuthenticated(true);
    		$this->getContext()->getUser()->revokeAllRoles();
    		$access = UserAccessQuery::create()->filterByUsername($f)->find();
    		foreach ($access as $a) {
    			$this->getContext()->getUser()->grantRole($a->getAccess());
    		}
    		return 'Success';
    	} else {
    		return 'Error';
    	}
      
    }
    public function handleError($rd)
    {
    	return 'Input';
    	
    }
  }

  ?>
