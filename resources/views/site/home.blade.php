@extends('layouts.site')
@section('content')
<div class="page-content">
    <div class="pipboy-container">
        <div class="pipboy" style="cursor: url('{{ asset('img/cursor.cur') }}'), auto;">
            <div class="overlay" style="background-image: url('{{ asset('img/scanlines.png') }}');"></div>
            <div class="pipboy-screen">
                <ul class="header-bar">
                    <li><span class="panel-heading">Items</span></li>
                    <li><span>Wg&nbsp;</span><span>94/245</span></li>
                    <li><span>HP&nbsp;</span><span>485/485</span></li>
                    <li><span>DT&nbsp;</span><span>16.0</span></li>
                    <li><span>Caps</span><span>115240</span></li>
                </ul>
                <div class="view-panel-container">
                    <div class="view-panel active" for="weapons">
                        <ul class="item-list">
                            <li class="item"><span>.357 Magnum Revolver</span></li>
                            <li class="item"><span>.44 Magnum Revolver</span></li>
                            <li class="item"><span>10mm Submachine Gun</span></li>
                            <li class="item"><span>12.7mm Submachine Gun</span></li>
                            <li class="item"><span>Machete</span></li>     
                        </ul>
                    </div>
                    <div class="view-panel" for="apparel">
                        <ul class="item-list">
                            <li class="item"><span>Dirty Pre-War Businesswear</span></li>
                            <li class="item"><span>Naughty Nightwear</span></li>
                            <li class="item"><span>Shady Hat</span></li>
                            <li class="item"><span>Tortiseshell Glasses</span></li>
                            <li class="item"><span>Vault 101 Utility Jumpsuit</span></li>
                        </ul>
                    </div>
                    <div class="view-panel" for="aid">
                        <ul class="item-list">
                            <li class="item"><span>Lad's Life</span></li>
                            <li class="item"><span>Rad-X</span></li>
                            <li class="item"><span>Radaway</span></li>
                            <li class="item"><span>Radscorpion Meat</span></li>
                            <li class="item"><span>Stimpak</span></li>
                        </ul>
                    </div>
                    <div class="view-panel" for="misc">
                        <ul class="item-list">
                            <li class="item"><span>Misc items here</span></li>
                        </ul>
                    </div>
                    <div class="view-panel" for="ammo">
                        <ul class="item-list">
                            <li class="item"><span>Ammo items here</span></li>
                        </ul>
                    </div>
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