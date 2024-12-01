 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 
 <!-- Sidebar - Brand -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=" fas fa-solid fa-binoculars"></i>
                </div>
                

                <div class="sidebar-brand-text mx-3">Yordany <sup>2</sup></div>
            </a>

            <!-- Divider  linea gris separadora--> 
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider my-0">
           

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestión de Productos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pepito"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Gestión de Inventario</span>
                </a>
                <div id="pepito" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inventario</h6>
                        <a class="collapse-item" href="nuevoproducto.php">Nuevo Producto</a>
                        <a class="collapse-item" href="mostrarproducto.php">Mostrar Producto</a>
                        <a class="collapse-item" href="editarproducto.php">Editar Producto</a>
                        <a class="collapse-item" href="eliminarproducto.php">Eliminar Producto</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu2"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-solid fa-user-tag"></i>
                    <span>Categoría y Proveedores</span>
                </a>
                <div id="menu2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión de Inventario</h6>
                        <a class="collapse-item" href="#">Control de Categoría</a>
                        <a class="collapse-item" href="#">control de Proveedor</a>
                     
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Movimientos de Inventario
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu3"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Movimientos</span>
                </a>
                <div id="menu3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestiones de Movimientos</h6>
                        <a class="collapse-item" href="#">Entrada de Producto</a>
                        <a class="collapse-item" href="#">Salida de Producto</a>
                        <a class="collapse-item" href="#">Consulta de Movimientos</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reportes</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="controlusuario.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Control de Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->