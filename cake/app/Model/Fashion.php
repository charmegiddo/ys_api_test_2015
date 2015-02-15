<?php
App::uses('AppModel','Model');

	class Fashion extends AppModel {
		public $useTable = 'fashion';
		public function getItem($hash){
			$sql = "SELECT * FROM fashion WHERE fashion_hash = :hash;";
			$params = array('hash' => $hash);
			$data = $this->query($sql,$params);
			return $data;
		}
	}
?>