<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">OFFERING</li>
            <li class="active">church registry</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1>OFFERING</h1>
          <h1>church registry</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="causes-grid.html" class="pull-right btn btn-primary">All causes</a> </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">CHURCH OFFERRING</h2>
              <h2 class="post-title">church registry</h2>
            </header>
            <article class="post-content cause-item">
                <span class="post-meta meta-data">
                  <>
                  <span><i class="fa fa-archive"></i> <a href="#"><img src="images/churchm.jpeg" alt="" style="width:150px"></a> </h1></a>, <a href="#">KENYA</a></span>
                </span>
                <div class="spacer-20"></div>
                <div class="row">
                	<div class="col-md-7">
              			<img src="images/cause-img1.jpg" class="img-responsive">
                    </div>
                	<div class="col-md-5">
                        <ul class="list-group">
                          <li class="list-group-item">
                          	<h4>Cause Progress</h4>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" data-appear-progress-animation="11%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                          </li>
                      	  
                      	 
                        </ul>
                  		<a href="#" class="btn btn-primary btn-lg btn-block donatetihe and offering-paypal" data-toggle="modal" data-target="#PaymentModal">Donate Now</a>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <p>give back to God.</p>
                <p>give to God and he will give back.</p>
            <!-- Payment Modal Window -->
            <div class="modal fade" id="PaymentModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="PaymentModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">tithe and offering: <span class="accent-color payment-to-cause"></span></h4>
                  </div>
                  <div class="modal-body">
                  	<form>
                    	<div class="row">
                        	<div class="col-md-6">
                                <label>How much would you like to tithe and offering?</label>
                                <label>church registyr names</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">KSH</span>
                                    <select name="OFFERING amount" class="form-control">
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="Custom">100+</option>
                                    </select>
                                </div>
                            </div>
                        	<div class="col-md-6 custom-tithe and offering-amount">
                                <label>tithe and offering</label>
                                <div class="input-group margin-20">
                                    <span class="input-group-addon">ksh</span>
                        			<input type="text" name="Custom OFFERING AMOUNT Amount" class="form-control">
                                </div>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                            </div>
                        	<div class="col-md-6">
                        		<input type="text" name="lname" class="form-control" placeholder="Last name">
                            </div>
                      	</div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                            </div>
                        	<div class="col-md-6">
                        		<input type="phone" name="phone" class="form-control" placeholder="Your phone">
                            </div>
                       	</div>
                    	<div class="row">
                        	<div class="col-md-6">
                        		<textarea rows="3" cols="5" class="form-control" placeholder="Your Address"></textarea>
                            </div>
                        	<div class="col-md-6">
                        		<textarea rows="3" cols="5" class="form-control" placeholder="Additional Notes"></textarea>
                            </div>
                       	</div>
                        <input type="submit" name="tithe and offering" class="btn btn-primary btn-lg btn-block" value="tithe and offering">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <p class="small short">If you would prefer to call in your OFFERING, please call 0718010808</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>