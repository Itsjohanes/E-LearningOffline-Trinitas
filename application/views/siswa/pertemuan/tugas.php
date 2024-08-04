<style>
    .pdf-container {
        position: relative;
        width: 100%;
        max-width: 1000px; /* Increased maximum width */
        margin: auto; /* Center the container */
        height: 600px; /* Fixed height */
    }
    
    .pdf {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tugas</h6>
    </div>


<div class="my-2">
    <?php 
        
            echo '<a class="btn btn-primary fs-9 py-2 px-4" role="button" href="' . base_url('pertemuan/') . $pertemuan . '">Kembali</a>';

        
    ?>
</div>

<!-- Container untuk menampilkan konten PDF -->
    <?php foreach ($tugas as $material) : ?>
        <?php $pdf = base_url('assets/tugas/') . $material['tugas']; ?>
        <div class="text-center">
            <object data="<?php echo $pdf; ?>" type="application/pdf" width="100%" height="1000px">
                <p>Maaf, browser Anda tidak mendukung plugin PDF. Anda bisa <a href="<?php echo $pdf; ?>">klik di sini untuk mendownload PDF</a>.</p>
            </object>
        </div>
    <?php endforeach; ?>


</div>
