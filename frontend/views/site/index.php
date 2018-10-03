<?php 
// use frontend\assets\AppAsset; 
use frontend\models\Bds;
use frontend\widgets\TrangchusearchWidget;
use frontend\widgets\TrangchuwelcomeWidget;
// $hinhanh = AppAsset::register($this)->baseUrl . '/frontend/web/img';
?>

<?= TrangchusearchWidget::widget() ?>

<?php foreach ($dataloai as $loai) {?>    

<!-- property area -->
<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2><?=$loai['tenloai']?></h2>
                <p><?=$loai['mota']?></p>
            </div>
        </div>

        <div class="row">
            <div class="proerty-th">
            <?php 
                $loaibdsid = $loai['id'];
                $bds = new Bds();
                $listbds = $bds->getBdsForIndex($loaibdsid);

                foreach ($listbds as $bds) { ?>
                
            
                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="<?= Yii::$app->homeUrl?>bds/chitietbds?id=<?=$bds['id']?>" ><img src="<?=$bds['avatar']?>"></a>
                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="property-1.html" ><?=$bds['tieude']?></a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Diện tích :</b> <?=$bds['dientich']?> </span>
                            <span class="proerty-price pull-right"> <?=$bds['giaban']?>VND</span>
                        </div>
                    </div>
                </div>
            <?php } ?>    
                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-tree more-proerty text-center">
                        <div class="item-tree-icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <div class="more-entry overflow">
                            <h5><a href="property-1.html" >CAN'T DECIDE ? </a></h5>
                            <h5 class="tree-sub-ttl">Show all properties</h5>
                            <button class="btn border-btn more-black" value="All properties">All properties</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php } ?>

<?= TrangchuwelcomeWidget::widget() ?>

