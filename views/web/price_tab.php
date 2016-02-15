<div id='<?=$gender?>PriceList' class="tab-pane fade <?=$active?'in active':''?> b-price-list">
    <?= $this->render( 'price_group', ['gender'=> $gender,'type'=>'hair'] ); ?>
    <?= $this->render( 'price_group', ['gender'=> $gender,'type'=>'nail'] ); ?>
</div>
