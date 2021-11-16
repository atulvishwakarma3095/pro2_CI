<?= $this->extend('dashboard/dashboard-layout');?>
<?= $this->section('content')?>
<div class="col-lg-12">
        <h1 class="page-header">Course Sturcture</h1>
    </div>
    <embed src="<?= base_url('Files/BCA_Coursestructure_New1.pdf#toolbar=0&navpanes=0&scrollbar=0');?>" type="application/pdf" width="100%" height="600px" />
<?= $this->endSection();?>