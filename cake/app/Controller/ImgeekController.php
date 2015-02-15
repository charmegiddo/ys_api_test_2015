<?php
App::uses('Fashion','Model');

class ImgeekController extends AppController {

	public function index() {
		$this->set("title_for_layout","imgeek");
		$sample = array('type' => 'post','url' => 'show' );
		$this->set('alltest', $sample); //このようにsetすることで、viewsでも表示される。
	}

	public function post() {
		if($this->request->data['Post']['image']['name'] == "")
		{	
			$this->Session->setFlash('Fail. No image selected.');
			$this->render('index');
			return;
		}

		if ($this->request->is('post') || $this->request->is('put')) {
				$path = '/Library/WebServer/Documents/cake/app/tmp/img/compareimage';
				$image = $this->request->data['Post']['image'];
				$this->Session->setFlash('Success');
				move_uploaded_file($image['tmp_name'], $path);
			}else{
				$this->Session->setFlash('Fail');
				$this->render('index');
				return;
			}


		$this->Fashion = new Fashion();
		$hash = $rv = exec(TMP."image_analytics ".TMP."img/compareimage");
		$rv = $this->Fashion->getItem($rv);
		if (count($rv) != 1) {
			$this->Session->setFlash('No matches:'.$hash);
			$this->render('index');
			return;
		}

		$json = 'http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemLookup?appid=dj0zaiZpPVhDeW1hdFpzSENERyZzPWNvbnN1bWVyc2VjcmV0Jng9MWM-&image_size=600&itemcode='.$rv[0]['fashion']['fashion_itemcode'];
		$json = file_get_contents($json);
		$obj = json_decode($json);
		
		$json2 = 'http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemSearch?appid=dj0zaiZpPVhDeW1hdFpzSENERyZzPWNvbnN1bWVyc2VjcmV0Jng9MWM-&hits=3&store_id='.$rv[0]['fashion']['fashion_store_id'];
		$json2 = file_get_contents($json2);
		$obj2 = json_decode($json2);

		$vData = array('json' => $json , 'obj' => $obj, 'json2' => $json2, 'obj2' => $obj2 );
		$this->set('allData', $vData);
	}
}