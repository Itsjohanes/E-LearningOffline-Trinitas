<style>
    .smaller-button {
    padding: 5px 10px;
    font-size: 12px;
}

</style>
<a href="<?php echo base_url('rapot'); ?>" class="btn btn-success mb-3">Kembali</a>

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Rapot Pretest </h6>
                </div>
            </div>

            <div class="container mt-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3"></div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Memahami Masalah</th>
                                <td>
                                    <?php
                                    if ($pretest != null) {
                                        echo $pretest['memahami_masalah'];
                                    } else {
                                        echo "Belum Mengikuti Pretest";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Merencanakan Pemecahan Masalah</th>
                                <td>
                                    <?php
                                    if ($pretest != null) {
                                        echo $pretest['merencanakan_pemecahan_masalah'];
                                    } else {
                                        echo "Belum Mengikuti Pretest";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Melaksanakan Pemecahan Masalah</th>
                                <td>
                                    <?php
                                    if ($pretest != null) {
                                        echo $pretest['melaksanakan_pemecahan_masalah'];
                                    } else {
                                        echo "Belum Mengikuti Pretest";
                                    }
                                    ?>
                                </td>
                            <tr>
                                 <tr>
                                <th>Melihat Kembali Pemecahan Masalah</th>
                                <td>
                                    <?php
                                    if ($pretest != null) {
                                        echo $pretest['memeriksa_kembali'];
                                    } else {
                                        echo "Belum Mengikuti Pretest";
                                    }
                                    ?>
                                </td>
                            <tr>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    
</div>

