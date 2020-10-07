<?php 
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html>

<?php
    include("includes/header.inc.php");
 ?>

<!--content starts here-->
<div role="main" class="main">

                <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0 custom-section-full-width">
                    <div class="container container-lg py-5">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Gallery</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Gallery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-height-3 bg-color-transparent border-0 pb-0 m-0" style="background-image: url(img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: 112% 100%;">
                    <div class="container">
                        <h1 class="align-center">Women Entrepreneurs and Professionals Development Network</h1>
                        <div class="mt-5">
                                <hr>
                                <h2
                                      class="font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
                                      data-appear-animation="maskDown"
                                      data-appear-animation-delay="500"
                                    >
                                      Seminar
                                    </h2><br>
                            </div>
                        <div class="gallery">
                            <a href="images/gallery/gal_7.jpg" class="big"><img src="images/gallery/gal_7.jpg" alt="" title="Women Entrepreneurs and Professionals Development Network"/></a>
                            <a href="images/gallery/gal_2.jpg" class="big"><img src="images/gallery/gal_2.jpg" alt="" title="Women Entrepreneurs and Professionals Development Network"/></a>
                            <a href="images/gallery/gal_3.jpg" class="big"><img src="images/gallery/gal_3.jpg" alt="" title="Women Entrepreneurs and Professionals Development Network"/></a>
                           <a href="images/gallery/gal_6.jpg" class="big"><img src="images/gallery/gal_6.jpg" alt="" title="Women Entrepreneurs and Professionals Development Network"/></a>
                            <a href="images/gallery/gal_4.jpg" class="big"><img src="images/gallery/gal_4.jpg" alt="" title="Women Entrepreneurs and Professionals Development Network"/></a>
                            <a href="images/gallery/gal_5.jpg" class="big"><img src="images/gallery/gal_5.jpg" alt="" title="Women Entrepreneurs and Professionals Development Network"/></a>
                            <div class="clear"></div>
                        </div>
                    
                        <div class="gallery">
                            <div class="mt-5">
                                <hr>
                                <h2
                                      class="font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
                                      data-appear-animation="maskDown"
                                      data-appear-animation-delay="500"
                                    >
                                      Operation Team Members
                                    </h2><br>
                            </div>
                            <a href="images/executive/Mrs Afi Ibanga Pic.jpg" class="big"><img src="images/executive/Mrs Afi Ibanga Pic.jpg" alt="" title="Mrs Afi Ibanga"/></a>

                            <a href="images/executive/Chief Mrs Anita Okuribido.jpg" class="big"><img src="images/executive/Chief Mrs Anita Okuribido.jpg" alt="" title="Chief Mrs Anita Okuribido"/></a>

                            <a href="images/executive/Hajia Bola Muse.jpg" class="big"><img src="images/executive/Hajia Bola Muse.jpg" alt="" title="Hajia Bola Muse"/></a>

                            <div class="clear"></div>
                            <p><a href="women_entrepreneurs_excos.php" class="btn btn-primary p-3">View All Members</a></p>
                        </div>

                       
    
                        <div class="gallery mb-5">
                        <div class="mt-5">
                            <hr>
                            <h2
                                  class="font-weight-bold text-center text-8 line-height-2 mb-0 appear-animation"
                                  data-appear-animation="maskDown"
                                  data-appear-animation-delay="500"
                                >
                                  Recent Pictures
                                </h2><br>
                        </div>
                        <?php
                           $query=mysqli_query($con,"select * from tblphotos where Is_Active=1 order by PostingDate desc");
                          if(mysqli_num_rows($query)>0){
                            while ($row=mysqli_fetch_array($query)) {
                              ?>
                         <a href="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" class="big"><img src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>" title="<?php echo htmlentities($row['PostTitle']);?>" style="width: 250px;"/>
                        </a>

                        <?php } }else{
                          ?>
                            <div
                              class="col-12 pr-lg-0 appear-animation"
                              data-appear-animation="fadeInUpShorter"
                              data-appear-animation-delay="450"
                            >
                              <p class="text-center">
                                 No Record Found for Recent Pictures
                              </p>
                            </div>
                          <?php

                        } ?>

                                        
                         </div>
                                                        
 </section>

               
                
</div>
<!--content ends here-->
<script src="dist/simple-lightbox.js?v2.2.1"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>

<?php
  include("includes/footer.inc.php");
?>