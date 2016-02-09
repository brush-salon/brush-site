<?
use yii\helpers\Url;
?>

<footer class="b-footer">
    <div class="b-footer__logo">
        <img src="<?=Url::to('@web/images/logo-gray.png')?>">
    </div>
    <div class="b-footer__copyright">  &#169; Brush. <?=date('Y')?></div>
    <div class="b-footer__social">
        <div class="i-row1 i-row1__vk"></div>
        <div class="i-row1 i-row1__inst"></div>
        <div class="i-row1 i-row1__fb"></div>
    </div>
</footer>