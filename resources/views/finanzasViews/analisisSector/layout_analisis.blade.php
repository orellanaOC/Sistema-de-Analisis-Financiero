@extends('layouts.app', ['pageSlug' => 'analisis'])

@section('content')
    <div class="row">
        <div class="col-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a href="{{ route('analisis_horizontal.index') }}" @if ($pageSlug == 'analisis_horizontal') class="nav-item nav-link navbarCustom" @else class="nav-item nav-link" @endif >Análisis Horizontal</a>
                    <a href="{{ route('analisis_vertical.index') }}" @if ($pageSlug == 'analisis_vertical') class="nav-item nav-link navbarCustom" @else class="nav-item nav-link" @endif >Análisis Vertical</a>
                    <a href="{{ route('ratio.individual_padre') }}" @if ($pageSlug == 'ratios') class="nav-item nav-link navbarCustom" @else class="nav-item nav-link" @endif >Ratios</a>
                    <a href="{{ route('ratio_sector.padre') }}" @if ($pageSlug == 'ratios_sector') class="nav-item nav-link navbarCustom" @else class="nav-item nav-link" @endif >Ratios por sector</a>
                </div>
            </nav>
            @yield('contenido_navbar')		  		
	
        </div>
    </div>
    
@endsection