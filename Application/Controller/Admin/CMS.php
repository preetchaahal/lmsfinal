<?php

namespace Controller\Admin;

use \Controller\BaseController as Base;
use \Model\CMS_PAGE as CMS_PAGE;

class CMS implements Base {
	
	public function index($app)
	{
		$cms_page = new CMS_PAGE($app->get('DB'));
		$cms_pages = $cms_page->all();
		
		$app->set('DATA',$cms_pages);
		
		echo \Template::instance()->render('admin/cms/index.html');
	}
	public function showAddPage($app)
	{
		echo \Template::instance()->render('admin/cms/addPage.html');
	}
	public function addPage($app)
	{

		// convert spaces to dashes to be added to actual title
		// check if te same title with dashes exists
		// if exists append 1 or 2 or whatever
		// the title added should be added as alias
		// the route should also be same as the title.
		// the content of the page should be added to a new file. if no content then just create a file
		// save draft only save the page 
		// publish would display the page also
		
		$cms_page = new CMS_PAGE($app->get('DB'));

		$app->get('POST')['title'] = strtolower(str_replace(' ','-',$app->get('POST')['title']));

		if(!($cms_page->findIf("title = '{$app->get('POST')['title']}'"))) {

		// 	$values = array_merge( $app->get('POST'), 
		// 		array(
		// 			'filename' => md5($app->get('POST')['title']),
		// 			'route' => '/'.strtolower($app->get('POST')['title'])
		// 			)
		// 		);
		
		// 	$added = $cms_page->addNew($values);
			
		// 	if($added) {
		// 		if(!file_exists($app->get('UI')."website/".$values['filename'].".html"))
		// 			$file = fopen($app->get('UI')."website/".$values['filename'].".html","w");
		// 		else
		// 			echo "The File already exists";
		// 	}
		// 	fclose($file);
		// }
	}
	public function showEditForm($app)
	{
		$cms_page = new CMS_PAGE($app->get('DB'));
		$cms_pages = $cms_page->getById($app->get('PARAMS.id'));
		$app->set('DATA',$cms_pages[0]);

		$app->set('CMS_PAGE',\View::instance()->render('website/'.$app->get('DATA')['filename'].".html"));

		//echo $app->get('CMS_PAGE');

		echo \Template::instance()->render('admin/cms/editPage.html');
	}
	public function editPage($app)
	{
	// 	$cms_page = new CMS_PAGE($app->get('DB'));
	// 	$app->post	
	}
	public function deletePage()
	{
		$cms_page = new CMS_PAGE($app->get('DB'));
		$cms_page->delete();
	}
	public function updatePage($app)
	{
		$cms_page = new CMS_PAGE($app->get('DB'));
		$updated = $cms_page->updateStatus($app->get('PARAMS'));

		if($updated)
			$app->reroute('@admin_cms');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}