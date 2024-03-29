<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-3">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4"><b>Add Employee</b></h5>

            <form action="/addemployee" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="example-product-name">Employee Name</label>
                    <input type="text" class="form-control" id="employeename" aria-describedby="emailHelp" 
                        placeholder="Enter Employee Name" required name="employeename">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Employee Role</label>
                    <input type="text" class="form-control" id="employeerole" aria-describedby="emailHelp" 
                        placeholder="Enter Employee Role" required name="employeerole">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Email Address</label>
                    <input type="text" class="form-control" id="emailaddress" aria-describedby="emailHelp" 
                        placeholder="Enter Email Address" required name="emailaddress">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Password Tampil</label>
                    <input type="text" class="form-control" id="passwordtampil" aria-describedby="emailHelp" 
                        placeholder="Enter Password" required name="passwordtampil">
                </div>

                <div class="form-group">
                    <label for="example-product-name">Password Employee</label>
                    <input type="text" class="form-control" id="passwordemployee" aria-describedby="emailHelp" 
                        placeholder="Enter Password" required name="passwordemployee">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>