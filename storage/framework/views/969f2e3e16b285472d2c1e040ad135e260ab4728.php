<?php $__env->startSection('title','Detail Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Mahasiswa</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($student->nama); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student->nrp); ?></h6>
                        <p class="card-text"><?php echo e($student->email); ?></p>
                        <p class="card-text"><?php echo e($student->jurusan); ?></p>

                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="/students" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/danialsyafiq/Code/PHP/LaravelPro/resources/views/students/show.blade.php ENDPATH**/ ?>