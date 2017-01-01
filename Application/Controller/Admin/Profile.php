<?php

namespace Controller\Admin;

use \Controller\BaseController as Base;
use \Model\Admin as Admin;

class Profile implements Base {

  public function index($app)
  {
    $admin = new Admin($app->get('DB'));
    $profile = $admin->getByUsername($app->get('SESSION.admin.user'));

    $data = array();
    $data['fullname'] = $profile->fullname;
    $data['username'] = $profile->username;
    $data['email'] = $profile->email;
    $data['image'] = $profile->image;

    $app->set('DATA', $data);

    echo \Template::instance()->render("admin/profile/index.html");
}
  public function __toString()
  {
    return __CLASS__;
  }
}
