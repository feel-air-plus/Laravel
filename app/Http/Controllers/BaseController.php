<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseController extends Controller {

	protected $header_data   = array();
	protected $sidemenu_data = array();
	protected $footer_data   = array();
	protected $master_data   = array();

	public function __construct() {
		$this->actionBefore();
		
	}

	/**
	 * 画面読み込み時にコントローラのアクションより先に実行
	 * メタデータの設定とかログイン認証とか？
	 */
	public function actionBefore() {

		//master用データの生成
		$this->master_data = array(
			'title' => null,
			'h1'    => null,
			'is_header'   => TRUE,
			'is_sidemenu' => TRUE,
			'is_footer'   => TRUE,
		);

	}

	public function index()
	{

	}

	/**
	 * 各ControllerでView生成後に呼び出し
	 * →共通のヘッダーフッターを読み込む
	 * @param type $view コントローラで生成したView
	 */
	public function actionAfter($view) {

		//header用データの生成
		$this->header_data = array();
		//sidemenu用データの生成
		$this->sidemenu_data = array();
		//footer用データの生成
		$this->footer_data = array();

		//ヘッダーviewにデータを渡してviewを生成
		$view->nest('header','layouts.header', $this->header_data);
		//サイドメニューviewにデータを渡してviewを生成
		$view->nest('sidemenu','layouts.sidemenu', $this->sidemenu_data);
		//フッターviewにデータを渡してviewを生成
		$view->nest('footer','layouts.footer', $this->footer_data);

	}

}
