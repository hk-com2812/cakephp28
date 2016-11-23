<?php

class HelloController extends AppController{
	public $name = 'Hello';
	public $uses = null;
	public $autoLayout = false;
	public $autoRender = true;

	public function index(){

	}


	public function other(){

		if($this->request->is('post')){

			$post = $this->request->data('txt');

			if($post != ''){
				$this->Flash->set('送信完了！！');
			}


			//viewへ値のセット
			$this->set('post',$post);


		}


		$this->redirect('/hello');

	}


}




?>