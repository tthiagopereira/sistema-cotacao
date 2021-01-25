<div class="sidebar">

    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                @can('view', \App\User::class)
                    <a class="nav-link" href="/"><i class="icon-speedometer"></i> Página Inicial </a>
                @endcan
            </li>
            <li class="nav-title">
                Menu
            </li>

            @can('viewPermissao', \App\User::class)
                @can('Administrador', \App\User::class)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}"><i class="icon-people"></i> Ger de usuários</a>
                    </li>
                @endcan
{{--                @can('view', \App\User::class)--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('talento') }}"><i class="fa fa-drivers-license"></i> Recrutar--}}
{{--                            Talentos</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('empresa') }}"><i class="icon-briefcase"></i> Empresas</a>--}}
{{--                    </li>--}}
{{--                @endcan--}}
{{--                @can('view', \App\User::class)--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('talento') }}"><i class="icon-bag"></i> Recrutamentos</a>--}}
{{--                    </li>--}}
{{--                @endcan--}}
{{--                @can('Administrador', \App\User::class)--}}
{{--                    <li class="nav-item nav-dropdown">--}}
{{--                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-settings"></i> Configuração</a>--}}
{{--                        <ul class="nav-dropdown-items">--}}

{{--                            <li class="nav-item nav-dropdown">--}}
{{--                                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-bookmark-o"></i> Cursos</a>--}}
{{--                                <ul class="nav-dropdown-items">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('cursos') }}"><i class="icon-graduation"></i> Cursos--}}
{{--                                            Academicos</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('curso.livre') }}"><i class="icon-book-open"></i>--}}
{{--                                            Cursos Livres</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('curso.certificacao') }}"><i--}}
{{--                                                class="fa fa-certificate"></i> Certificação</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('categoria.motorista') }}"><i class="fa fa-car"></i>--}}
{{--                                            Carteiras</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('curso.idioma') }}"><i class="fa fa-slideshare"></i>--}}
{{--                                            Idiomas</a>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('om') }}"><i class="fa fa-globe"></i> OMs</a>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('uf') }}"><i class="icon-map"></i> Cidades</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('formacao.militar') }}"><i class="icon-target"></i> Formação--}}
{{--                                    Militar</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('area.atuacao') }}"><i class="fa fa-adn"></i>--}}
{{--                                    Área de atuação</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('habilidade') }}" class="nav-link"><i class="fa fa-street-view"></i>--}}
{{--                                    Habilidade</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                @endcan--}}
            @endcan

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>

</div>
