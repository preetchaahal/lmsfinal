<?php

/**
***	Website Routes
**/
$app->route("GET @index:	/",			"Controller\Guest\Website->index");
$app->route("GET @about: 	/about",	"Controller\Guest\Website->about");
$app->route("GET @courses:	/courses",	"Controller\Guest\Website->courses");
$app->route("GET @fees: 	/fees",		"Controller\Guest\Website->fees");
$app->route("GET @contact:	/contact",	"Controller\Guest\Website->contact");
/*-------------------------------------------------------*/