<?= $this->extend('dashboard/dashboard-layout');?>
<?= $this->section('content')?>
<div class="col-lg-12">
        <h1 class="page-header"><?= (isset($yrs)) ? $yrs : 'Document'?></h1>
</div>

<?= $this->endSection();?>