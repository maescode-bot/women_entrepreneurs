<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token

?>


<!DOCTYPE html>
<html>

<?php
    include("includes/header.inc.php");
 
	$pid=intval($_GET['nid']);
	$query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
	while ($row=mysqli_fetch_array($query)) {
 ?>

<!--content starts here-->
<div role="main" class="main">
        <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary mb-0">
                    <div class="container container-lg py-5">
                        <div class="row">
                            <div class="col-md-9 order-2 order-md-1 align-self-center p-static">
                                <h3 class="font-weight-extra-bold text-white appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="letter-spacing: 1px">
                                      <?php echo htmlentities($row['posttitle']);?>
                                </h3>

                            </div>
                            <div class="col-md-3 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <li><a href="index.php">Home</a></li>
                                    <li class=""><a href="news.php">News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </section>

                <section class="section bg-color-light position-relative border-0 py-3 m-0">
                    <div class="container container-lg my-5">
                        <div class="row">
                            <div class="col-lg-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                <article>
                                    <div class="card border-0 border-radius-0 mb-5">
                                        <div class="card-body p-0 z-index-1">
                                            <div class="post-image pb-4">
                                                <img class="card-img-top border-radius-0" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                                            </div>
                                            <h3>
                                            	<?php echo htmlentities($row['posttitle']);?>
                                            </h3>
         									<h4>
								              <b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |
								                <b>Sub Category : </b><?php echo htmlentities($row['subcategory']);?>
								            </h4>
                                            <p class="text-uppercase text-3 mb-3 text-color-default custom-font-secondary"><time pubdate datetime="2020-01-10">
		                        				Posted on
		                						<?php 
		                          				$date= strtotime(htmlentities($row['postingdate']));
		                          				echo(date('F d, Y  h:i A',$date));
		                    					?>
                                            </time>
                                            </p>
           
                            				<hr>
                                            <div class="card-body p-0">
                                                <p>
                                                	<?php 
														$pt=html_entity_decode($row['postdetails']);
														echo  (substr($pt,0));
													?>
                                                </p>

                                                <!-- AddThis Button BEGIN -->
                                                <div class="addthis_toolbox addthis_default_style ">
                                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                                    <a class="addthis_button_tweet"></a>
                                                    <a class="addthis_button_pinterest_pinit"></a>
                                                    <a class="addthis_counter addthis_pill_style"></a>
                                                </div>
                                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                                <!-- AddThis Button END -->
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                            <?php } ?>
                            <div class="col-lg-3 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <aside class="sidebar">
                                	<div class="py-1 clearfix">
                                		<hr class="my-2">
                                	</div>
                                	<div class="px-3 mt-4">
                                		<form name="search" action="search.php" method="post">
                                			<div class="input-group mb-3 pb-1">
                                				<input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="searchtitle" id="s" type="text">
                                				<span class="input-group-append">
                                					<button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                                				</span>
                                			</div>
                                		</form>
                                	</div>
                                	<div class="py-1 clearfix">
                                		<hr class="my-2">
                                	</div>
                                	<div class="px-3 mt-4">
                                		<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent News</h3>
                                		<div class="pb-2 mb-1">
                                			<?php
											$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 10");
											while ($row=mysqli_fetch_array($query)) {

											?>

                                			<a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none border-top">
                                				<?php echo htmlentities($row['posttitle']);?>
                                			</a>
                                			<?php } ?>
                                		</div>
                                	</div>
                                	<div class="py-1 clearfix">
                                		<hr class="my-2">
                                	</div>
                                	<div class="px-3 mt-4">
                                		<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">News Categories</h3>
                                		<ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                                		<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
										while($row=mysqli_fetch_array($query))
										{
										?>
                                		<li class="nav-item">
                                			<a class="nav-link bg-transparent border-0" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                                		</li>
                                		<?php } ?>	
                                		</ul>
                                	</div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
<!--content  ends here-->

<?php
  include("includes/footer.inc.php");
?>