<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
	    <a href="<?= base_url('admin/index/home'); ?>" title="Go to Home" class="tip-bottom">
	    <i class="icon-home"></i> Home</a>
	    <a href="<?= base_url('admin/products'); ?>" class="current">Products</a> 
     </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Products Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Product Detail</th>
                  <th>Price</th>
                  <th>Sizes</th>
                  <th>Material and Care</th>
                  <th>Discount</th>
                  <th>Image</th>
                  <th>Extra Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
	                <td>1</td>
	                <td>White Shirt</td>
	                <td>Office wWear White Formals For Men</td>
                  <td>800</td>
	                <td class="center">XL</td>
	                <td> Hand wash </td>
                  <td> 10% </td>
                  <td></td>
	                <td> Extra description for product </td>
	                <td> 
	                	<a href="#" class=""><i class="icon icon-edit span11 tip"></i> </a>
                        <a href="#" class=""><i class="icon-trash span11 tip"></i></a>
                    </td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>2</td>
                  <td>White Shirt</td>
                  <td>Office wWear White Formals For Men</td>
                  <td>800</td>
                  <td class="center">XL</td>
                  <td> Hand wash </td>
                  <td> 10% </td>
                  <td></td>
                  <td> Extra description for product </td>
                  	<td> 
	                	<a href="" class=""><i class="icon icon-edit span11 tip"></i> 
                    </a>
                    <div class="tooltip fade top in" style="display: block; top: 17px;"> Edit</div>
                        <a href="" class=""><i class="icon-trash span11 tip"></i></a>
                        <div class="tooltip fade top in" style="display: block; top: 17px;"> Delete</div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>