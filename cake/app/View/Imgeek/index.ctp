<h1>ショッピング検索！</h1>
 <hr>
<?php
	echo $this->Form->create('Post', array('type'=>'file', 'url' => '/imgeek/post', 'enctype' => 'multipart/form-data'));
	echo $this->Form->input('Post.image', array('type' => 'file', 'label' => 'どの画像にする？'));
?>
	<parea></parea>
<?php
	echo $this->Form->submit('Search!', array('name' => 'submit'));
	echo $this->Form->end();
?>

<?php
/*
	//createでフォームを宣言
	echo $this->Form->create('Aisatsu',array('type' => 'post','url' => 'show' ));
	//inputでフォーム作成。type属性を指定すればいろいろなフォームが作れる。無指定だとtextになる。
	echo $this->Form->input('Aisatsu.zikan',array('label' => '時間'));
	//submitボタン作成
	echo $this->Form->submit();
	//フォーム宣言終わり。書かなくてもいい。
	echo $this->Form->end();
	foreach($alltest as $val){
	echo $val;
	echo "<br />";
	}
	*/
?>
