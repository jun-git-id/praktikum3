<html>

<head>
    <title>Belajar Select</title>
</head>

<body>
    <h1>Belajar Select</h1>
    <hr>

    <table cellpadding="8">
        <tr>
            <td><b>Provinsi</b></td>
            <td>
                <select name="provinsi" id="provinsi" style="width: 200px;">
                    <option value="">Pilih</option>

                    <?php
                    foreach ($provinsi as $data) { // Lakukan looping pada variabel siswa dari controller
                        echo "<option value='" . $data->id . "'>" . $data->nama . "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><b>Kota</b></td>
            <td>
                <select name="kota" id="kota" style="width: 200px;">
                    <option value="">Pilih</option>
                </select>
                <!-- menampilkan gambar -->
                <!-- <div id="loading" style="margin-top: 15px;">
					<img src="images/loading.gif" width="18"> <small>Loading...</small>
				</div> -->
            </td>
        </tr>
    </table>

    <!-- Load librari/plugin jquery nya -->
    <script src="<?php echo base_url("js/jquery.min.js"); ?>" type="text/javascript"></script>

    <script>
        $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
            // Kita sembunyikan dulu untuk loadingnya
            $("#loading").hide();

            $("#provinsi").change(function() { // Ketika user mengganti atau memilih data provinsi
                $("#kota").hide(); // Sembunyikan dulu combobox kota nya
                $("#loading").show(); // Tampilkan loadingnya

                $.ajax({
                    type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    url: "<?php echo base_url("form/listKota"); ?>", // Isi dengan url/path file php yang dituju
                    data: {
                        id_provinsi: $("#provinsi").val()
                    }, // data yang akan dikirim ke file yang dituju
                    dataType: "json",
                    beforeSend: function(e) {
                        if (e && e.overrideMimeType) {
                            e.overrideMimeType("application/json;charset=UTF-8");
                        }
                    },
                    success: function(response) { // Ketika proses pengiriman berhasil
                        $("#loading").hide(); // Sembunyikan loadingnya

                        // set isi dari combobox kota
                        // lalu munculkan kembali combobox kotanya
                        $("#kota").html(response.list_kota).show();
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }
                });
            });
        });
    </script>
</body>

</html>