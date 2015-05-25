<?php

class SessiondatasMigration_0_54363f46d8362e1e91676a31bd59e6c018f9c098 extends MigrationBase {

	public $migrationIdx = "0";

	public $tableName = "sessiondatas";
	public $tableComment = "";
	public $tableEngine = "MyISAM";

	public static $migrationHash = "54363f46d8362e1e91676a31bd59e6c018f9c098";

	public function __construct(){
		$this->describes = array();
		$this->describes["uid"] = array();
		$this->describes["uid"]["type"] = "string";
		$this->describes["uid"]["null"] = FALSE;
		$this->describes["uid"]["pkey"] = TRUE;
		$this->describes["uid"]["length"] = "32";
		$this->describes["uid"]["autoincrement"] = FALSE;
		$this->describes["uid"]["comment"] = "user_idから算出したUID";
		$this->describes["data"] = array();
		$this->describes["data"]["type"] = "text";
		$this->describes["data"]["null"] = TRUE;
		$this->describes["data"]["pkey"] = FALSE;
		$this->describes["data"]["length"] = "65535";
		$this->describes["data"]["min-length"] = 1;
		$this->describes["data"]["autoincrement"] = FALSE;
		$this->describes["data"]["comment"] = "jsonシリアライズされたセッションデータ";
		$this->describes["modified"] = array();
		$this->describes["modified"]["type"] = "date";
		$this->describes["modified"]["null"] = FALSE;
		$this->describes["modified"]["pkey"] = FALSE;
		$this->describes["modified"]["min-length"] = 1;
		$this->describes["modified"]["autoincrement"] = FALSE;
		$this->describes["modified"]["comment"] = "変更日時";
		
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