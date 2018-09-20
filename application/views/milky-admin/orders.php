<div class="app-content content">
    <div class="content-wrapper">
 <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Orders</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Orders</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Orders List</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
            <button onclick="location.href = '<?php echo base_url("milky-admin/vendors/");?>';" class="btn btn-danger round btn-glow px-2" 
            type="button"><i class="fa fa-list"></i> Add List</button>
           
          </div>
        </div>
      </div>
        <div class="content-body">
		<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">All Orders</h4>
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
                   
                    <table class="table table-striped table-bordered table-responsive file-export">
                      <thead>
                        <tr>
                          <th><input type="checkbox"> </th>
						  <th>Order No</th>
						   <th>Amount</th>
                          <th>Date</th>
                          <th>Buyer</th>
                          <th>SKU</th>
						  <th>Status</th>
						  <th>Delivery</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td> <a href="<?php echo base_url("milky-admin/buyers/invoiceBuyer");?>">PR552sdf2364</a></td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td><a href="<?php echo base_url("milky-admin/buyers/buyerProfile");?>">Lavish</a></td>
						  <td>DAIRY569</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						 <span class="dropdown">
                              <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info"><i class="fa fa-cog"></i></button>
                              <span class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="fa fa-truck"></i> Delivery Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-credit-card"></i> Payment Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-eye"></i> View Order</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-ban"></i> Cancel Order</a>
                               
                              </span>
                            </span>
						  </td>
                        </tr>
                      <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td>DAIRY569</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <span class="dropdown">
                              <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info"><i class="fa fa-cog"></i></button>
                              <span class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="fa fa-truck"></i> Delivery Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-credit-card"></i> Payment Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-eye"></i> View Order</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-ban"></i> Cancel Order</a>
                               
                              </span>
                            </span>
						  </td>
                        </tr>
						<tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td>DAIRY569</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						   <span class="dropdown">
                              <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info"><i class="fa fa-cog"></i></button>
                              <span class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="fa fa-truck"></i> Delivery Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-credit-card"></i> Payment Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-eye"></i> View Order</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-ban"></i> Cancel Order</a>
                               
                              </span>
                            </span>
						  </td>
                        </tr>
						
                    <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td>DAIRY569</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <span class="dropdown">
                              <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" class="btn btn-info"><i class="fa fa-cog"></i></button>
                              <span class="dropdown-menu mt-1 dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="fa fa-truck"></i> Delivery Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-credit-card"></i> Payment Status</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-eye"></i> View Order</a>
                                <a href="#" class="dropdown-item"><i class="fa fa-ban"></i> Cancel Order</a>
                               
                              </span>
                            </span>
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