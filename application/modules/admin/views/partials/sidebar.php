<!--sidebar-menu-->
<div id="sidebar">
  <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul style="display: block;">
    <li <?= (in_array('home', uri_control()) ? 'class="active"': '') ?>>
        <a href="<?= base_url('admin/index/home'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> 
    </li>
    <li <?= (in_array('users', uri_control()) ? 'class="active"': '') ?>>
        <a href="<?= base_url('admin/users'); ?>"><i class="icon icon-user"></i> <span>Users</span></a> 
    </li>
    <li <?= (in_array('products', uri_control()) ? 'class="active"': '') ?>> 
        <a href="<?= base_url('admin/products'); ?>"><i class="icon-list-ul"></i> <span>Products</span></a> 
    </li>
  </ul>
</div>
<!--sidebar-menu-->
