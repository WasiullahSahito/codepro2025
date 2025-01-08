<?php
require 'includes/header.php';
?>

<!-- Navbar -->
<?php require 'includes/navbar.php';?>
<!-- End Navbar -->

<div class="container py-4">
  <!-- Page Header -->
  <div class="row mb-3">
    <div class="col">
      <div class="card bg-dark text-white p-3 shadow-sm">
        <h3 class="mb-0">Candidate's Record</h3>
      </div>
    </div>
  </div>

  <!-- Action Buttons -->
  <div class="row mb-4">
    <div class="col-md-6">
      <a href="register-student.php" target="_blank" class="btn btn-outline-danger w-100">
        <i class="fa fa-user"></i> Register New Student
      </a>
    </div>
    <div class="col-md-6 text-md-end">
      <a href="export-student.php" class="btn btn-outline-primary w-100">
        <i class="fa fa-download"></i> Export Record
      </a>
    </div>
  </div>

  <!-- Search and Table -->
  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-header">
          <h5 class="mb-0">Search and Records</h5>
        </div>
        <div class="card-body">
          <!-- Search Bar -->
          <div class="mb-3">
            <input type="text" id="searchStudent" class="form-control" placeholder="Search Candidate by Name" autocomplete="off">
          </div>

          <!-- Records Table -->
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>Candidate</th>
                  <th>Enrolled In</th>
                  <th>Status</th>
                  <th>Registration</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="./assets/Screenshot 2025-01-06 144042.png" class="rounded-circle me-3" alt="student" width="50" height="50">
                      <div>
                        <h6 class="mb-0">Wasiullah</h6>
                        <small class="text-secondary">Saifullah</small><br>
                        <small class="text-secondary">2212164</small>
                      </div>
                    </div>
                  </td>
                  <td>FOP</td>
                  <td><span class="badge bg-success">Registered</span></td>
                  <td>02-2-24</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i> View</a>
                    <button class="btn btn-sm btn-danger delete-student" data-id="1"><i class="fa fa-trash"></i> Delete</button>
                    <a href="#" class="btn btn-sm btn-info"><i class="fa-solid fa-edit"></i> Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Charts Section -->
  <div class="row mt-4">
    <!-- Enrollment Chart -->
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h6>Monthly Candidate Enrollment</h6>
        </div>
        <div class="card-body">
          <canvas id="enrollmentChart" height="300"></canvas>
        </div>
      </div>
    </div>
    <!-- Fee Chart -->
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
          <h6>Monthly Fee Collection</h6>
        </div>
        <div class="card-body">
          <canvas id="feeChart" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Chart.js Scripts
  const enrollmentCtx = document.getElementById('enrollmentChart').getContext('2d');
  new Chart(enrollmentCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Enrollments',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  const feeCtx = document.getElementById('feeChart').getContext('2d');
  new Chart(feeCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Fees',
        data: [15, 25, 10, 20, 10, 5],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  // Search Student Script
  $('#searchStudent').on('input', function () {
    let query = $(this).val();
    $.ajax({
      url: 'search-student.php',
      method: 'GET',
      data: { name: query },
      success: function (response) {
        $('tbody').html(response);
      }
    });
  });
</script>

<?php require 'includes/footer.php';?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <?php 
  

  require 'includes/footer.php';
  // require 'graphjs/studentEnrollment.php';
  // require 'graphjs/studentFee.php';
  ?>

    <!-- jquery srcip to enable Ajax on this page! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- This script is used to get the record of receipts from database for this particular 
  student -->
  <script>
    $('#attClass').on('change' , function () {
        $.ajax({
            type: "POST",
            url: `getAllRegistered.php?course=${$('#attClass').val()}`,
            dataType: "text",
            success: function (data) {
              $('#table-body').html(data)
            }
          });
    })
    

    // $(document).ready(function() {
    //  if(fetchReceipts() != ''){
    //   fetchReceipts()
    //  } ;
    // } )
    // )

    $(document).ready(function () {
        $('#searchStudent').on('input', function () {
            let query = $(this).val();
            $.ajax({
                url: 'search-student.php',
                method: 'GET',
                data: { name: query },
                success: function (response) {
                    $('tbody').html(response);
                }
            });
        });
    });
    // ABOVE IS SCRIPT TO SEARCH STUDENTS NAME  

  </script>  
  <!-- All receipt records are fetched from data base -->