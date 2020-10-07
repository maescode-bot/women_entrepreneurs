<?php 
session_start();
include('includes/config.php');

?>

<?php
    $name=$email=$phone=$organisation=$designation=$address=$name_of_business=$website=$register=$sector=$agree="";
    $name_err=$email_err=$phone_err=$organisation_err=$designation_err=$address_err=$name_of_business_err=$website_err=$register_err=$sector_err=$agree_err="";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $organisation=$_POST['organisation'];
    $designation=$_POST['designation'];
    $address=$_POST['address'];
    $name_of_business=$_POST['name_of_business'];
    $website=$_POST['website'];
    $register=$_POST['register'];
    $sector=$_POST['sector'];
   
    function sanitize($input){
      $input=trim($input);
      $input=htmlspecialchars($input);
      $input=stripslashes($input);
      return $input;
    }

    $name=sanitize($name);
    $email=sanitize($email);
    $phone=sanitize($phone);
    $organisation= sanitize($organisation);
    $designation= sanitize($designation);
    $address = sanitize($address);
    $name_of_business= sanitize($name_of_business);
    $website= sanitize($website);
    $register=sanitize($register);
    $sector=sanitize($sector);
  
    (!filter_var($name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s.'',]+$/")))) ? $name_err="Input a valid Name" : $name=$name;


    (strlen($phone)<>11 and is_numeric($phone) !== true) ? $phone_err="Input valid phone number": $phone=$phone;   

    if(
      empty($name_err) && empty($email_err) && empty($phone_err) && empty($organisation_err) &&empty($designation_err) && empty($address_err) && empty($name_of_business_err) && empty($website_err) && empty($register_err) && empty($sector_err)
    ){

    $sql= "INSERT INTO members (name, email, phone, organization, designation, address, name_of_business, website, registered, sector) VALUES(?, ?,?,?,?,?,?,?,?,?)";
      $stmt=mysqli_prepare($con, $sql);

      if($stmt){
        mysqli_stmt_bind_param($stmt, 
                                "ssssssssss", 
                                 $param_name,
                                 $param_email, 
                                 $param_phone, 
                                 $param_organisation,
                                 $param_designation,
                                 $param_address,
                                 $param_name_of_business,
                                 $param_website, 
                                 $param_register,
                                 $param_sector
                               );

         $param_name=$name;
         $param_email=$email;
         $param_phone=$phone;
         $param_organisation=$organisation;
         $param_designation=$designation; 
         $param_address=$address;
         $param_name_of_business=$name_of_business;
         $param_website=$website;
         $param_register=$register;
         $param_sector=$sector;

         
         if(mysqli_stmt_execute($stmt)){
            $_SESSION['alert']="Registration is successful";
            header("location: payment_page.php");
         }
         else{
                $alert= "Something went wrong. Please try again later.";
            }
         
      }
     mysqli_stmt_close($stmt);
  }
  mysqli_close($con);   
}

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
                                <h1 class="font-weight-extra-bold text-14 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Join Us</h1>
                            </div>
                            <div class="col-md-4 order-1 order-md-2 align-self-center">
                                <ul class="breadcrumb d-block text-md-right breadcrumb-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Join us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-height-3 bg-color-transparent border-0 pb-0 m-0" style="background-image: url(img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: 112% 100%;">
                    <div class="col-lg-12 order-1 order-lg-2">
                             <div class="container text-center mx-auto">
                                 <h3>WOMEN ENTREPRENEURS AND PROFESSIONALS DEVELOPMENT NETWORK <br> REGISTRATION FORM</h3>
                             </div>
                          <div class="w-50 mx-auto">
                            <?php
                              if(!empty($alert)){
                              ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                   <p class="text-center text-white">
                                     <b><?=$alert?></b>
                                   </p>
                                </div>
                              <?php
                              }
                             ?>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-9">
                                    <div class="featured-box featured-box-primary text-left mt-0" style="width: 90%">
                                        <div class="box-content">
                                            <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
                                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" id="frmSignUp" method="post" class="needs-validation">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Name (Surname First)  <span class="text-danger">*</span></label>
                                                        <input type="text" value="<?=$name;?>" class="form-control form-control-lg" name="name" placeholder="Surname,  Firstname   Middlename" required>
                                                        <span class="text-danger"><?=$name_err?></span>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">E-mail Address  <span class="text-danger">*</span></label>
                                                        <input type="email" value="<?=$email;?>" class="form-control form-control-lg" name="email" placeholder="example@email.com" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Phone Number  <span class="text-danger">*</span></label>
                                                        <input type="tel" value="<?=$phone;?>" class="form-control form-control-lg" name="phone" placeholder="08023456789" required>
                                                        <span class="text-danger"><?=$phone_err?></span>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Organization/ Company  <span class="text-danger">*</span></label>
                                                        <input type="text" value="<?=$organisation;?>" class="form-control form-control-lg" name="organisation" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Designation  <span class="text-danger">*</span></label>
                                                        <input type="text" value="<?=$designation;?>" class="form-control form-control-lg" name="designation" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Business Address  <span class="text-danger">*</span></label>
                                                        <input type="text" value="<?=$address?>" class="form-control form-control-lg" name="address" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Name of Business (What you do?)
                                                        <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" value="<?=$name_of_business;?>" class="form-control form-control-lg" name="name_of_business" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Website URL (e.g https://www.wentrepreneursnetwork.org)
                                                        <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="url" value="<?=$website;?>" class="form-control form-control-lg" name="website" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">Is your Business registered?
                                                         <span class="text-danger">*</span>
                                                        </label>
                                                        <br>
                                                        <label class="form-check-label">
                                                          <input class="" type="radio" name="register" value="yes" <?php echo (isset($register) and $register==='yes')? 'checked':'' ?>> Yes
                                                        </label>
                                                        &nbsp;
                                                        <label class="form-check-label">
                                                          <input class="" type="radio" name="register" value="no" <?php echo (isset($register) and $register==='no')? 'checked':'' ?>> No
                                                        </label>
                                                         &nbsp;
                                                        <label class="form-check-label">
                                                          <input class="" type="radio" name="register" value="in progress" <?php echo (isset($register) and $register==='in progress')? 'checked':'' ?>> In Progress
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label class="font-weight-bold text-dark text-2">What Sector do you belong to?
                                                        <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="sector" id="sector" class="form-control">
                                                          <option value="">SELECT SECTOR YOU BELONG TO
                                                          </option>

                                                          <option value="TRADES AND MISSIONS SECTOR"
                                                          <?php echo (isset($sector) and $sector==="TRADES AND MISSIONS SECTOR")? 'selected':'' ?>
                                                          >TRADES AND MISSIONS SECTOR
                                                          </option>

                                                          <option value="CULTURE AND TOURISM SECTOR"
                                                          <?php echo (isset($sector) and $sector==="CULTURE AND TOURISM SECTOR")? 'selected':'' ?>
                                                          >CULTURE AND TOURISM SECTOR</option>

                                                          <option value="EXPORT SECTOR"
                                                           <?php echo (isset($sector) and $sector==="EXPORT SECTOR") ? 'selected':'' ?>
                                                          >
                                                          EXPORT SECTOR</option>

                                                          <option value="AGRO COMMODITY SECTOR" <?php echo (isset($sector) and $sector==="AGRO COMMODITY SECTOR")? 'selected':'' ?>
                                                          >
                                                          AGRO COMMODITY SECTOR
                                                        </option>

                                                          <option value="REAL ESTATE AND CONSTRUCTION"
                                                          <?php echo (isset($sector) and $sector==="REAL ESTATE AND CONSTRUCTION")? 'selected':'' ?>>
                                                          REAL ESTATE AND CONSTRUCTION</option>

                                                          <option value="ENERGY TRADE SECTOR"
                                                          <?php echo (isset($sector) and $sector==="ENERGY TRADE SECTOR")? 'selected':'' ?>>ENERGY TRADE SECTOR</option>

                                                          <option value="TEXTILES AND APPAREL"
                                                          <?php echo (isset($sector) and $sector==="TEXTILES AND APPAREL")? 'selected':'' ?>>
                                                          TEXTILES AND APPAREL</option>

                                                          <option value="MARITIME SECTOR" <?php echo (isset($sector) and $sector==="MARITIME SECTOR")? 'selected':'' ?>>
                                                          MARITIME SECTOR</option>

                                                          <option value="PHARMACEUTICAL AND BEAUTY SECTOR" <?php echo (isset($sector) and $sector==="PHARMACEUTICAL AND BEAUTY SECTOR")? 'selected':'' ?>>PHARMACEUTICAL AND BEAUTY SECTOR</option>

                                                          <option value="PROFESSIONALS (Sports, Medical, pharmacist, accountant, lawyers)" <?php echo (isset($sector) and $sector==="PROFESSIONALS (Sports, Medical, pharmacist, accountant, lawyers)")? 'selected':'' ?>>
                                                          PROFESSIONALS (Sports, Medical, pharmacist, accountant, lawyers)</option>

                                                          <option value="CREATIVE SECTOR: (entertainment, arts, poetry)" <?php echo (isset($sector) and $sector==="CREATIVE SECTOR: (entertainment, arts, poetry)")? 'selected':'' ?>>CREATIVE SECTOR: (entertainment, arts, poetry)</option>

                                                          <option value="INFORMATION TECHNOLOGY" <?php echo (isset($sector) and $sector==="INFORMATION TECHNOLOGY")? 'selected':'' ?>>INFORMATION TECHNOLOGY</option>

                                                          <option value="EDUCATION" <?php echo (isset($sector) and $sector==="EDUCATION")? 'selected':'' ?>>EDUCATION</option>

                                                          <option value="CONSULTANCY / TRAINING" <?php echo (isset($sector) and $sector==="CONSULTANCY / TRAINING")? 'selected':'' ?>>CONSULTANCY / TRAINING</option>

                                                          <option value="WELLNESS INDUSTRY" <?php echo (isset($sector) and $sector==="WELLNESS INDUSTRY")? 'selected': ' ' ?>>WELLNESS INDUSTRY</option>

                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-9">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="terms" name="agree" required>
                                                            <label class="custom-control-label text-2" for="terms">I understand that I will have to pay 30,000 Naira for Registration and Membership <span class="text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="submit" name="submit" value="Register" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    
                </section>

               
                
            </div>
<!--content ends here-->

<?php
  include("includes/footer.inc.php");
?>