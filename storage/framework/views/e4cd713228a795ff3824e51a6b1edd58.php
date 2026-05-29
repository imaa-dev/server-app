<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aprobación de Repuesto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        .detalle {
            margin: 20px 0;
        }
        .detalle p {
            font-size: 16px;
        }
        .precio {
            font-size: 20px;
            font-weight: bold;
        }
        .acciones {
            margin-top: 30px;
            text-align: center;
        }
        .btn {
            padding: 12px 20px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            margin: 0 10px;
            display: inline-block;
        }
        .btn-aprobar {
            background-color: #28a745;
        }
        .btn-rechazar {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Solicitud de Aprobación</h1>

    <p>Estimado cliente, por favor revise los detalles del repuesto antes de aprobar:</p>

    <div class="detalle">
        <?php $__currentLoopData = $service->spareparts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sparepart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>
                <strong>Tipo de repuesto:</strong> <?php echo e($sparepart['brand']); ?>

            </p>
            <p class="precio">
                <strong>Precio:</strong> $<?php echo e(number_format($sparepart['price'], 2)); ?>

            </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="acciones">
        <a href="<?php echo e($urls['approve']); ?>" class="btn btn-aprobar">
            Aprobar
        </a>

        <a href="<?php echo e($urls['reject']); ?>" class="btn btn-rechazar">
            Rechazar
        </a>
    </div>


    <p style="margin-top:30px; font-size:14px; color:#666;">
        Este enlace es personal y solo puede utilizarse una vez.
    </p>
</div>

</body>
</html>
<?php /**PATH /home/mauri/unknown/tallerapp/server-app/resources/views/spare-parts/spare-parts.blade.php ENDPATH**/ ?>