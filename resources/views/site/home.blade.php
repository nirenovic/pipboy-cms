@extends('layouts.site')
@section('content')
<div class="page-content">
    <div class="pipboy-container" style="cursor: url('{{ asset('img/cursor.cur') }}'), auto;">
        <div class="pipboy">
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
                            <li class="item" item="{{ $item->id }}"><span>{{ $item->name }}</span></li>
                            @endforeach
                        </ul>
                        @foreach($item_type->items as $item)
                        <div class="item-details" item="{{ $item->id }}">
                            @switch($item_type->name)
                                @case("weapons")
                                    <div class="item-image">
                                        <img src="{{ asset('img/placeholder_weapon.png') }}" alt="">
                                    </div>
                                    @break
                                @case("apparel")
                                    <div class="item-image">
                                        <img src="{{ asset('img/placeholder_apparel.png') }}" alt="">
                                    </div>
                                    @break
                                @case("aid")
                                    <div class="item-image">
                                        <img src="{{ asset('img/placeholder_aid.png') }}" alt="">
                                    </div>
                                    @break
                                @case("misc")
                                    <div class="item-image">
                                        <img src="{{ asset('img/placeholder_misc.png') }}" alt="">
                                    </div>
                                    @break
                                @case("ammo")
                                    <div class="item-image">
                                        <img src="{{ asset('img/placeholder_ammo.png') }}" alt="">
                                    </div>
                                    @break
                                @default
                                <div class="item-image"></div>
                            @endswitch
                            <ul class="item-stats">
                                @if($item_type->name == "weapons")
                                <li><span>DPS&nbsp;</span><span>{{ round($item->dmg*$item->fire_rate, 1) }}</span></li>
                                <li><span>V/W&nbsp;</span><span>{{ round($item->value/$item->weight, 0) }}</span></li>
                                <li><span>STR&nbsp;</span><span>{{ $item->str_req }}</span></li>
                                <li><span>DAM&nbsp;</span><span>{{ $item->dmg }}</span></li>
                                @endif
                                <li><span>WG&nbsp;</span><span>{{ $item->weight }}</span></li>
                                <li><span>VAL&nbsp;</span><span>{{ $item->value }}</span></li>
                                @if($item_type->name == "weapons")
                                <li><span>CND&nbsp;</span><span>{{ $item->durability }}</span></li>
                                <li><span>E Cell (32/43)</span></li>
                                @endif
                                <li><span></span><span></span></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
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