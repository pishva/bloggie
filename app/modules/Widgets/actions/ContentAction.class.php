<?php

class Widgets_ContentAction extends BlogWidgetsBaseAction
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
		return 'Success';
	}
	public function executeRead(AgaviWebRequestDataHolder $rd)
	{
		$arr = array();
		$page = $rd->getParameter('page');
		$items = NewsSubjectQuery::create()->paginate($page,1);
		foreach ($items as $item) {
			$arr[] = $item->toArray();
		}
		$this->setAttribute('news', $arr);
		return 'Success';
	}
	
}

?>