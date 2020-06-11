<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Motorista - La Trailera</title>
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

    <script src="validaciones/validar.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#eliminar').click(function(){
                swal.fire({
                    type:"question",
                    title:"¿Desea eliminar registro?",
                    text:"No se prodrá recuperar el registro",
                    showCancelButton:true,
                    cancelButtonColor:"red",
                    ShowConfirmButton:"green",
                    confirmButtonText:"Sí, eliminar"
                }).then((result)=>{
                    if(result.value) {
                        $('#d1').append("<input type='hidden' name='eliminar'>");
                        $('#f').submit();
                    }
                });
            });
        });
    </script>
</head>
<body>
    <header class="flex"> 
    <div class="bg md:flex md:justify-between md:px-2 md:py-1 md:items-center w-screen">
        <div class="flex items-center justify-between px-2 py-1 md:px-0 md:py-0">
            <div class="flex items-center">
                <a href="../index.php"><img class="h-12" src="img/logo/Logo-LaTrailera2.svg" alt="Logo La Trailera"></a>
            </div>
            <a href="../index.php"><h1 class="text-white text-2xl font-bold">LA TRAILERA</h1></a>
            <div class="md:hidden">
                <button  type="button" class="block text-white focus:outline-none hover:text-gray-400" onclick="menu()">
                    <svg id="cerrar" style="display: none;" class="h-6 w-6 fill-current bi bi-x-octagon" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/></svg>

                    <svg id="abrir" class="h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>					
            </div>
        </div>
            <div id="opciones" class="hidden px-1 pb-1 md:flex md:p-0">
            <a href="#" class="block px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200">Inicio</a>
                <a href="controlEnvio.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Envios</a>
                <a href="controlCarga.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Carga</a>
                <a href="controlRuta.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Ruta</a>
                <a href="controlVehiculo.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Vehiculo</a>
                <a href="controladorMotorista.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Motorista</a>
                <a href="controlCliente.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cliente</a>
                <a href="controlEmpleado.php" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Empleado</a>
                <a href="controladorMotorista.php?c=1" class="block mt-1 px-2 text-white font-semibold rounded hover:text-gray-800 hover:bg-gray-200 md:mt-0 md:ml-2">Cerrar Sesión</a>
                <div class="block mt-1 px-2 text-gray-800 bg-yellow-500 font-semibold rounded md:mt-0 md:ml-2">Usuario: <span id="userName" class="underline"></span></div>
            </div>
        </div>
    </header>
    <div class="text-center">
        <span class="font-bold text-4xl">Gestión Motorista</span>
    </div>
<center>
    <section>
        <div class="container">
                <form action="#" id="f" onsubmit="return validar(this);" class="px-16 py-4 border-4 border-gray-600 rounded-lg">
                <center>
                    <div class='w-full md:w-1/2'>
                        <span class="font-bold text-xl">ID</span>
                        <input type="text" name="idMotorista" id="idMotorista" class="bg-gray-400 focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" readonly="true" required="true"><br>
                    </div>
                </center>    
                <div class="md:flex">
                    <div class='w-full md:w-1/2'>
                        <span class="font-bold text-xl">Nombre</span>
                        <input type="text" name="nombre" id="nombre" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                        <span class="font-bold text-xl">Apellido</span>
                        <input type="text" name="apellido" id="apellido" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                        <span class="font-bold text-xl">Direccion</span>
                        <input type="text" name="direccion" id="direccion" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true"><br>
                    </div>
                    <div class='w-full md:w-1/2 md:ml-2'>
                        <span class="font-bold text-xl">DUI</span>
                        <input type="text" name="dui" id="dui" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true" placeholder="00000000-0"><br>
                        <span class="font-bold text-xl">NIT</span>
                        <input type="text" name="nit" id="nit" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true" placeholder="0000-000000-000-0"><br>
                        <span class="font-bold text-xl">Numero de Licencia</span>
                        <input type="text" name="numLicencia" id="numLicencia" class="bg-white focus:outline-none focus:shadow-outline border-2 border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal font-bold" required="true" placeholder="0000-000000-000-0"><br>
                    </div>
                </div>
                <input type="reset"  class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded" value="Nuevo" onclick="$('#g').attr('disabled',false);desactivar()">
                <input type="submit" name="insertar" id="g" value="Guardar" class="bg-blue-400 text-white text-xl mt-2 py-1 px-2 rounded cursor-not-allowed" disabled='true'>
                <input type="submit" name="modificar" value="Modificar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                <input type="button" id="eliminar" name="eliminar" value="Eliminar" class="bg-blue-700 hover:bg-red-800 text-white text-xl mt-2 py-1 px-2 rounded">
                </form>
                 <br>

                <div class='container'>
                    <table class="table-auto">
                            <thead>
                                    <th class='text-center text-white bg px-4 py-2'>ID</th>
                                    <th class='text-center text-white bg px-4 py-2'>Nombre</th>
                                    <th class='text-center text-white bg px-4 py-2'>Apellido</th>
                                    <th class='text-center text-white bg px-4 py-2'>Direccion</th>
                                    <th class='text-center text-white bg px-4 py-2'>Dui</th>
                                    <th class='text-center text-white bg px-4 py-2'>Nit</th>
                                    <th class='text-center text-white bg px-4 py-2'>NumLicencia</th>
                                    <th class='text-center text-white bg px-4 py-2'>Acción</th>
                            </thead>
                            <tbody>
                                <?php  
                                foreach ($datos as $e) {
                                    $idMotorista=$e->getIdMotorista();
                                    $nombre=$e->getNombre();
                                    $apellido=$e->getApellido();
                                    $direccion=$e->getDireccion();
                                    $dui=$e->getDui();
                                    $nit=$e->getNit();
                                    $numLicencia=$e->getNumLicencia();

                                    echo "<tr>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2 font-bold'>$idMotorista</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nombre</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$apellido</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$direccion</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$dui</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$nit</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>$numLicencia</td>
                                            <td class='border-b-4 border-gray-600 rounded-lg text-center px-4 py-2'>
                                                <button onclick=$('#idMotorista').val('$idMotorista');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#direccion').val('$direccion');$('#dui').val('$dui');$('#nit').val('$nit');$('#numLicencia').val('$numLicencia') class='bg-blue-700 hover:bg-red-800 text-white py-1 px-4 rounded'>Editar</button>
                                            </td>
                                        </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </section>
</center>
    <footer>
    </footer>
    <script>
            function desactivar(){
                var btn = document.getElementById('g');
                btn.classList.remove('cursor-not-allowed','bg-blue-400');
                btn.classList.add('bg-blue-700','hover:bg-red-800');
            }
            // Menu
            document.getElementById('userName').innerHTML=sessionStorage.getItem("user");
            var isOpen=false;
            var opciones = document.getElementById('opciones');
            function menu(){
                if(!isOpen){
                    document.getElementById('cerrar').style='display:block;';
                    document.getElementById('abrir').style='display:none;';
                    opciones.classList.remove('hidden');
                    isOpen=true;
                }
                else{
                    document.getElementById('abrir').style='display:block;';
                    document.getElementById('cerrar').style='display:none;';
                    opciones.classList.add('hidden');
                    isOpen=false;
                }
            }
        </script>
</body>
</html>