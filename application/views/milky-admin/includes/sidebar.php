<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="index.html"><i class="fa fa-home"></i><span class="menu-title">Dashboard</span></a>

            </li>

            <li class=" nav-item"><a href="#"><i class="fa fa-shopping-cart"></i><span class="menu-title">Orders</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/orders');?>">View Orders</a>
                    </li>
					<li><a class="menu-item" href="<?php echo base_url('milky-admin/orders/transactions');?>">Transactions</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span class="menu-title">Products</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/products/categories');?>">Categories</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/products/subcats');?>">Sub-Categories</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/products/brands');?>">Brands</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/products');?>">Products</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span class="menu-title">Vendors</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/vendors');?>">View Vendor</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/vendors/addVendor');?>">Register Vendor</a>
                    </li>
					<li><a class="menu-item" href="<?php echo base_url('milky-admin/vendors/Transactions');?>">Transactions</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="<?php echo base_url('milky-admin/buyers');?>"><i class="fa fa-user"></i><span class="menu-title">Buyers</span></a>
            </li>

            <li class=" nav-item"><a href="#"><i class="fa fa-gift"></i><span class="menu-title">Promotion</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/promotions/newsletters');?>">Newsletters</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/promotions/coupons');?>">Coupons</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/promotions');?>">Promotional Banners</a>
                    </li>

                </ul>
            </li>
			 <li class=" nav-item"><a href="#"><i class="fa fa-question-circle"></i><span class="menu-title">Inquiries</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/inquiries/vendorInquiries');?>">Vendors</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/inquiries');?>">Customers</a>
                    </li>
					
                </ul>
            </li>
			 <li class=" nav-item"><a href="#"><i class="fa fa-envelope"></i><span class="menu-title">Complaints</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/complaints/vendorComplaints');?>">Vendors</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/complaints');?>">Customers</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="<?php echo base_url('milky-admin/comments');?>"><i class="fa fa-comments"></i><span class="menu-title">Rating & Reviews</span></a>
            </li>
            <li class=" nav-item"><a><i class="fa fa-shopping-bag"></i><span class="menu-title">Administrator</span><i class="fa fa-caret-down float-right mr-2"></i></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/settings');?>">Company Profile</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/settings/tax');?>">Tax Settings</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/settings/shippingFees');?>">Shipping Charges</a>
                    </li>
                   
                    <li><a class="menu-item" href="<?php echo base_url('milky-admin/settings/changePassword');?>">Change Password</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>