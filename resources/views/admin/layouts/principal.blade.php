@include('admin.layouts.header')
@include('admin.layouts.menu')
<div class="container">
    <div class="mt-3">
        <h3>
            @yield('titulo1')
            <small class="text-muted">@yield('acao')</small>
        </h3>
    </div>
    {{-- Abaixo vamos colocar a parte principal que mudará para cada view --}}
    @yield('conteudo-principal')
</div> {{-- Container --}}
@include('admin.layouts.footer')
