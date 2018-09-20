 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add New Vendor</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Vendors</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Add Vendor</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
            <button onclick="location.href = '<?php echo base_url("milky-admin/vendors/");?>';" class="btn btn-danger round btn-glow px-2" 
            type="button"><i class="fa fa-list"></i> Vendors List</button>
           
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Form actions layout section start -->
        <section id="form-action-layouts">
         
          <div class="row match-height">
		  <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="from-actions-top-bottom-left">Vendor General Information</h4>
                 
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                   
                    <form class="form">
                      <div class="form-body">
                       
                        <div class="row">
                          <div class="form-group col-8 mb-2">
                            <label for="issueinput1">Vendor Name</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Vendor Name"
                            name="issuetitle" data-toggle="tooltip" data-trigger="hover"
                            data-placement="top" data-title="Product Name">
                          </div>
						  <div class="form-group col-4 mb-2">
                            <label for="issueinput1">SKU Code</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="PR23654"
                            name="issuetitle" data-toggle="tooltip" data-trigger="hover"
                            data-placement="top" data-title="Product Code">
                          </div>
                        </div>
						 <div class="row">
						<div class="form-group col-12 mb-2">
                      <label for="issueinput1">Membership</label>
                      <select class="select2 form-control" id="default-multiple">
                          <option value="AK">Free Plan (10% Commission)</option>
                          <option value="HI">Standard Plan (7% Commission)</option>
                          <option value="HI">Business Plan (3% Commission)</option>
                      </select>
                    </div>
                    </div>
					<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Membership Expiry Date</label>
                            <input type="date" id="issueinput1" class="form-control" placeholder="Membership Validity">
                          </div>
                        </div>
						<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Email ID</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Email Id">
                          </div>
                        </div>
						<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Phone Number</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Phone Number">
                          </div>
                        </div>
						<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Contact Person</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Contact Person">
                          </div>
                        </div>
						<div class="row">
						<div class="form-group col-12 mb-2">
                      <label for="issueinput1">Select City</label>
                      <select class="select2 form-control" id="default-multiple">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                       
                       
                      </select>
                    </div>
					
					
                    </div>
					<div class="row">
					<div class="form-group col-12 mb-2">
                      <label for="issueinput1">Select Area</label>
                      <select class="select2 form-control" id="default-multiple">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                       
                       
                      </select>
                    </div>
					</div>
					<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Pincode</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Pincode">
                          </div>
                   </div>
					<div class="row">
                          <div class="form-group col-6 mb-2">
                            <label for="issueinput1">Lattitude</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Lattitude">
                          </div>
						  
                          <div class="form-group col-6 mb-2">
                            <label for="issueinput1">Longitude</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Longitude">
                          </div>
                        </div>
					
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput2">Commission</label>
                            <input type="text" class="form-control" placeholder="Commission in % (Ex: 2%)">
                          </div>
						  
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12 mb-2">
                            <label for="issueinput3">Profile Banner</label>
                            <input type="file" class="form-control" name="dateopened" >
                          </div>
                        </div>
                       <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput8">Complete Address</label>
                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="Address"></textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput8">Small Description</label>
                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="About Vendor"></textarea>
                          </div>
                        </div>
						
						<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Username</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="username">
                          </div>
                        </div>
						<div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput1">Password</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Password">
                          </div>
                        </div>
						
						<div class="row">
					   <div class="form-group col-12 mb-2">
                        <button type="button" class="btn btn-warning mr-1">
                           Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                           Save
                        </button>
                      </div>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>
        <!-- // Form actions layout section end -->
      </div>
    </div>
  </div>