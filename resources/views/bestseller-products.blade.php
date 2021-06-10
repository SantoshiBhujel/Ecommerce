<div class="block-sidebar block-sidebar-categorie">
    <div class="block-title">
        <strong>PRODUCT TYPES</strong>
    </div>
    <div class="block-content">
        <ul class="items">
            @foreach ($menus as $menu )
                <li class="parent">
                    <a href="{{ route('categoryByMenu',['name' => $menu->name, 'id' => $menu->id]) }}">{{ $menu->name }}</a>
                    <span class="toggle-submenu"></span>
                    <ul class="subcategory">
                        @foreach ($menu->submenus as $submenu)
                            <li><a href="{{ route('categoryBySubmenu',['submenu' => $submenu->name, 'id' => $submenu->id]) }}">{{ $submenu->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>