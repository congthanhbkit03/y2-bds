<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\AppAsset; 
use frontend\models\Bds;
use frontend\models\Loaibds;
use frontend\models\District;
use yii\helpers\ArrayHelper;
$hinhanh = AppAsset::register($this)->baseUrl . '/frontend/web/img';
?>
<div class="slider-area">
  <div class="slider">
      <div id="bg-slider" class="owl-carousel owl-theme">

          <div class="item"><img src="<?=$hinhanh?>/slide1/slider-image-1.jpg" alt="GTA V"></div>
          <div class="item"><img src="<?=$hinhanh?>/slide1/slider-image-2.jpg" alt="The Last of us"></div>
          <div class="item"><img src="<?=$hinhanh?>/slide1/slider-image-3.jpg" alt="GTA V"></div>
          <div class="item"><img src="<?=$hinhanh?>/slide1/slider-image-4.jpg" alt="GTA V"></div>

      </div>
  </div>
  <div class="slider-content">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
              <h2>Dễ dàng tìm được sản phẩm bất động sản!</h2>
              <p>BĐS Quảng Ngãi giúp bạn tìm kiếm sản phẩm bất động sản dễ dàng - Đồng thời giúp bạn đăng sản phẩm bất động sản của bạn một cách nhanh chóng, dễ dàng!</p>
              <div class="search-form wow pulse" data-wow-delay="0.8s">

                  <form action="<?= Yii::$app->homeUrl?>bds/search" method="post" class=" form-inline">
                      <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                      <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                      <div class="form-group">
                          <input type="text" class="form-control" name="txtSearch" placeholder="Key word">
                      </div>
                      <!-- <div class="form-group"> -->
                        <input type="hidden" name="txtTinh" id="" value="51">
                      <!-- </div> -->
                      <div class="form-group">    
                        <?php
                          $dataHuyen = District::find()->asArray()->where('provinceid=51')->all();
                          
                        ?>                              
                          <select id="slHuyen" name="slHuyen" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Chọn huyện">
                              <?php foreach ($dataHuyen as $huyen) { ?>

                                <option value="<?=$huyen['districtid']?>"><?=$huyen['name']?></option>
                              <?php } ?>
                              
                              
                          </select>
                      </div>
                      <div class="form-group">    
                          <?php $dataLoai = Loaibds::find()->asArray()->all(); ?>                                 
                          <select name = "slLoai" id="slLoai" class="selectpicker show-tick form-control" >
                              <option value=""> -Loại BĐS- </option>
                            <?php foreach ($dataLoai as $loai) { ?>
                              
                              <option value="<?=$loai['id']?>"><?=$loai['tenloai']?> </option>
                              
                            <?php } ?>
                          </select>
                      </div>
                      
                      <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                          

                </form>
            </div>
        </div>
    </div>
</div>
</div>