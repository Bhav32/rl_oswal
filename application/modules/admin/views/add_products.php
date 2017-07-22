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
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Product Name :</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="Product name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product detail :</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="Product detail" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Prize :</label>
              <div class="controls">
                <input type="password"  class="span5" placeholder="Prize"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Size :</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="Product Size" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Discount :</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="Discount" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Material And Care :</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="Material And Care" />
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="Description" />
                </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Extra Description :</label>
              <div class="controls">
                <textarea class="span5" placeholder="Extra Description" ></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <div class="uploader" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Add</button>
            </div>
          </form>
        </div>
      </div>
      </div>
  </div>
</div>