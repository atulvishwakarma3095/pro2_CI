<?= $this->extend('dashboard/dashboard-layout');?>
<?= $this->section('content')?>
<div class="col-lg-12">
        <h1 class="page-header">Bonafied</h1>
</div>

<div class="row">
        <div class="col-lg-10">
                <div class="panel panel-default">
                        <div class="panel-heading">
                           Bonafied
                        </div>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-lg-4">
                                 <div class="form-group">
                                    <label>PRN/TRN</label>
                                    <input type="text" name="txtprn" class="form-control" placeholder="PRN/TRN">
                                 </div>
                               </div> 
                               <div class="col-lg-4">
                                 <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" name="txtfullname" class="form-control" placeholder="Fullname">
                                 </div>
                               </div> 
                                <div class="col-lg-4">
                                 <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" name="txtdob" class="form-control">
                                 </div>
                               </div>
                               <div class="col-lg-8">
                                   <div class="form-group">
                                        <label>Subject</label>
                                        <textarea class="form-control" rows="4" placeholder="Subject"></textarea>
                                   </div>
                                </div> 
                                <div class="col-lg-4">
                                   <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" name="txtdate" class="form-control" value="<?= date('Y-m-d');?>" readonly>
                                   </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" name="btnsubmit" class="btn btn-primary" value="Submit">
                                </div>
                               </div> 
                           </div>
                        </div>
                </div>
        </div>
</div>






<?= $this->endSection();?>