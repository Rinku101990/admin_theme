<div class="app-content content">
    <div class="content-wrapper">
 <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Vendor Profile</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Vendors</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Vendor Profile</a>
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
            <div id="user-profile">
                <div class="row">
                    <div class="col-12">
                        <div class="card profile-with-cover">
							<div class="card-img-top img-fluid bg-cover height-300" 
							style="background: url('<?php echo base_url("assets/images/carousel/22.jpg");?>') 50%;">
							</div>
                            <div class="media profil-cover-details w-100">
                                <div class="media-left pl-2 pt-2">
                                    <a href="#" class="profile-image">
                      <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-8.png');?>" class="rounded-circle img-border height-100"
                      alt="Card image">
                    </a>
                                </div>
                                <div class="media-body pt-3 px-2">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-sm-12">
                                            <p><b>Longitude: </b>77.391029</p>
                                            <p><b>Latitude : </b>28.535517</p>

                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-12">
                                            <h2 style="color:#f5564a"><b>Mother Dairy Products</b></h2>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-12 text-right">
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                            <button type="button" class="btn  btn-warning"><i class="fa fa-ban"></i> </button>
                                            <button type="button" class="btn  btn-success"><i class="fa fa-check"></i> </button>
                                            <button type="button" class="btn  btn-info"><i class="fa fa-edit"></i> </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="navbar navbar-light navbar-profile align-self-end">
                                <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#"><i class="fa fa-map-marker"></i> F-1, Sector-3, Noida <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-user"></i> Lavish</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-phone"></i> +91 9718789479</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-envelope"></i> lavish@gmail.com</a>
                                            </li>

                                        </ul>
                                    </div>
                        </div>
                        </nav>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-md-12">
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7007.208682819622!2d77.31115902285481!3d28.58164150115779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x390ce45ba6481455%3A0xcd52ec8780a441f6!2sNoida+Sector+16+Metro+Station%2C+Block+B%2C+Sector+16%2C+Noida%2C+Uttar+Pradesh!3m2!1d28.5785768!2d77.3172682!4m5!1s0x390ce458ccb0afa5%3A0x6f6a3dc21c831e29!2sSector+2%2C+Noida%2C+Uttar+Pradesh+201301%2C+India!3m2!1d28.584687499999998!2d77.31592959999999!5e0!3m2!1sen!2sus!4v1537184773017" width="1024" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				
				<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Products List</h4>
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
						  <th>Product Code</th>
						   <th>Product name</th>
                          <th>Seller</th>
                          <th>Prices</th>
						  <th>Status</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>PR2364</td>
                          <td>System Architect</td>
                          <td>Lavish</td>
						  <td>Rs.256</td>
						  <td> <span class="badge badge-default badge-warning">Hidden</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
                       <tr>
                          <td><input type="checkbox"></td>
                          <td>PR2364</td>
                          <td>System Architect</td>
                          <td>Lavish</td>
						  <td>Rs.256</td>
						   <td><span class="badge badge-default badge-info">Active</span> </td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						<tr>
                          <td><input type="checkbox"></td>
                          <td>PR2364</td>
                          <td>System Architect</td>
                          <td>Lavish</td>
						  <td>Rs.256</td>
						   <td><span class="badge badge-default badge-info">Active</span> </td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						
                     <tr>
                          <td><input type="checkbox"></td>
                          <td>PR2364</td>
                          <td>System Architect</td>
                          <td>Lavish</td>
						  <td>Rs.256</td>
						  <td> <span class="badge badge-default badge-danger">Deactive</span> </td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
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
		<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">My Orders</h4>
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
						  <th>Order No</th>
						   <th>Amount</th>
                          <th>Date</th>
                          <th>Buyer</th>
						  <th>Status</th>
						  <th>Delivery</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
                      <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						<tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						
                    <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>Rs. 250</td>
                          <td>24/02/2018</td>
						  <td>Lavish</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
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
		
		<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">My Payment</h4>
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
						  <th>Transaction No</th>
						   <th>Date</th>
                          <th>Amount</th>
						  <th>Status</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>24/02/2018</td>
                          <td>Rs. 250</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
                     <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>24/02/2018</td>
                          <td>Rs. 250</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						<tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>24/02/2018</td>
                          <td>Rs. 250</td>
						  <td> <span class="badge badge-default badge-warning">Successful</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						
                   <tr>
                          <td><input type="checkbox"></td>
                          <td>PR552sdf2364</td>
                          <td>24/02/2018</td>
                          <td>Rs. 250</td>
						  <td> <span class="badge badge-default badge-warning">Pending</span></td>
                          <td>
						  <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
						  <button class="btn btn-sm btn-warning"><i class="fa fa-ban"></i></button>
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
		<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Payments Calculation</h4>
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
                   
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
						  <th>Total Sell</th>
						   <th>Commission</th>
                          <th>Payble Amount</th>
						  <th>Paid Amount</th>
						  <th>Pending</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Rs.4000</td>
                          <td>Rs.200</td>
                          <td>Rs.3800</td>
                          <td>Rs.2000</td>
                          <td>Rs. 1800</td>
                         
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
</div>