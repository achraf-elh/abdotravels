@role('admin')
                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Abdou<sup>Travels</sup></div>
                    </a>
        
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">
        
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/dashboard')}}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>
        
                    <!-- Divider -->
                    <hr class="sidebar-divider">
        
                    <!-- Heading --> 
                    @role('admin')

                    <div class="sidebar-heading">
                        Administration des trajets
                    </div>
                   
                    <!-- Nav Item - Pages Collapse Menu ville -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-city"></i>
                            <span>Villes</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Les villes :</h6>
                                <a class="collapse-item" href="{{url('villes/create')}}"><i class="fas fa-plus"></i>Ajouter</a>
                                <a class="collapse-item" href="{{url('villes/index')}}"><i class="fas fa-list"></i>Listes</a>
                            </div>
                        </div>
                    </li>
                    @endrole
                    <!-- Nav Item - Utilities Collapse Menu -->
                    @role('admin')
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                            aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="fas fa-fw fa-route"></i>
                            <span>Voyages</span>
                        </a>
                        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Les voyages :</h6>
                                <a class="collapse-item" href="{{url('voyages/create')}}"><i class="fas fa-plus"></i>Ajouter</a>
                                <a class="collapse-item" href="{{url('voyages/index')}}"><i class="fas fa-list"></i>Listes</a>
                            </div>
                        </div>
                    </li>
                    @endrole
                    @role('admin')
                    
                    @endrole   
                    <!-- Divider -->
                    {{-- <hr class="sidebar-divider"> --}}
        
                    <!-- Heading -->
                    {{-- <div class="sidebar-heading">
                        Addons
                    </div> --}}
        
                    <!-- Nav Item - Roles Collapse Menu -->
                    @role('admin')
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        Roles & Permissions
                    </div>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRoles"
                            aria-expanded="true" aria-controls="collapseRoles">
                            <i class="fas fa-fw fa-user-shield"></i>
                            <span>Rôles</span>
                        </a>
                        <div id="collapseRoles" class="collapse" aria-labelledby="headingRoles" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Les rôles :</h6>
                                <a class="collapse-item" href="{{url('/admin/roles/create')}}"><i class="fas fa-plus"></i>Ajouter</a>
                                <a class="collapse-item" href="{{ route('admin.roles.index') }}"><i class="fas fa-list"></i>Listes</a>
                            </div>
                        </div>
                    </li>
                    @endrole
        
                    <!-- Nav Item - Charts -->
                    @role('admin')

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/users')}}">
                            <i class="fas fa-user-shield"></i>
                            <span>Utilisateurs</span></a>
                    </li>
                    @endrole
        
                    <!-- Nav Item - Tables -->
                    @role('admin')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.permissions.index')}}">
                            <i class="fas fa-fw fa-lock"></i>
                            <span>Permissions</span></a>
                    </li>
                    @endrole
        
                    <!-- Divider -->
                    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}
        
                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
        
                </ul>
                <!-- End of Sidebar -->
@endrole