<?php

class News_CreateAction extends BlogNewsBaseAction
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
	public function  isSecure()
	{
		return 'true';
	}
		public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		
		$name = $rd->getParameter('name');
		$short_desc = $rd->getParameter('short_desc');
		$prio = $rd->getParameter('prio');
		$desc = $rd->getParameter('desc');
		$is_desc = $rd->getparameter('is_desc');
		$category = $rd->getParameter('category');
		$newSubject = new NewsSubject();
		$newSubject->setName($name);
		$newSubject->setShortDesc($short_desc);
		$newSubject->setPrio($prio);
		$newSubject->setDesc($desc);
		$newSubject->setIsDesc($is_desc);
		
		$newSubject->setDate(date('d M Y',time()));
		$newSubject->save();
		
		return 'Success';
	}
}

?>