    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>

    <script>
        //live preview
      var loadFileProduk = function(event) {
      var output = document.getElementById('imgsrcproduk');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

     //live preview
      var loadFileProfil = function(event) {
      var output = document.getElementById('imgsrcprofil');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    $(".detailButton").on('click', function() {
          const id = $(this).data('id');
          $.ajax({
            url:"fungsi/fungsi_detail_ajax.php",
            data:{id:id},
            method:'post',
            dataType:'json',
            success:function(data) {
              document.getElementById('isidetail').innerHTML = data;
            }
          });
        });
    $(".detailPesananB").on('click', function() {
          const id = $(this).data('id');
          $.ajax({
            url:"fungsi/fungsi_detail_pesan_ajax.php",
            data:{id:id},
            method:'post',
            dataType:'json',
            success:function(data) {
              document.getElementById('isidetailpesan').innerHTML = data;
            }
          });
        });
    </script>

