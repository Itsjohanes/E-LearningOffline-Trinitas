

  <?= $this->session->flashdata("pesan"); ?>

  <div class="container-fluid py-4">
    <div id="pembukaan" class="row mt-4">
      <div class="col-lg-4 mt-4 mb-2">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
              <div class="chart">
                <img id="chart-bars" class="chart-canvas" src="<?php echo base_url('assets/img/menupertemuan/tugas.jpg'); ?>" height="170">
              </div>
            </div>
          </div>
          <div class="card-body">
            <a class="mb-0" href="<?php echo base_url('pertemuan/tugas/') . $pertemuan; ?>">Tugas / LKPD</a>
            <hr class="dark horizontal">
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mb-2">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
              <div class="chart">
                <img id="chart-bars" class="chart-canvas" src="<?php echo base_url('assets/img/menupertemuan/materi.jpeg'); ?>" height="170">
              </div>
            </div>
          </div>
          <div class="card-body">
            <a class="mb-0" href="<?php echo base_url('pertemuan/materipertemuan/') . $pertemuan; ?>">Materi Pertemuan (PDF/Video)</a>
            <hr class="dark horizontal">
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mb-2">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
              <div class="chart">
                <img id="chart-bars" class="chart-canvas" src="<?php echo base_url('assets/img/menupertemuan/form.png'); ?>" height="170">
              </div>
            </div>
          </div>
          <div class="card-body">
            <a class="mb-0" href="<?php echo base_url('pertemuan/form/') . $pertemuan; ?>">Form</a>
            <hr class="dark horizontal">
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mb-2">
        <div class="card z-index-2">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
              <div class="chart">
                <img id="chart-bars" class="chart-canvas" src="<?php echo base_url('assets/img/test.png'); ?>" height="170">
              </div>
            </div>
          </div>
          <div class="card-body">
            <a class="mb-0" href="<?php echo base_url('pertemuan/quiz/') . $pertemuan; ?>">Quiz</a>
            <hr class="dark horizontal">
          </div>
        </div>
      </div>
    </div>
  </div>