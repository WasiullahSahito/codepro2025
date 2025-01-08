<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" style="font-size:small !important">
  <div class="container">
          <a class="nav-link" href="<?='index.php'?>">
              <i class="fas fa-6 text-primary fa-tv"></i>
              <span class="text-light fw-bolder nav-link-text ms-1">TIME</span>
          </a>
          <button class="navbar-toggler btn btn-outline-primary btn-sm border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-grip-lines"></i>
          </button>

    <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fs-6 text-info fa-user"></i><span class="nav-link-text ms-1">Students</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="applied-students.php">
              <i class="fas fs-6 text-warning fa-paper-plane"></i>
              <span class="nav-link-text ms-1" style="font-size:small !important">Applied Students</span></a>
            </li>
            <li><a class="dropdown-item" href="students.php">
              <i class="fas fs-6 text-info fa-graduation-cap"></i>
              <span class="nav-link-text ms-1" style="font-size:small !important">Enrolled Students</span></a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="<?='employees.php'?>">
              <i class="fas fs-6  text-success fa-user-tie"></i>
            <span class="nav-link-text ms-1">Employees</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="<?='finances.php'?>">
          <i class="fas fs-6 text-danger fa-coins"></i>
            <span class="nav-link-text ms-1">Finance</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?='inventory.php'?>">
              <i class="fas fa-warehouse text-primary"></i>
            <span class="nav-link-text ms-1">Inventory</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?='projects.php'?>">
              <i class="fas fa-folder text-danger"></i>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fs-6 text-success fa-file-alt"></i><span class="nav-link-text ms-1">Reports</span>
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="pending_dues.php" style="font-size:small !important">
                <i class="fas fs-5 text-success fa-file-alt"></i>
                Dues Details</a></li>
              <li><a class="dropdown-item" href="detailed-report.php" style="font-size:small !important">
                <i class="fas fs-5 text-success fa-file-alt"></i> Detailed Report</a></li>
              <li><a class="dropdown-item" href="receipts_reporting.php" style="font-size:small !important">
                <i class="fas fs-5 text-success fa-file-alt"></i> Custom Report</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="<?='profile.php'?>">
              <i class="fas fs-6 text-info fa-user"></i>
              <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="<?='sign-out.php'?>">
            <i class="fs-6 text-danger fas fa-sign-out-alt"></i>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>