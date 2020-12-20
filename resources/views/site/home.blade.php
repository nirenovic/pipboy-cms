@extends('layouts.site')
@section('content')
<div class="page-content">
    <div class="pop-up-container">
        <div class="pop-up">
            <span>Welcome to my pipboy web app.</span>
            <button>Start</button>
        </div>
    </div>
    <div class="pipboy-container">
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
                            <li class="item" item="{{ $item->id }}">
                                <span>
                                    {{ $item->name }}
                                    @if($item->qty > 1)
                                        ({{ $item->qty }})
                                    @endif
                                </span>
                            </li>
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
                            <ul class="item-stats {{ $item_type->name }}">
                                @switch($item_type->name)
                                    @case("weapons")
                                            <li><span>DAM&nbsp;</span><span>{{ $item->dmg }}</span></li>
                                            <li><span>WG&nbsp;</span><span>{{ $item->weight }}</span></li>
                                            <li><span>VAL&nbsp;</span><span>{{ $item->value }}</span></li>
                                            <li><span>CND&nbsp;</span><span>{{ $item->durability }}</span></li>
                                            <li>
                                                <span>{{ $item->ammo_type }}</span>
                                                @foreach($items as $type)
                                                    @if($type->name == "ammo")
                                                        @foreach($type->items as $ammo)
                                                            @if($ammo->name == $item->ammo_type)
                                                                @if($ammo->qty >= $item->mag_size)
                                                                    ({{ $item->mag_size }}/{{ $ammo->qty - $item->mag_size }})
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </li>
                                        @break
                                    @case("apparel")
                                        <li><span>DT&nbsp;</span><span>{{ $item->dmg_threshold }}</span></li>
                                        <li><span>WG&nbsp;</span><span>{{ $item->weight }}</span></li>
                                        <li><span>VAL&nbsp;</span><span>{{ $item->value }}</span></li>
                                        <li><span>EFFECTS</span><span>{{ $item->effect }}</span></li>
                                        @break
                                    @case("aid")
                                        <li class="filler"></li>
                                        <li><span>WG&nbsp;</span><span>{{ $item->weight }}</span></li>
                                        <li><span>VAL&nbsp;</span><span>{{ $item->value }}</span></li>
                                        <li><span>EFFECTS</span><span>{{ $item->effect }}</span></li>
                                        @break
                                    @case("misc")
                                        <li class="filler"></li>
                                        <li><span>WG&nbsp;</span><span>{{ $item->weight }}</span></li>
                                        <li><span>VAL&nbsp;</span><span>{{ $item->value }}</span></li>
                                        @break
                                    @case("ammo")
                                        <li class="filler"></li>
                                        <li><span>WG&nbsp;</span><span>{{ $item->weight }}</span></li>
                                        <li><span>VAL&nbsp;</span><span>{{ $item->value }}</span></li>
                                        <li><span>EFFECTS</span><span>{{ $item->effect }}</span></li>
                                        @break
                                    @default
                                @endswitch
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
    {{-- audio --}}
    <audio id="ui-static">
        <source src="{{ asset('sounds/pipboy/static/ui_static_d_02.wav') }}" type="audio/wav">
    </audio>
    <audio id="ui-focus">
        <source src="{{ asset('sounds/pipboy/ui/ui_menu_focus.wav') }}" type="audio/wav">
    </audio>
    <audio id="ui-ok">
        <source src="{{ asset('sounds/pipboy/ui/ui_menu_ok.wav') }}" type="audio/wav">
    </audio>
    <audio id="ui-tab">
        <source src="{{ asset('sounds/pipboy/ui/ui_pipboy_tab.wav') }}" type="audio/wav">
    </audio>
    <audio id="ui-hum">
        <source src="{{ asset('sounds/pipboy/ui_pipboy_hum_lp.wav') }}" type="audio/wav">
    </audio>
</div>
@endsection