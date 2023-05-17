<?= $this->extend('layouts/admin/dashboard/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
<div class="row mb-4">
        <div class="col-12">

            <h5 class="mb-4">My Employee's Task List</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Task Name</th>
                        <th scope="col ">Assigned To</th>
                        <th scope="col ">Date</th>
                        <th scope="col ">Comments</th>
                        <th scope="col ">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 0; ?>
                <?php foreach ($assign as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['taskname'] ?></td>
                        <td><?= $item['assignedto'] ?></td>
                        <td><?= $item['date'] ?></td>
                        <td><?= $item['comment'] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>