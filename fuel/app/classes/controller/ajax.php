<?php

use Fuel\Core\Input;
class Controller_Ajax extends Controller_Rest
{
	const NICO_SEARCH_KEYWORD	= 'search_keyword';
	const NICO_SEARCH_TAG		= 'search_tag';
	const NICO_ISSURE			= 'ニコニコ動画アプリ';
	
	private $nicoServiceVideo = array('video');
	private $nicoJoinField = array(
		'cmsid',			// 動画ID
		'title',			// 動画のタイトル
		'description',		// 動画の説明文
		'tags',				// 動画のタグ
		'start_time',		// 動画の投稿日時
		'thumbnail_url',	// 動画のサムネイルURL
		'view_counter',		// 再生数
		'comment_counter',	// コメント数
		'mylist_counter',	// マイリスト数
		'last_res_body',	// 直近のコメント
		'length_seconds',	// 動画の再生時間(秒)
	);
	
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function get_tv_list() {
		$request = Input::get();
		if ($request['search'] == self::NICO_SEARCH_KEYWORD) {
			$search = array('title', 'description', 'tags');
		} else if ($request['search'] == self::NICO_SEARCH_TAG) {
			$search = array('tags_exact');
		}
		
		$params = array(
			'result' => true,
			'query'		=> $request['query'],	// 検索キーワード
			'service'	=> $this->nicoServiceVideo,	// 検索対象サービスリスト
			'search'	=> $search,	// 検索対象フィールドリスト
			'join'		=> $this->nicoJoinField,	// 取得対象フィールドリスト
			'filters'	=> $request['filters'],	// フィルタ指定リスト(オプション)
			'sort_by'	=> $request['sort_by'],	// 並べ替えフィールド名(オプション)
			'order'		=> $request['order'],	// 並べ替え順序 "desc" もしくは "asc"(オプション、デフォルト: "desc")
			'from'		=> $request['from'],	// N (数値指定、オプション、デフォルト: 0)
			'size'		=> $request['size'],	// M (数値指定、オプション、デフォルト: 10, 最大: 100)
			'issuer'	=> self::NICO_ISSURE,	// サービス/アプリケーション名 (最大: 40文字)
// 			'genre'		=> $request['genre'],
		);
		$json = json_encode($params);
		
		return $this->response(array($json), 200);
	}
}