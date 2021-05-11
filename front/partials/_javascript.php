  <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(".cekLogin").on('click', function() {
            let a = $(this).data('ket');
            let x = $(this).data('id');

            let z = <?php if(isset($_SESSION['id_user'])) echo "true"; else echo "false";  ?>;
            if (z) {
                y = <?php if(isset($_SESSION['id_user'])) echo $_SESSION['id_user']; else echo "false" ?>;
                if (a == 'checkout') {
                    location = "index.php?url=checkout";
                }else if(a == 'basket'){
                    location = "index.php?url=basket";
                }else if(a == 'beli'){
                    $.ajax({
                        url:"front/fungsi/fungsi.php?page=beli",
                        data:{idP:x, idU:y},
                        method:'post',
                        dataType:'json',
                        success:function(data) {
                            $('#b_id_produk').val(x) ;
                            $('#b_nama').val(data.nama_produk);
                            $('#b_harga').val(data.harga) ;
                            $('#b_total').val(data.harga) ;
                            $('#b_alamat').val(data.alamat) ;
                            $('#b_kota').val(data.kota) ;
                            $('#b_provinsi').val(data.provinsi) ;
                            $('#b_stok').val(data.stok) ;
                            $('#b_metodePembayaran').val(data.b_metodePembayaran) ;
                            $('#b_id_seller').val(data.idSeller) ;
                            $('#beli').modal('show');

                        }
                      });
                }else if(a == 'keranjang'){
                    $.ajax({
                        url:"front/fungsi/fungsi.php?page=keranjang",
                        data:{idP:x, idU:y},
                        method:'post',
                        dataType:'json',
                        success:function(data) {
                            $('#k_id_produk').val(x) ;
                            $('#k_nama').val(data.nama_produk);
                            $('#k_harga').val(data.harga) ;
                            $('#k_total').val(data.harga) ;
                            $('#k_stok').val(data.stok) ;
                            $('#k_id_seller').val(data.idSeller) ;
                            $('#keranjang').modal('show');
                        }
                      });
                }
            }else{
                alert("Silakan Login untuk Melanjutkan Transaksi ");
            }
        });

        $(".buttonJumlah").on('click', function() {
            let x = $(this).data('id');
            let jml_sekartang = parseInt($('#b_jml').val());
            let jml_max = parseInt($('#b_stok').val());
            let harga = parseInt($('#b_harga').val()) ;
            if (x == 'kurang') {
                jml_sekartang = jml_sekartang - 1;
                $('#b_jml').val(jml_sekartang)
            }
            if (x == 'tambah') {
                jml_sekartang = jml_sekartang + 1;
                $('#b_jml').val(jml_sekartang)
            }
            if (jml_sekartang == 1) {
                $('#b_kurang').attr('disabled', 'disabled');
            }else{
                $('#b_kurang').removeAttr('disabled');
            }
            if (jml_sekartang == jml_max) {
                $('#b_tambah').attr('disabled', 'disabled');
            }
            else{
                $('#b_tambah').removeAttr('disabled');
            }
            let total = harga * jml_sekartang;
            $('#b_total').val(total) ;
        });

        $(".buttonJumlahK").on('click', function() {
            let x = $(this).data('id');
            let jml_sekartang = parseInt($('#k_jml').val());
            let jml_max = parseInt($('#k_stok').val());
            let harga = parseInt($('#k_harga').val()) ;
            if (x == 'kurang') {
                jml_sekartang = jml_sekartang - 1;
                $('#k_jml').val(jml_sekartang)
            }
            if (x == 'tambah') {
                jml_sekartang = jml_sekartang + 1;
                $('#k_jml').val(jml_sekartang)
            }
            if (jml_sekartang == 1) {
                $('#k_kurang').attr('disabled', 'disabled');
            }else{
                $('#k_kurang').removeAttr('disabled');
            }
            if (jml_sekartang == jml_max) {
                $('#k_tambah').attr('disabled', 'disabled');
            }
            else{
                $('#k_tambah').removeAttr('disabled');
            }
            let total = harga * jml_sekartang;
            $('#k_total').val(total) ;
        });
    </script>