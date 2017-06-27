<?php

namespace yii2module\restapidoc\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii2lab\helpers\Helper;

class DefaultController extends Controller
{

	public function init()
	{
		Yii::$app->response->format = Response::FORMAT_HTML;
		parent::init();
	}
	
	public function actionIndex()
	{
		$this->layout = 'bootstrap';
		$versionList = Helper::getApiVersionList();
		return $this->render('list', ['versionList' => $versionList]);
	}
	
	public function actionView()
	{
		$this->layout = 'main';
		return $this->render('@frontend/web/doc/restapi/' . API_VERSION_STRING . '/index.html');
	}

}
