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
		die(print_r($app->get('POST'),1));
		
		$cms_page = new CMS_PAGE($app->get('DB'));

		if(!($cms_page->findIf("title = '{$app->get('POST')['title']}'"))) {

			$values = array_merge( $app->get('POST'), 
				array(
					'filename' => md5($app->get('POST')['title']),
					'route' => '/'.strtolower($app->get('POST')['title'])
					)
				);
		
			$added = $cms_page->addNew($values);
			
			if($added) {
				if(!file_exists($app->get('UI')."website/".$values['filename'].".html"))
					$file = fopen($app->get('UI')."website/".$values['filename'].".html","w");
				else
					echo "The File already exists";
			}
			fclose($file);
		}
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