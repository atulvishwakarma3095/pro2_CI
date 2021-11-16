<?= $this->extend('dashboard/dashboard-layout');?>
<?= $this->section('content')?>
<div class="col-lg-12">
  <h1 class="page-header">Report Issue</h1>
</div>

 <div class="row">
   <div class="col-lg-8">

   <div class="panel panel-default">
        <div class="panel-heading">
          Report Issue
        </div>               
           <div class="panel-body">
             <div class="row">
                <div class="col-lg-6">
                   <div class="form-group">
                        <label>Fullname:</label>
                        <input type="text" name="txtfullname" class="form-control" placeholder="Fullname">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="txtfullname" class="form-control" placeholder="Fullname">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Issue:</label>
                        <textarea class="form-control" cols="5" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                     <input type="submit" name="btnsubmit" class="btn btn-info" value="Submit">
                   </div>
                </div>
             </div>  
        </div>                        
</div>

</div>
</div>





<?= $this->endSection();?>