<?php

// indigo config
return array(
	// POST
	'_POST' => $_POST,

	// GET
	'_GET' => $_GET,

	// indigo作業用ディレクトリ（絶対パス）
	'realpath_workdir' => __DIR__.'/../../../px-files/_sys/ram/data/indigo/',

	// リソースディレクトリ（ドキュメントルートからの相対パス）
	'relativepath_resourcedir'	=> './index_files/indigo/',

	// ajax呼出クラス（ドキュメントルートからの相対パス）
	'realpath_ajax_call' => './index_files/php/ajax.php',
	
	// 画面表示上のタイムゾーン
	'time_zone' => 'Asia/Tokyo',

	// ユーザID
	'user_id' => 'admin',

	// DB設定
	'db' => array(

		// 'mysql' or null（nullの場合はSQLite3を使用）　※バージョン0.1.0時点ではmysql未対応
		'db_type' => null,

		// 以下mysql用の設定項目
		'mysql_db_name' => '',
		'mysql_db_host' => '',
		'mysql_db_user' => '',
		'mysql_db_pass' => ''
	),

	// 予約最大件数
	'max_reserve_record' => 10,

	// バックアップ世代管理件数　※バージョン0.1.0時点では未対応
	'max_backup_generation' => 5,

	// 本番環境パス（同期先）※バージョン0.1.0時点では先頭の設定内容のみ有効
	'server' => array(
			array(
					// 任意の名前
					'name' => 'www1',
					// 同期先絶対パス
					'real_path' => __DIR__.'/../../../px-files/sites/honbanProject/'
			),
	),

	// 同期除外ディレクトリ、またはファイル
	'ignore' => array(
		'.git',
		'.htaccess'
	),

	// Git情報定義
	'git' => array(

		// Gitリポジトリのurl（現在はhttpsプロトコルのみ対応）
		'giturl' => 'https://github.com/pickles2/lib-plum.git',

		// ユーザ名
		// Gitリポジトリのユーザ名を設定
		'username' => null,

		// パスワード
		// Gitリポジトリのパスワードを設定
		'password' => null
	)
);
