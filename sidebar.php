<div class="col-lg-3">
        <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" 
    aria-labelledby="offcanvasNavbarLabel" style="width:250px">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
                <a class="nav-link <?php echo  (isset ($_GET['X']) && $_GET['X']=='HOME') ? 
                'active-link-light' : 'link-derk'; ?>" aria-current="page" href="index.php?x=home"><i class="bi bi-house-door"></i> DASHBORD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo  (isset ($_GET['X']) && $_GET['X']=='customer') ? 
                'active-link-light' : 'link-derk'; ?>" href="customer.php? x=customer"><i class="bi bi-person-bounding-box"></i> CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo  (isset ($_GET['X']) && $_GET['X']=='menu') ? 
                'active-link-light' : 'link-derk'; ?>" href="menu.php? x=menu"><i class="bi bi-list"></i> MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo  (isset ($_GET['X']) && $_GET['X']=='harga') ? 
                'active-link-light' : 'link-derk'; ?>" href="harga.php? x=harga"><i class="bi bi-coin"></i> HARGA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo  (isset ($_GET['X']) && $_GET['X']=='order') ? 
                'active link-light' : 'link-derk'; ?>" href="order.php? x=order"><i class="bi bi-cart4"></i> ORDER</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
        </div>