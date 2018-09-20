 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add New Product</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Products</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Add New Product</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
            <button onclick="location.href = '<?php echo base_url("milky-admin/products");?>';" class="btn btn-danger round btn-glow px-2" 
            type="button"><i class="fa fa-list"></i> Product List</button>
           
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
                  <h4 class="card-title" id="from-actions-top-bottom-left">Product General Information</h4>
                 
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                   
                    <form class="form">
                      <div class="form-body">
                       
                        <div class="row">
                          <div class="form-group col-9 mb-2">
                            <label for="issueinput1">Product Name</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="Product Name"
                            name="issuetitle" data-toggle="tooltip" data-trigger="hover"
                            data-placement="top" data-title="Product Name">
                          </div>
						  <div class="form-group col-3 mb-2">
                            <label for="issueinput1">Product Code</label>
                            <input type="text" id="issueinput1" class="form-control" placeholder="PR23654"
                            name="issuetitle" data-toggle="tooltip" data-trigger="hover"
                            data-placement="top" data-title="Product Code">
                          </div>
                        </div>
						<div class="row">
						<div class="form-group col-12 mb-2">
                      <label for="issueinput1">Select Categories</label>
                      <select class="select2 form-control" id="default-multiple" multiple="multiple">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                        </optgroup>
                       
                       
                      </select>
                    </div>
                    </div>
					<div class="row">
						<div class="form-group col-12 mb-2">
                      <label for="issueinput1">Select Sub-Categories</label>
                      <select class="select2 form-control" id="default-multiple" multiple="multiple">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </optgroup>
                        
                      </select>
                    </div>
                    </div>
					<div class="row">
					 <div class="form-group col-12 mb-2">
                       <label for="donationinput1">Product Brand </label>
                      <select class="select2 form-control" id="id_h5_single">
                        
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                         
                      </select>
                    </div>
					
						</div>
                        <div class="row">
                          <div class="form-group col-5 mb-2">
                            <label for="issueinput2">Prices</label>
                            <input type="text" id="issueinput2" class="form-control" placeholder="Price"
                            name="openedby" data-toggle="tooltip" data-trigger="hover"
                            data-placement="top" data-title="Price">
                          </div>
						  <div class="form-group col-5 mb-2">
                            <label for="issueinput2">Sizes</label>
                            <input type="text" id="issueinput2" class="form-control" placeholder="Size"
                            name="openedby" data-toggle="tooltip" data-trigger="hover"
                            data-placement="top" data-title="Size">
                          </div>
						  <div class="form-group col-2 mb-2">
                            <label for="">Add</label>
                            <button class="form-control btn btn-small btn-default"> <i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12 mb-2">
                            <label for="issueinput3">Product Images</label>
                            <input type="file" class="form-control" name="dateopened" data-toggle="tooltip"
                            data-trigger="hover" data-placement="top" data-title="Multiple Product Images ">
                          </div>
                        </div>
                       <div class="row">
					 <div class="form-group col-12 mb-2">
                       <label for="donationinput1">Seller  </label>
                      <select class="select2 form-control" id="id_h5_single">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                      </select>
                    </div>
					</div>
                        <div class="row">
					 <div class="form-group col-12 mb-2">
                       <label for="donationinput1">Product Status  </label>
                      <select class="select2 form-control" id="id_h5_single">
                          <option value="AK">Active</option>
                          <option value="HI">Hidden</option>
                          <option value="CA">Disabled</option>
                      </select>
                    </div>
					</div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput8">Small Description</label>
                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="comments"
                            data-toggle="tooltip" data-trigger="hover" data-placement="top"
                            data-title="Full Description will see on the top of the page"></textarea>
                          </div>
                        </div>
                      </div>
                     
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="from-actions-top-bottom-left">Product Other Information</h4>
                 
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                   
                   
                      <div class="form-body">
                       
                   
                        <div class="row">
					 <div class="form-group col-12 mb-2">
                       <label for="donationinput1">Product Type  </label>
                      <select class="select2 form-control" id="id_h5_single">
                          <option value="AK">Simple</option>
                          <option value="HI">Featured</option>
                          <option value="CA">Offer</option>
                      </select>
                    </div>
					</div>
                        
                    <div class="row">
					 <div class="form-group col-12 mb-2">
                       <label for="donationinput1">Product Reviews  </label>
                      <select class="select2 form-control" id="id_h5_single">
                          <option value="AK">Comments only</option>
                          <option value="HI">Ratings Only</option>
                          <option value="CA">Comments and Ratings</option>
						  <option value="CA">Disabled</option>
                      </select>
                    </div>
					</div>
					<div class="row">
                          <div class="form-group col-md-12 mb-2">
                            <label for="issueinput3">Inventory</label>
                            <input type="text" class="form-control" name="dateopened" data-toggle="tooltip" placeholder="Number of products available"  data-trigger="hover" data-placement="top" data-title="Number of products available in Store">
                          </div>
                        </div>
                       <div class="row">
                          <div class="form-group col-md-12 mb-2">
                            <label for="issueinput3">Discount</label>
                            <input type="text" class="form-control" name="dateopened" data-toggle="tooltip" placeholder="Ex: 10%"  data-trigger="hover" data-placement="top" data-title="Discount in %">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput8">Full Description</label>
                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="Full Description"
                            data-toggle="tooltip" data-trigger="hover" data-placement="top"
                            data-title="Full Description will see on the bottom of the page"></textarea>
                          </div>
                        </div>
                      </div>
				 <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput8">Product Keywords</label>
                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="Keywords separated by comma"
                            data-toggle="tooltip" data-trigger="hover" data-placement="top"
                            data-title="Keywords separated by comma"></textarea>
                      </div>
                  </div>
				   <div class="row">
                          <div class="form-group col-md-12 mb-2">
                            <label for="issueinput3">Product Page Title</label>
                            <input type="text" class="form-control" name="dateopened" data-toggle="tooltip" placeholder="Best Dairy product"  data-trigger="hover" data-placement="top" data-title="Best Dairy product">
                          </div>
                   </div>
				    <div class="row">
				    <div class="form-group col-md-12 mb-2">
                      <label for="issueinput3">Product Tags</label>
                      <input type="text" class="selectize-event" value="pretty,awesome">
                   
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
                    </form>
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