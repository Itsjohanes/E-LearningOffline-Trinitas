<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata("message");
    ?>
    <div class="row">

    </div>
    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang, <?= $user['nama']; ?></h5>
                </div>
            </div>
        </div>
    </div>
   
    </div>
    </div>

</div>
</div>
<!-- End of Main Content -->