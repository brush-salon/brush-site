<section class="b-price">
    <div class="b-price-gender">
        <ul>
            <li data-target="#femalePriceList" class="tabController active">для нее</li>
            <li data-target="#malePriceList" class="tabController">для него</li>
            <li data-target="#childPriceList" class="tabController">для детей</li>
        </ul>
    </div>

    <div class="tab-content">
        <?= $this->render( 'price_tab', ['gender'=> 'female','active'=>true] ); ?>
        <?= $this->render( 'price_tab', ['gender'=> 'male','active'=>false] ); ?>
        <?= $this->render( 'price_tab', ['gender'=> 'child','active'=>false] ); ?>
    </div>
</section>