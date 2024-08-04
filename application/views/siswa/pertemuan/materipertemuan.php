<style>
    .pdf-container {
        position: relative;
        width: 100%;
        padding-bottom: 100%; /* Menyesuaikan aspek rasio PDF */
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
        <h6 class="m-0 font-weight-bold text-primary">Materi Pertemuan</h6>
    </div>
    
    <div class="my-2">
        <a class="btn btn-primary fs-9 py-2 px-4" role="button" href="<?php echo base_url('pertemuan/').$pertemuan; ?>">Menu Lainnya</a>
    </div>

    <?php foreach ($materi as $material) : ?>
        <?php $pdf = base_url('assets/materi/') . $material['materi']; ?>
        <div class="pdf-container">
            <object data="<?php echo $pdf; ?>" type="application/pdf" width="100%" height="100%">
                <p>Your web browser doesn't have a PDF Plugin. Instead you can <a href="<?php echo $pdf; ?>">click here to download the PDF</a>.</p>
            </object>
        </div>
    <?php endforeach; ?>
</div>
