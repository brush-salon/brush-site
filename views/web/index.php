<?
use yii\helpers\Url;
?>
<section class="b-menu-image">
    <div class="b-menu-image-row  hidden-xs">
        <div class="b-menu-image-item">
            <a href='/web//about/'>
                <span class="b-menu-image-item__label">&#8212; о салоне &#8212;</span>
                <img src="<?=Url::to('@web/images/main/about.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='http://brush-salon.ru' onclick="this.target='_blank';'">
                <span class="b-menu-image-item__label">&#8212; школа brush &#8212;</span>
                <img src="<?=Url::to('@web/images/main/school.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/price/'>
                <span class="b-menu-image-item__label">&#8212; цены &#8212;</span>
                <img src="<?=Url::to('@web/images/main/price.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/press/'>
                <span class="b-menu-image-item__label">&#8212; пресса о нас &#8212;</span>
                <img src="<?=Url::to('@web/images/main/press.png')?>">
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/spec/'>
                <span class="b-menu-image-item__label">&#8212; спецпредложения &#8212;</span>
                <img src="<?=Url::to('@web/images/main/deals.png')?>">
            </a>
        </div>
    </div>

    <div class="b-menu-image-row">
        <div class="b-menu-image-item">
            <a href='/web/typical/'>
                <div class="b-menu-image-item__img b-menu-image-item__img_hair"></div>
                <div class="b-menu-image-item__title">
                    <span class="title">волосы</span>
                </div>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/typical/'>
                <div class="b-menu-image-item__img b-menu-image-item__img_nails"></div>
                <div class="b-menu-image-item__title">
                    <span class="title">ногти</span>
                </div>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/typical/'>
                <div class="b-menu-image-item__img b-menu-image-item__img_makeup"></div>
                <div class="b-menu-image-item__title">
                    <span class="title">брови & ресницы & макияж</span>
                </div>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/typical/'>
                <div class="b-menu-image-item__img b-menu-image-item__img_depilation"></div>
                <div class="b-menu-image-item__title">
                    <span class="title">косметология & эпиляция</span>
                </div>
            </a>
        </div>
        <div class="b-menu-image-item">
            <a href='/web/typical/'>
                <div class="b-menu-image-item__img b-menu-image-item__img_permanent-makeup"></div>
                <div class="b-menu-image-item__title">
                    <span class="title">пермаментный макияж</span>
                </div>
            </a>
        </div>
    </div>
</section>
