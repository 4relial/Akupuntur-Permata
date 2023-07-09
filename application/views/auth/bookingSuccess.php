    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                        <?= $this->session->flashdata('message'); ?>
                        <a class="btn btn-primary" href="<?= base_url(); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>