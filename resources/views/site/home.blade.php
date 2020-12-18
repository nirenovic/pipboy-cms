@extends('layouts.site')
@section('content')
<div class="page-content">
    <div class="pipboy-container">
        <div class="pipboy" style="cursor: url('{{ asset('img/cursor.cur') }}'), auto;">
            <div class="overlay" style="background-image: url('{{ asset('img/scanlines.png') }}');"></div>
            <div class="pipboy-screen">
                <div class="view-panel">
                    <ul class="item-list">
                        <li class="item"><span>.357 Magnum Revolver</span></li>
                        <li class="item"><span>.44 Magnum Revolver</span></li>
                        <li class="item"><span>10mm Submachine Gun</span></li>
                        <li class="item"><span>12.7mm Submachine Gun</span></li>
                        <li class="item"><span>Machete</span></li>
                    </ul>
                </div>
                <ul class="menu-bar">
                    <li class="active" for="weapons"><span>Weapons</span></li>
                    <li for="apparel"><span>Apparel</span></li>
                    <li for="aid"><span>Aid</span></li>
                    <li for="misc"><span>Misc</span></li>
                    <li for="ammo"><span>Ammo</span></li>
                </ul>
            </div>
        </div>
    <div>
</div>
@endsection