<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios Cliente - La Trailera</title>
    <!--Dependencias-->
    <!-- <link rel="stylesheet" type="text/css" href="dependencias/bootstrap/css/bootstrap.css"> -->
    <script type="text/javascript" src="dependencias/jquery.js"></script>
    <!-- <script type="text/javascript" src="dependencias/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="dependencias/sweetalert2.all.min.js"></script>
    <!-- Tailwind -->
    <link rel="stylesheet" href="dependencias/tailwind.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/menu.css">
    <!--Logo-->
    <link rel="icon" type="image/png" href="img/logo/Logo-LaTrailera.png">
</head>
<body>
    <?php
        $currentPage='Envios';
        require 'menu/menucliente.php';
    ?>
    
    <div class="text-center">
        <span class="font-bold text-4xl">Envios</span>
    </div>
    <center>
    <section>
        <div class="container">               
            <div class="px-16 py-4 border-4 border-gray-600 rounded-lg">
            <form action="#" method="POST" id="f">
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">ID Envio</span>
                            <input type="text" name="idEnvio" id="idEnvio" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">Fecha Realización</span>
                            <input type="date" name="fechaRealizacion" id="fechaRealizacion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required readonly="true">
                        </div> 
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">Fecha Entrega</span>
                            <input type="date" name="fechaEntrega" id="fechaEntrega" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required readonly="true"> 
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="w-full md:w-1/2">
                            <span class="font-bold text-xl">Usario de Cliente que solicito envio</span>
                            <input type="text" name="usuarioCli" id="usuarioCli" value="<?php echo $_SESSION["cliente"];?>" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div> 
                        <div class="w-full md:w-1/2 md:ml-2">
                            <span class="font-bold text-xl">Usuario Empleado que tomo Envio</span>
                            <input type="text" name="usuarioEmp" id="usuarioEmp" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true">
                        </div>
                    </div>
                    
                <br>
            
                    <!---->
                     <br>
            </form>
            <div class="w-full md:w-1/2">
                <form action='controlDetalleEnvio.php' method='GET'> 
                        <input type="hidden" name='idEnvioD' id='idEnvioD'>
                        <input type='submit' class='bg-blue-700 hover:bg-red-800 text-white text-xl py-1 px-4 rounded' name='btnDetalleEnvio' value="Ver Detalle de Envio">
                </form>
            </div>
            </div>
        </div>
               
        <br>
            <table class="table-auto">
                    <thead>
                        <tr>
                            <th class='text-center text-white bg px-4 py-2'>ID</th>
                            <th class='text-center text-white bg px-4 py-2'>Fecha Realización</th>
                            <th class='text-center text-white bg px-4 py-2'>Fecha Entrega</th>
                            <th class='text-center text-white bg px-4 py-2'>Usuario Empleado</th>
                            <th class='text-center text-white bg px-4 py-2'>Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($datos as $e) {
                                $idEnvio=$e->getIdEnvio();
                                $fechaRealizacion=$e->getFechaRealizacion();
                                $fechaEntrega=$e->getFechaEntrega();
                                $idCliente=$e->getIdCliente();
                                $idEmpleado=$e->getIdEmpleado();
                                $usuarioCli=$e->getusuarioCli();
                                $usuarioEmp=$e->getusuarioEmp();
                                $idUsuarioCli=$e->getIdUsuarioCli();
                                $idUsuarioEmp=$e->getIdUsuarioEmp();

                                
                                echo "
                                    <tr>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center font-bold px-4 py-2'>$idEnvio</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$fechaRealizacion</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$fechaEntrega</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$usuarioEmp</td>
                                        <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
                                            <button onclick=$('#idEnvio').val('$idEnvio');$('#fechaRealizacion').val('$fechaRealizacion');$('#fechaEntrega').val('$fechaEntrega');$('#usuarioEmp').val('$usuarioEmp');$('#idEnvioD').val('$idEnvio'); class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded' id='editarbtn'>Editar</button>    
                                            </td>
                                        
                                    </tr>";
                            }
                            
                        ?>
                    </tbody>
                </table> 
    </section>
</center>
    <footer></footer>
</body>
</html>