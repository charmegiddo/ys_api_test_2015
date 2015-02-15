<h1>いま何時？</h1>
<?php
   //createでフォームを宣言
   echo $this->Form->create('Aisatsu',array('type' => 'post','url' => 'show' ));
   //inputでフォーム作成。type属性を指定すればいろいろなフォームが作れる。無指定だとtextになる。
   echo $this->Form->input('Aisatsu.zikan',array('label' => '時間'));
   //submitボタン作成
   echo $this->Form->submit();
   //フォーム宣言終わり。書かなくてもいい。
   echo $this->Form->end();



    echo $this->Form->create('Post', array('type'=>'file', 'url' => '/uploadmulti', 'enctype' => 'multipart/form-data'));
    echo $this->Form->input('Post.image', array('type' => 'file', 'multiple'));
    echo $this->Form->submit('Search', array('name' => 'submit'));
    echo $this->Form->end();

?>