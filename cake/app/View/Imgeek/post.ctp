<h2>これだよね！</h2>
<?php echo $allData['obj']->{'ResultSet'}->{'0'}->{'Result'}->{'0'}->{'Name'}; ?>
</br>
<img src="<?php echo $allData['obj']->{'ResultSet'}->{'0'}->{'Result'}->{'0'}->{'ExImage'}->{'Url'};?>" alt="url">
</br>
<a href="<?php echo $allData['obj']->{'ResultSet'}->{'0'}->{'Result'}->{'0'}->{'Url'}; ?>" target="_blank">服を店舗に観に行く</a>
</br>
価格：
¥<?php echo $allData['obj']->{'ResultSet'}->{'0'}->{'Result'}->{'0'}->{'Price'}->{'_value'}; ?>

</br>
</br>
</br>
<h2>もしかして好み？</h2>
</br>
<hr>
<?php for ($i = 0; $i < 3; $i++) { ?>

<?php echo $allData['obj2']->{'ResultSet'}->{'0'}->{'Result'}->{$i}->{'Name'}; ?>
</br>
<img src="<?php echo $allData['obj2']->{'ResultSet'}->{'0'}->{'Result'}->{$i}->{'Image'}->{'Small'};?>" alt="url">
</br>
<a href="<?php echo $allData['obj2']->{'ResultSet'}->{'0'}->{'Result'}->{$i}->{'Url'}; ?>" target="_blank">服を店舗に観に行く</a>
</br>
¥<?php echo $allData['obj2']->{'ResultSet'}->{'0'}->{'Result'}->{$i}->{'Price'}->{'_value'}; ?>
<hr>
<?php }?>
<hr>
<a href="../imgeek">戻る</a>