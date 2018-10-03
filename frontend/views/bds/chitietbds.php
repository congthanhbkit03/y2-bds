<?php 
use frontend\assets\AppAsset;
use frontend\models\Bds;
AppAsset::register($this);
$path = AppAsset::register($this)->baseUrl . '/uploads/';
?>
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"><?=$data['tieude']?></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<div class="content-area single-property" style="background-color: #FCFCFC;">
    <div class="container">

        <div class="clearfix padding-top-40">
            <div class="col-md-8 single-property-content ">
                <div class="row">
                    <div class="light-slide-item">            
                        <div class="clearfix">
                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i> 
                                </a>
                            </div> 

                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                            	<?php foreach ($listhinhanh as $hinhanh) {
                            	?>	
                            	
                                <li data-thumb="<?= $path . $hinhanh['hinhanh']?>"> 
                                    <img src="<?= $path . $hinhanh['hinhanh']?>" />
                                </li>
                                <?php } ?>
                                                                         
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="single-property-wrapper">
                    <div class="single-property-header">                                          
                        <h1 class="property-title pull-left"><?= $data['tieude']?></h1>
                        <span class="property-price pull-right"><?= $data['giaban']?></span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">   

                        <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-tag">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#FFA500" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"></path>
                                </svg>
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Status</span>
                                <span class="property-info-value">For Sale</span>
                            </span>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                <path class="meta-icon" fill="#FFA500" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                </svg>
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Diện tích</span>
                                <span class="property-info-value"><?=$data['dientich']?><b class="property-info-unit">m2</b></span>
                            </span>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                <path class="meta-icon" fill="#FFA500" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>
                                </svg>
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Số phòng ngủ</span>
                                <span class="property-info-value"><?=$data['sophongngu']?></span>
                            </span>
                        </div>

                        <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                <path class="meta-icon" fill="#FFA500" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"></path>
                                </svg>
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Số phòng tắm</span>
                                <span class="property-info-value"><?=$data['sophongtam']?></span>
                            </span>
                        </div>

                        


                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Chi tiết</h4>
                        <div class="s-property-content">
                            <p><?=$data['gioithieu']?></p>
                        </div>
                    </div>
                    <!-- End description area  -->

                    <div class="section additional-details">

                        <h4 class="s-property-title">Thông tin khác</h4>

                        <ul class="additional-details-list clearfix">
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Built In</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2003</span>
                            </li>
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2 Or More Spaces,Covered Parking,Valet Parking</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">View</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal View,Direct ew</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront Description:</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal Front,Ocean Access</span>
                            </li> 

                        </ul>
                    </div>  
                    <!-- End additional-details area  -->

                    <div class="section property-features">      

                        <h4 class="s-property-title">Features</h4>                            
                        <ul>
                            <li><a href="properties.html">Swimming Pool</a></li>   
                            <li><a href="properties.html">3 Stories</a></li>
                            <li><a href="properties.html">Central Cooling</a></li>
                            <li><a href="properties.html">Jog Path 2</a></li>
                            <li><a href="properties.html">2 Lawn</a></li>
                            <li><a href="properties.html">Bike Path</a></li>
                        </ul>

                    </div>
                    <!-- End features area  -->

                    <div class="section property-video"> 
                        <h4 class="s-property-title">Property Video</h4> 
                        <div class="video-thumb">
                            <a class="video-popup" href="yout" title="Virtual Tour">
                                <img src="assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">            
                            </a>
                        </div>
                    </div>
                    <!-- End video area  -->

                    <div class="section additional-details">

                        <h4 class="s-property-title">Bản đồ</h4>
                        <div id="map"></div>
                        <script>
                          function initMap() {

                            var lat = <?php if(isset($data['lat']))  echo $data['lat']; else echo 15.122936; ?>; 
                            var lng = <?php if(isset($data['lng']))  echo $data['lng']; else echo 108.804726; ?>; 

                            console.log('lat: ' + lat);
                            
                            var myLatlng = {lat: parseFloat(lat), lng: parseFloat(lng)};

                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 13,
                              center: myLatlng
                            });

                            var marker = new google.maps.Marker({
                              position: myLatlng,
                              map: map,
                              title: 'Click to zoom'
                            });

                            

                          }
                        </script>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p0">
                <aside class="sidebar sidebar-property blog-asside-right">
                    <div class="dealer-widget">
                        <div class="dealer-content">
                            <div class="inner-wrapper">

                                <div class="clear">
                                    <div class="col-xs-4 col-sm-4 dealer-face">
                                        <a href="">
                                            <img src="../img/client-face1.png" class="img-circle">
                                        </a>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 ">
                                        <h3 class="dealer-name">
                                            <a href="">Nathan James</a>
                                            <span>Real Estate Agent</span>        
                                        </h3>
                                        <div class="dealer-social-media">
                                            <a class="twitter" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="facebook" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="gplus" target="_blank" href="">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="linkedin" target="_blank" href="">
                                                <i class="fa fa-linkedin"></i>
                                            </a> 
                                            <a class="instagram" target="_blank" href="">
                                                <i class="fa fa-instagram"></i>
                                            </a>       
                                        </div>

                                    </div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">                                       
                                        <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                        <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                        <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                    </ul>
                                    <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sản phẩm cùng loại</h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                            <ul>
                                <?php 
                                    $lienquan = Bds::find()->asArray()->where('loai_id=:loaiid and id <> :id', ['loaiid'=>$data['loai_id'], 'id'=>$data['id']])->limit(5)->all();

                                    foreach ($lienquan as $lq) {
                                ?>
                                    <li>
                                        <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                            <a href="<?= Yii::$app->homeUrl?>bds/chitietbds?id=<?=$lq['id']?>"><img src="<?=$lq['avatar']?>"></a>
                                            <span class="property-seeker">
                                                <b class="b-1">A</b>
                                                <b class="b-2">S</b>
                                            </span>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                            <h6> <a href="<?= Yii::$app->homeUrl?>bds/chitietbds?id=<?=$lq['id']?>"><?=$lq['tieude']?></a></h6>
                                            <span class="property-price"><?=$lq['giaban']?> VND</span>
                                        </div>
                                    </li>
                                <?php        
                                    }
                                ?>
                                
                                

                            </ul>
                        </div>
                    </div>



                    <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quảng cáo</h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                            <img src="../img/ads.jpg">
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Tìm kiếm</h3>
                        </div>
                        <div class="panel-body search-widget">
                            <form action="<?= Yii::$app->homeUrl?>bds/search" class=" form-inline"> 
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" placeholder="Key word">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-6">

                                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                                <option>New york, CA</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> -Status- </option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>  

                                            </select>
                                        </div>

                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> -Status- </option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>  

                                            </select>
                                        </div>

                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> -Status- </option>
                                                <option>Rent </option>
                                                <option>Boy</option>
                                                <option>used</option>  

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                

                                <fieldset >
                                    <div class="row">
                                        <div class="col-xs-12">  
                                            <input class="button btn largesearch-btn" value="Search" type="submit">
                                        </div>  
                                    </div>
                                </fieldset>                                     
                            </form>
                        </div>
                    </div>


                </aside>
            </div>
        </div>

    </div>
</div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyC9OwKyQvKknY6joIiXwaIRR_VoS64LMPg
&callback=initMap">
</script>