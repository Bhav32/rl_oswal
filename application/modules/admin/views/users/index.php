<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
	    <a href="<?= base_url('admin/index/home'); ?>" title="Go to Home" class="tip-bottom">
	    <i class="icon-home"></i> Home</a>
	    <a href="<?= base_url('admin/users'); ?>" class="current">Users</a> 
     </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>User Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Auth-level</th>
                  <th>Last Login</th>
                  <th>Created At</th>
                  <th>Modified At</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td><input type="checkbox" /></td>
	                <td>1</td>
	                <td>admin</td>
	                <td>admin@example.com</td>
	                <td class="center"> 9</td>
	                <td> </td>
	                <td> 2017-07-19 14:02:38</td>
	                <td> 2017-07-19 14:02:38</td>
	                <td> 
	                	<a href="#"><i class="icon icon-edit"></i> </a>
                        <a href="#" ><i class="icon-trash"></i></a>
                    </td>
                </tr>
                <tr>
                  	<td><input type="checkbox" /></td>
                  	<td>2</td>
                  	<td>admin</td>
                  	<td>admin@admin.com</td>
                  	<td class="center"> 9</td>
                  	<td> </td>
                  	<td> 2017-07-19 14:02:38</td>
                  	<td> 2017-07-19 14:02:38</td>
                  	<td> 
	                	<a href="" class=""><i class="icon icon-edit"></i> </a>
                        <a href="" class=""><i class="icon-trash"></i></a>
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
