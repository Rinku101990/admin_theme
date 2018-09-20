<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Coupons</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Coupons</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
           <button class="btn btn-danger round btn-glow px-2" onclick="location.href = '<?php echo base_url("milky-admin/promotions/addCoupon");?>';"> <i class="fa fa-plus"></i> Add Coupon</button>
            
          </div>
        </div>
      </div>
      <div class="content-body">
       
		<section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Coupons List</h4>
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
                   
                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                      <thead>
                        <tr>
                          <th><input type="checkbox"> </th>
						  <th>Coupon Code</th>
						  <th>Coupon For</th>
						   <th>Discount</th>
						  <th>Created On</th>
						  <th>Validity</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>235DGSF5</td>
                          <td>Icecreams</td>
                          <td>5%</td>
						  <td>12-12-2018</td>
						  <td>12-12-2018</td>
                          <td>
						  <button class="btn btn-sm btn-info"><i class="fa fa-check"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
                       <tr>
                          <td><input type="checkbox"></td>
                          <td>235DGSF5</td>
                          <td>Icecreams</td>
                          <td>5%</td>
						  <td>12-12-2018</td>
						  <td>12-12-2018</td>
                          <td>
						  <button class="btn btn-sm btn-info"><i class="fa fa-check"></i></button>
						  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						  </td>
                        </tr>
						 <tr>
                          <td><input type="checkbox"></td>
                          <td>235DGSF5</td>
                          <td>Icecreams</td>
                          <td>5%</td>
						  <td>12-12-2018</td>
						  <td>12-12-2018</td>
                          <td>
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