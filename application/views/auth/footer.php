    </main>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/smooth-scrollbar.min.js'); ?>"></script>
    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="<?php echo base_url('assets/button.js');?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('assets/js/material-dashboard.min.js?v=3.1.0'); ?>"></script>
  </body>
  <script src="<?= base_url('assets/'); ?>js/jquery-3.2.1.slim.min.js"></script>
 
</html>
