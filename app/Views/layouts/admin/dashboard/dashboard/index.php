<?= $this->extend('layouts/admin/dashboard/base') ?>

<?= $this->section('content') ?>
 <!-- Content Row -->
 <div class="row col-md-12 ">
    
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Employees</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-6">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$datatodo;?></div>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Task/Assigned</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>