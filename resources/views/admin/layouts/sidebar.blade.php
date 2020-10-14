
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>

                    <a class="nav-link" href="{{url('/')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Interface</div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartment" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Departments
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDepartment" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            @if(isset(auth()->user()->role->permission['name']['department']['can-add']))
                                <a class="nav-link" href="{{route('department.create')}}">Create</a>
                            @endif
                            @if(isset(auth()->user()->role->permission['name']['department']['can-list']))
                                <a class="nav-link" href="{{route('department.index')}}">View</a>
                            @endif
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUser" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            <a class="nav-link collapsed" href="{{route('role.create')}}" data-toggle="collapse" data-target="#pagesCollapseRole" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Roles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseRole" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(isset(auth()->user()->role->permission['name']['role']['can-add']))
                                        <a class="nav-link" href="{{ route('role.create') }}">Create Role</a>
                                    @endif
                                    @if(isset(auth()->user()->role->permission['name']['role']['can-list']))
                                        <a class="nav-link" href="{{route('role.index')}}">View Role</a>
                                    @endif
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="{{route('users.create')}}" data-toggle="collapse" data-target="#pagesCollapseUser" aria-expanded="false" aria-controls="pagesCollapseError">
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseUser" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(isset(auth()->user()->role->permission['name']['user']['can-add']))
                                        <a class="nav-link" href="{{ route('users.create') }}">Create Employee</a>
                                    @endif
                                    @if(isset(auth()->user()->role->permission['name']['user']['can-list']))
                                        <a class="nav-link" href="{{route('users.index')}}">View Employee</a>
                                    @endif
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="{{route('permissions.create')}}" data-toggle="collapse" data-target="#pagesCollapsePermission" aria-expanded="false" aria-controls="pagesCollapseError">
                                Permissions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapsePermission" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(isset(auth()->user()->role->permission['name']['permission']['can-add']))
                                        <a class="nav-link" href="{{ route('permissions.create') }}">Create Permission</a>
                                    @endif
                                    @if(isset(auth()->user()->role->permission['name']['permission']['can-list']))
                                        <a class="nav-link" href="{{route('permissions.index')}}">View Permissions</a>
                                    @endif
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="{{route('leaves.create')}}" data-toggle="collapse" data-target="#pagesCollapseLeave" aria-expanded="false" aria-controls="pagesCollapseError">
                                Leaves
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseLeave" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('leaves.create') }}">Create Leave</a>
                                        <a class="nav-link" href="{{route('leaves.index')}}">View Leave</a>
{{--                                    @if(isset(auth()->user()->role->permission['name']['permission']['can-add']))--}}
{{--                                    @endif--}}
{{--                                    @if(isset(auth()->user()->role->permission['name']['permission']['can-list']))--}}
{{--                                    @endif--}}
                                </nav>
                            </div>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseRequisition" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Requisition
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseRequisition" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="">Create</a>
                            <a class="nav-link" href="">View</a>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{Auth()->user()->name}}
            </div>
        </nav>
    </div>
