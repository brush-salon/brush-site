<?
use yii\helpers\Url;


?>
<section class="b-menu-image">
    <div class="b-menu-image-row">
        <div class="b-menu-image-item">
            <a href='/about/'>
                <span class="b-menu-image-item__label">&#8212; о салоне &#8212;</span>
                <img src="<?=Url::to('@web/images/main/about.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='http://brush-salon.ru'  onclick="this.target='_blank';'">
                <span class="b-menu-image-item__label">&#8212; школа brush &#8212;</span>
                <img src="<?=Url::to('@web/images/main/school.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/price/'>
                <span class="b-menu-image-item__label">&#8212; цены &#8212;</span>
                <img src="<?=Url::to('@web/images/main/price.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/press/'>
                <span class="b-menu-image-item__label">&#8212; пресса о нас &#8212;</span>
                <img src="<?=Url::to('@web/images/main/press.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/spec/'>
                <span class="b-menu-image-item__label">&#8212; спецпредложения &#8212;</span>
                <img src="<?=Url::to('@web/images/main/deals.png')?>">
            </a>
        </div>
    </div>

    <div class="b-menu-image-row">
        <div class="b-menu-image-item">
            <a href='/typical/'>
                <img src="<?=Url::to('@web/images/main/hair.png')?>">
                <span class="b-menu-image-item__title">волосы</span>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/typical/'>
                <img src="<?=Url::to('@web/images/main/nails.png')?>">
                <span class="b-menu-image-item__title">ногти</span>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/typical/'>
                <img src="<?=Url::to('@web/images/main/makeup.png')?>">
                <span class="b-menu-image-item__title">брови & ресницы & макияж</span>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/typical/'>
                <img src="<?=Url::to('@web/images/main/depilation.png')?>">
                <span class="b-menu-image-item__title">косметология & эпиляция</span>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/typical/'>
                <img src="<?=Url::to('@web/images/main/permanent-makeup.png')?>">
                <span class="b-menu-image-item__title">пермаментный макияж</span>
            </a>
        </div>
    </div>
</section>
