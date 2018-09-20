<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Shipping Charges</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Settings</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Shipping Charges</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- Form actions layout section start -->
        <section id="form-action-layouts">
         
          <div class="row match-height">
           
            <div class="col-md-5">
              <div class="card">
                
                <div class="card-content">
                  <div class="card-body">
                   
                    <form class="form">
                      <div class="form-body">
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="donationinput1">Add Shipping Type</label>
                            <input type="text" class="form-control square" placeholder="Add Shipping Type" name="fullname">
                          </div>
						   <div class="form-group col-12 mb-2">
                            <label for="donationinput1">Shipping Charges</label>
                            <input type="text" class="form-control square" placeholder="Shipping Charges">
                          </div>
						  <div class="form-group col-12 mb-2">
                            <label for="donationinput1">Minimum Shoppig Limit</label>
                            <input type="text" class="form-control square" placeholder="Minimum Shoppig Limit" name="fullname">
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
		
		<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Shipping Fees List</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                   
                    <table class="table table-striped table-bordered file-export">
                      <thead>
                        <tr>
                          <th><input type="checkbox"> </th>
						  <th>Shipping Type</th>
						  <th>Shipping Charges</th>
						  <th>Minimum Shopping Limit</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Free</td>
                          <td>0</td>
                          <td>500</td>
                          <td>Active</td>
                          <td><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-check"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
                        
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Same Day Delivery</td>
                          <td>100</td>
                          <td>1000</td>
                          <td>Active</td>
                          <td><button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-check"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
                        
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		
      </div>
    </div>
  </div>