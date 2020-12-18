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
                    @foreach($items as $item_type)
                    <div class="view-panel" for="{{ $item_type->name }}">
                        <ul class="item-list">
                            @foreach($item_type->items as $item)
                            <li class="item"><span>{{ $item->name }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    <?php
                    /*
                    <div class="view-panel active" for="weapon_items">
                        <ul class="item-list">
                            @foreach($weapon_items as $weapon_item)
                            <li class="item"><span>{{ $weapon_item->name }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="view-panel" for="apparel_items">
                        <ul class="item-list">
                            @foreach($apparel_items as $apparel_item)
                            <li class="item"><span>{{ $apparel_item->name }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="view-panel" for="aid_items">
                        <ul class="item-list">
                            @foreach($aid_items as $aid_item)
                            <li class="item"><span>{{ $aid_item->name }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="view-panel" for="misc_items">
                        <ul class="item-list">
                            @foreach($misc_items as $misc_item)
                            <li class="item"><span>{{ $misc_item->name }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="view-panel" for="ammo_items">
                        <ul class="item-list">
                            @foreach($ammo_items as $ammo_item)
                            <li class="item"><span>{{ $ammo_item->name }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    */
                    ?>
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