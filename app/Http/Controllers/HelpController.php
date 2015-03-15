<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HelpController extends BaseController {

	/**
	 * view表示前共通処理の実行
	 */
	public function actionBefore() {
		//拡張元actionBeforeの継承
		parent::actionBefore();
		//サイドメニューを非表示に切り替え
		$this->master_data['is_sidemenu'] = false;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array();
		$view = view('help', $data, $this->master_data);
		$this->actionAfter($view);

		return $view;
	}

}
