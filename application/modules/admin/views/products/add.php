<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
	    <a href="<?= base_url('admin/index/home'); ?>" title="Go to Home" class="tip-bottom">
	    <i class="icon-home"></i> Home</a>
	    <a href="<?= base_url('admin/add_products'); ?>" class="current">Add Products</a> 
     </div>
  </div>
  <div class="container-fluid">
  <div class="span8"></div>
  <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Product Details</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo base_url().'admin/products'; ?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Product Name :</label>
              <div class="controls">
                <input name="product_name" type="text" class="span5" placeholder="Product name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Prize :</label>
              <div class="controls">
                <input type="text" name="price" class="span5" placeholder="Prize"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sizes: </label>
              <div class="controls" style="width: 420px;">
                <select name="sizes" multiple placeholder="Sizes">
                  <option>S </option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL </option>
                  <option>XXL</option>
                  <option>XXXL</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Dicount</label>
              <div class="controls">
                <input type="text" name="discount" id="mask-percent" placeholder="Discount" class="span5 mask text">
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Material And Care :</label>
              <div class="controls">
                <input type="text" name="product_care" class="span5" placeholder="Material And Care" />
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span5" name="description" placeholder="Description" />
                </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Extra Description :</label>
              <div class="controls">
                <textarea class="span5" name="ex_description" placeholder="Extra Description" ></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Add</button>
              <button type="reset" class="btn btn-success">Cancel</button>
            </div>
          </form>
        </div>
      </div>
      </div>
  </div>
</div>