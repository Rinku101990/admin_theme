<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add Coupons</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Promotions</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Add Coupon</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
           <button class="btn btn-danger round btn-glow px-2" onclick="location.href = '<?php echo base_url("milky-admin/promotions/coupons");?>';"> <i class="fa fa-list"></i> Coupons List</button>
            
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Form actions layout section start -->
        <section id="form-action-layouts">
         
          <div class="row match-height">
           
            <div class="col-md-6">
              <div class="card">
                
                <div class="card-content">
                  <div class="card-body">
                   
                    <form class="form">
                      <div class="form-body">
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="donationinput1">Coupon Code </label>
                            <input type="text" class="form-control square" placeholder="Coupon Code">
                          </div>
						  <div class="form-group col-12 mb-2">
                           <label for="donationinput1">Coupon For </label>
								  <select class="select2 form-control" id="id_h5_single">
									
									  <option value="AK">Alaska</option>
									  <option value="HI">Hawaii</option>
									  <option value="CA">California</option>
									  <option value="NV">Nevada</option>
								   
								  </select>
                         </div>
						  <div class="form-group col-12 mb-2">
						  <label for="donationinput1">Created On </label>
                            <input type="date" class="form-control date-inputmask" placeholder="Enter Date"
                            />
                          </div>
						  <div class="form-group col-12 mb-2">
						  <label for="donationinput1">Expiring On </label>
                            <input type="date" class="form-control date-inputmask" placeholder="Expiring On"
                            />
                          </div>
						  <div class="form-group col-12 mb-2">
						  <label for="donationinput1">Discount in % </label>
                            <input type="text" class="form-control date-inputmask" placeholder="Ex: 5%"
                            />
                          </div>
                        </div>
						 <button type="button" class="btn btn-warning mr-1">
                           Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                           Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          
        </section>
		
		
		
      </div>
    </div>
  </div>