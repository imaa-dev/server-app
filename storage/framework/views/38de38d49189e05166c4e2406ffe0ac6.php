<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicio en reparación final</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color:#f5f5f5; padding:20px;">

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table width="600" cellpadding="20" cellspacing="0" style="background-color:#ffffff; border-radius:6px;">

                <!-- Encabezado -->
                <tr>
                    <td style="background-color:#0d6efd; color:#ffffff; text-align:center; border-radius:6px 6px 0 0;">
                        <h2 style="margin:0;">🔧 Servicio en reparación final</h2>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td>
                        <p>Estimado/a <strong><?php echo e($service->client->name); ?></strong>,</p>

                        <p>
                            Le informamos que su servicio de reparación ha entrado en la
                            etapa de <strong>reparación final</strong>.
                        </p>

                        <hr>

                        <!-- Datos del cliente -->
                        <h3>👤 Datos del cliente</h3>
                        <p>
                            <strong>Nombre:</strong> <?php echo e($service->client->name); ?><br>
                            <strong>Email:</strong> <?php echo e($service->client->email); ?><br>
                            <strong>Teléfono:</strong> <?php echo e($service->client->phone); ?>

                        </p>

                        <hr>

                        <!-- Datos del servicio -->
                        <h3>🛠 Detalles del servicio</h3>
                        <p>
                            <strong>N° de servicio:</strong> <?php echo e($service->id); ?><br>
                            <strong>Estado actual:</strong> Reparación final<br>
                            <strong>Fecha de ingreso:</strong> <?php echo e($service->created_at->format('d/m/Y')); ?>

                        </p>
                        <hr>

                        <p>
                            En breve nos pondremos en contacto con usted para informarle
                            sobre la entrega del equipo.
                        </p>

                        <p style="margin-top:30px;">
                            Saludos cordiales,<br>
                            <strong><?php echo e(config('app.name')); ?></strong>
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="text-align:center; font-size:12px; color:#777;">
                        © <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. Todos los derechos reservados.
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
<?php /**PATH /home/mauri/unknown/tallerapp/server-app/resources/views/emails/notify_client_repair.blade.php ENDPATH**/ ?>