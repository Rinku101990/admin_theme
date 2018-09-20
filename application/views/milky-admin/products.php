<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Product List</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Products</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Products List</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
            <button class="btn btn-danger round btn-glow px-2" onclick="location.href = '<?php echo base_url("milky-admin/products/addProduct");?>';"> <i class="fa fa-plus"></i> Add Product</button>
            
          </div>
        </div>
      </div>
      <div class="content-body">
       
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
                          <td> <a href="<?php echo base_url('milky-admin/products/editProduct');?>">PR2364</a></td>
                          <td>System Architect</td>
                          <td>Lavish</td>
						  <td>Rs.256</td>
						  <td> <span class="badge badge-default badge-warning">Hidden</span></td>
                          <td>
						  <button onclick="location.href = '<?php echo base_url("milky-admin/products/editProduct");?>';"  class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
						  <button onclick="location.href = '<?php echo base_url("milky-admin/products/editProduct");?>';"  class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
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
		<section id="basic">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Basic Scenario</h4>
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
                  <div class="card-body card-dashboard ">
                    <p>Grid with filtering, editing, inserting, deleting, sorting and
                      paging. Data provided by controller.</p>
                    <div id="basicScenario"></div>
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