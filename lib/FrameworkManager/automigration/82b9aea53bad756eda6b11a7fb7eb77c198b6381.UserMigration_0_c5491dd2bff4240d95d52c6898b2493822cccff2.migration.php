<?php

class UserMigration_0_c5491dd2bff4240d95d52c6898b2493822cccff2 extends MigrationBase {

	public $migrationIdx = "0";

	public $tableName = "user";
	public $tableComment = "";
	public $tableEngine = "InnoDB";

	public static $migrationHash = "c5491dd2bff4240d95d52c6898b2493822cccff2";

	public function __construct(){
		$this->describes = array();
		$this->describes["id"] = array();
		$this->describes["id"]["type"] = "int";
		$this->describes["id"]["null"] = FALSE;
		$this->describes["id"]["pkey"] = TRUE;
		$this->describes["id"]["length"] = "10";
		$this->describes["id"]["min-length"] = 1;
		$this->describes["id"]["autoincrement"] = TRUE;
		$this->describes["id"]["comment"] = "pkey";
		$this->describes["name"] = array();
		$this->describes["name"]["type"] = "string";
		$this->describes["name"]["null"] = FALSE;
		$this->describes["name"]["pkey"] = FALSE;
		$this->describes["name"]["length"] = "1024";
		$this->describes["name"]["min-length"] = 1;
		$this->describes["name"]["autoincrement"] = FALSE;
		$this->describes["name"]["comment"] = "名前";
		$this->describes["mail"] = array();
		$this->describes["mail"]["type"] = "string";
		$this->describes["mail"]["null"] = FALSE;
		$this->describes["mail"]["pkey"] = FALSE;
		$this->describes["mail"]["length"] = "1024";
		$this->describes["mail"]["min-length"] = 1;
		$this->describes["mail"]["autoincrement"] = FALSE;
		$this->describes["mail"]["comment"] = "メールアドレス";
		$this->describes["pass"] = array();
		$this->describes["pass"]["type"] = "string";
		$this->describes["pass"]["null"] = FALSE;
		$this->describes["pass"]["pkey"] = FALSE;
		$this->describes["pass"]["length"] = "64";
		$this->describes["pass"]["min-length"] = 1;
		$this->describes["pass"]["autoincrement"] = FALSE;
		$this->describes["pass"]["comment"] = "パスワード(SHA256)";
		
		return;
	}

	public function up($argDBO){
		return $this->create($argDBO);
	}

	public function down($argDBO){
		return $this->drop($argDBO);
	}
}

?>