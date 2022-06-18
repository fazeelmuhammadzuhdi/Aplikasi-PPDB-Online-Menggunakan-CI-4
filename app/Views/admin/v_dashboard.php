<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $totjurusan ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Jurusan</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-book-reader"></i>
        </div>
        <a href="<?= base_url('jurusan') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3><?= $pekerjaan ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Pekerjaan</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-suitcase"></i>
        </div>
        <a href="<?= base_url('pekerjaan') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3><?= $pendidikan ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Pendidikan</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-school"></i>
        </div>
        <a href="<?= base_url('pendidikan') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3><?= $agama ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Agama</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-pray"></i>
        </div>
        <a href="<?= base_url('agama') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-purple">
        <div class="inner">
            <h3><?= $penghasilan ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Penghasilan</b>
            </p>
        </div>
        <div class="icon">
            <i class="fas fa-money-check-alt"></i>
        </div>
        <a href="<?= base_url('penghasilan') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-primary">
        <div class="inner">
            <h3><?= $user; ?></h3>

            <p><b style="color: #040103; font-size: 20px;">User</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-user"></i>
        </div>
        <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3><?= $masuk ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Pendaftaran Masuk</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-sign-in-alt"></i>
        </div>
        <a href="<?= base_url('ppdb') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $diterima ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Pendaftaran Di Terima</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-clipboard-check"></i>
        </div>
        <a href="<?= base_url('ppdb/listDiterima') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-4 col-4">
    <!-- small box -->
    <div class="small-box bg-green">
        <div class="inner">
            <h3><?= $ditolak ?></h3>

            <p><b style="color: #040103; font-size: 20px;">Pendaftaran Di Tolak</b></p>
        </div>
        <div class="icon">
            <i class="fas fa-times-circle"></i>
        </div>
        <a href="<?= base_url('ppdb/listDitolak') ?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<?= $this->endSection() ?>