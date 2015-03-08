<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class OtoiawaseController extends BaseController {

	/**
	 * view表示前共通処理の実行
	 */
	public function actionBefore() {
		//拡張元actionBeforeの継承
		parent::actionBefore();
		//サイドメニューを非表示に切り替え
		$this->master_data['is_sidemenu'] = FALSE;
	}

	/**
	 * 入力画面の表示
	 * @return view
	 */
	public function getIndex()
	{
		$data = array();
		//共通viewのデータを持たせた入力画面を取得
		$view = view('otoiawase.index', $data, $this->master_data);
		//共通viewを読み込む　必要なデータがあれば事前にデータを持たせておく
		$this->actionAfter($view);

		return $view;
	}

	/**
	 * 確認画面の表示
	 * @param Requests $request Form送信時のリクエストがオブジェクトでRequestクラスに保持されている
	 * @return view
	 */
	public function postConfirm(Request $request)
	{
		//バリデーションの実行

		//バリデーションにかかった場合はデータを持たせて入力画面にリダイレクトする

		//バリデーションにかからなかった場合は確認画面に遷移する
		//Viewに持たせるデータを用意
		$data = array(
			'name'    => $request->name,
			'email'   => $request->email,
			'subject' => $request->subject,
			'body'    => $request->body,
		);

		$view = view('otoiawase.confirm', $data, $this->master_data);
		$this->actionAfter($view);

		return $view;
	}

	/**
	 * 完了画面の表示
	 * フラグによって成否のメッセージ振り分け
	 * @return view
	 */
	public function postComplete(Request $request)
	{
		$data = array();

		//確認画面でBackが押された場合
		if(\Input::get('back')){
			//入力画面に入力内容を持たせてリダイレクトする
			return \Redirect::to('otoiawase/index')->withInput();
		}

		//確認画面でSend押された場合
		if(\Input::get('send')){
			$data = array(
				'name'    => $request->name,
				'email'   => $request->email,
				'subject' => $request->subject,
				'body'    => $request->body,
			);
			//データを保存
			//
			//メールを送信
			Mail::queue( 'emails.otoiawase', $data, function ($e)
			{
				$e->to(\Config::get('const.MAIL_OTOIAWASE'), '')
				->from(\Config::get('const.MAIL_OTOIAWASE'), \Config::get('const.MAIL_OTOIAWASE'))
				->subject('お問い合わせ');
			});
		}

		$view = view('otoiawase.complete', $data, $this->master_data);
		$this->actionAfter($view);

		return $view;
	}

	/**
	 * お問い合わせ内容のlog保存
	 * @param Requests $request
	 * @return bool
	 */
	private function registMaildata(Request $request)
	{
		$isSuccsess = false;

		return $isSuccsess;
	}

}
