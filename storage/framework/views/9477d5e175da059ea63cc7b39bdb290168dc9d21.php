

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>ESPECIALIDADES</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('especialidad.create')); ?>" title="Create a product"> <i class="fas fa-plus-circle"> Nuevo</i>
                    </a>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <table class="table  table-bordered table-responsive-lg" id="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Especialidad</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($s->id); ?> </td>
                            <td><?php echo e($s->name); ?></td>
                            <td><?php echo e($s->description); ?></td>
                            <td align="center" width="10%"> <form action="" method="POST">
                                <a href="<?php echo e(route('especialidad.edit',$s->id)); ?>" title="Editar"><i class="fas fa-edit"></i></a>
        
                                <?php echo csrf_field(); ?>
                                
                            </form></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        
            
        </div>
    </div>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

  <script>
         $('#data-table').DataTable({
             responsive:true,
             autowidth: false,
             "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No hay resultados",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrando de _MAX_ registros)",
                "search": "Buscar",
                "paginate":{
                    "next":"Siguiente",
                    "previous": "Anterior"
                }
            }
         });
    </script>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\dent\resources\views/administration/specialty/index.blade.php ENDPATH**/ ?>