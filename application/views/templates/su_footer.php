    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url('superuser/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

	<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6972b7bfd3.js" crossorigin="anonymous"></script>

    <!-- DataTable -->
    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/') ?>js/demo/datatables-demo.js"></script>

    <script src="<?php echo base_url('assets/') ?>js/style.js"></script>

    <script>       
        // PieChart 1
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Depok", "Kalimalang", "Karawaci", "Salemba", "Cengkareng"],
            datasets: [{
              data: [<?= $depok.','.$kalimalang.','.$karawaci.','.$salemba.','.$cengkareng ?>],
              backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#ffc107', '#9c27b0'],
              hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#ffeb3b', '#ba68c8'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
        // end Piechart 1

        // PieChart 2
        var ctx = document.getElementById("myPieChart2");
        var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Tingkat 2", "Tingkat 3", "Tingkat 4"],
            datasets: [{
              data: [<?= $tingkat2.','.$tingkat3.','.$tingkat4 ?>],
              backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
              hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: true,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
        // end Piechart 2
    </script>
  </body>
</html>