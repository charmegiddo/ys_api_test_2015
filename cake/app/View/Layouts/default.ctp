<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php /*echo $cakeDescription*/ ?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<?php echo $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>

	<script>
		$(function() {
		    // アップロードするファイルを選択
		    $('input[type=file]').change(function() {
		    var file = $(this).prop('files')[0];

		    // 画像以外は処理を停止
		    if (!file.type.match('image.*')) {
		        $('span').html('');
		       return;
		    }

		    // 画像表示
		    var reader = new FileReader();
		        reader.onload = function() {
		        var img_src = $('<img>').attr({'src': reader.result, 'height': '300px'});
		            $('parea').html(img_src);
		        };
		       reader.readAsDataURL(file);
		    });
		});
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>ようこそ</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
				<div id = "cake-powered">
					powered by hashimoto
				</div>
			<p>
				ようこそv1.02
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
