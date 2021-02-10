<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ProjetoBuraco - @yield('title')</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Projeto Buraco - @yield('title')</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('login.logout') }}">Sair</a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                            <a class="nav-link" href="{{ route('dashboard.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface do Usuário</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsereclamacao" aria-expanded="false" aria-controls="collapsereclamacao">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reclamações
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsereclamacao" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('reclamacoes.create')}}">Criar uma reclamação</a>
                                    <a class="nav-link" href="{{ route('reclamacoes.index')}}">Reclamações em Aberto</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Reclamações encerradas</a>
                                </nav>
                            </div>
  
                            <div class="sb-sidenav-menu-heading">Interface do Administrador<div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseadmin" aria-expanded="false" aria-controls="collapseadmin">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Funcionarios
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseadmin" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{route('employees.create')}}" >Criar um novo funcionario</a>
                                        <a class="nav-link" href="{{route('reclamacoes.agendamento')}}">Agendar uma reclamação</a>
                                        <a class="nav-link" href="{{ route('usuarios.index')}}">Lista de usuarios no sistema</a>
                                    </nav>
                                </div>                               
                    </div>
                    <div class="sb-sidenav-footer text-white">
                        <div class="small">Logado como:</div>
                        {{ auth()->user()->nome }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Projeto Buraco 2020</div>
                            <div>
                                <a href="#">Política de Privacidade</a>
                                &middot;
                                <a href="#">Termos &amp; Condições</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
       
        
        
        
        
        <script src="{{asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('js/scripts.js') }}"></script>    

        @yield('js')
    </body>
</html>
