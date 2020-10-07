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

                <section class="page-header page-header-modern custom-page-header-style-1 bg-color-primary page-header-lg mb-0">
                    <div class="container container-lg py-5">
                        <div class="row">
                            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                                <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">News</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">News</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

<section class="section section-height-3 bg-color-transparent border-0 pb-0 m-0" style="background-image: url(img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: 112% 100%;">
                    
<div class="container">
<div class="row">
    <div class="mt-2 ml-auto">
        <form name="search" action="search.php" method="post">
            <div class="input-group mb-3 pb-1">
                <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="searchtitle" id="s" type="text">
                <span class="input-group-append">
                    <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="row justify-content-center pb-3 pt-4 mb-5">     
    <?php 
       if (isset($_GET['pageno'])) {
              $pageno = $_GET['pageno'];
          } else {
              $pageno = 1;
          }
          $no_of_records_per_page = 8;
          $offset = ($pageno-1) * $no_of_records_per_page;


          $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
          $result = mysqli_query($con,$total_pages_sql);
          $total_rows = mysqli_fetch_array($result)[0];
          $total_pages = ceil($total_rows / $no_of_records_per_page);


         $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
        if(mysqli_num_rows($query)>0){
        while ($row=mysqli_fetch_array($query)) {
          ?>
          <div
              class="col-md-7 col-lg-4 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <article class="card custom-post-style-1 border-0 shadow-lg">
                <header class="overlay overlay-show">
                  <img
                    class="img-fluid" style="height: 250px"
                    src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"
                  />
                  <h4
                    class="font-weight-bold text-6 position-absolute bottom-0 left-0 z-index-2 ml-4 mb-4 pb-2 pl-2 pr-5 mr-5"
                  >
                    <a
                      class="text-color-light text-decoration-none"
                      ><?php
                      $position=80;
                      $message=htmlentities($row['posttitle']);
                      $post_title=substr($message,0,$position); 
                      echo $post_title.' ...';
                      ?>
                      
                      </a
                    >
                  </h4>
                </header>
                <div class="card-body">
                  <ul
                    class="list list-unstyled custom-font-secondary pb-1 mb-2"
                  >
                    <li class="list-inline-item line-height-1 mr-1 mb-0">
                      <?php echo htmlentities($row['posttitle']);?>
                    </li>
                    <li class="list-inline-item line-height-1 mr-1 mb-0">          
                     Posted on
                        <?php 
                          $date= strtotime(htmlentities($row['postingdate']));
                          echo(date('F d, Y  h:i A',$date));
                        ?>
                     
                    </li>
                    <li class="list-inline-item line-height-1 mr-1 mb-0">
                      <a
                        href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"
                        class="text-color-primary font-weight-bold custom-text-size-1" style="text-decoration: none !important"
                        >Read More &rarr;
                      </a>
                    </li>
                  </ul>
                  <p class="custom-text-size-1 mb-2">
                    <b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> 
                  </p>
                  
                </div>
              </article>
          </div>
        <?php }
      }else{
        ?>
            <div
              class="col-md-7 col-lg-4 pr-lg-0 appear-animation"
              data-appear-animation="fadeInUpShorter"
              data-appear-animation-delay="450"
            >
              <p class="text-center">
                 No Record Found for Recent News
              </p>
            </div>
        <?php
      }
         ?>
          </div>
        </div>

        <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

    </section>

               
                
			</div>
<!--content ends here-->

<?php
  include("includes/footer.inc.php");
?>