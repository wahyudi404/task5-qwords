@props(['menus'])

<nav id="navbar" class="bg-white fixed w-full py-5 max-h-screen overflow-y-auto lg:overflow-visible z-50 transition duration-100">
    <div class="container px-4 lg:px-0 mx-auto flex justify-between items-center">
        <div class="flex justify-start items-center gap-8">
            <a href="/">
                <img src="{{ asset('images/brand-logo.png') }}" alt="">

            </a>

            {{-- Dekstop --}}
            <ul class="hidden lg:flex justify-start items-center gap-6 lg:gap-8">
                @foreach ($menus as $menu)
                    <li class="relative group">
                        <a href="javascript:;" class="flex items-center gap-1.5">
                            <span class="text-textColor">{{ $menu['title'] }}</span>
                            <span class="group-hover:-rotate-180 group-hover:opacity-40 transition-default">
                                <x-icons.caret-down-outline class="ionicon w-4 h-4 text-gray-600" />
                            </span>
                        </a>

                        {{-- Dropdown --}}
                        <div
                            class="hidden hover:flex group-hover:flex flex-wrap gap-2 w-max max-w-[24em] max-h-[32em] overflow-y-auto border absolute top-full left-0 bg-white shadow p-3 rounded-lg">
                            @foreach ($menu['list'] as $list)
                                <a href="#"
                                    class="w-full flex justify-start items-center gap-2 rounded-xl p-2.5 hover:bg-secondary transition-default">
                                    <img src="{{ asset($list['img_url']) }}" class="w-10" alt="">
                                    <div class="text-textColor">
                                        <h1 class="font-semibold text-sm">{{ $list['title'] }}</h1>
                                        <p class="font-normal text-xs">{{ $list['desc'] }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        {{-- end Dropdown --}}
                    </li>
                @endforeach
            </ul>
            {{-- Dekstop --}}

        </div>

        <ul class="flex justify-start items-center gap-2 md:gap-6">
            <li>
                <a href="#"
                    class="block text-textColor bg-transparent p-2 rounded-full transition-default hover:bg-secondary hover:text-primary hover:shadow">
                    <x-icons.gift-icon />
                </a>
            </li>
            <li>
                <a href="#"
                    class="block px-6 py-2 border border-primary rounded-[20px] text-primary text-base font-normal  hover:shadow-lg hover:bg-primary hover:text-white transition-default">
                    Login
                </a>
            </li>
            <li>
                <span onclick="onMenuMobileToggle()" id="humberger-menu" class="block lg:hidden cursor-pointer">
                    <x-icons.bars-3 />
                </span>
            </li>
        </ul>

    </div>

    {{-- Mobile --}}
    <ul class="menu-mobile container mx-auto flex lg:hidden flex-col justify-center items-start">
        @foreach ($menus as $index => $menu)
            <li class="w-full px-5 py-2.5 hover:bg-secondary rounded-lg overflow-hidden transition-all-default">
                <a href="#" onclick="onMenuListToggleMobile({{ $index }})"
                    class="w-full submenu flex justify-between items-center font-medium text-base">
                    <span>{{ $menu['title'] }}</span>
                    <span class="chevron-mobile transition-default">
                        <x-icons.chevron-down class="w-6 h-6" />
                    </span>
                </a>

                {{-- dropdown --}}
                <ul class="menu-list">
                    @foreach ($menu['list'] as $list)
                        <li class="group">
                            <a href="#"
                                class="flex justify-start items-center gap-2 rounded-xl p-2.5 group-hover:bg-white transition-default">
                                <img src="{{ asset($list['img_url']) }}" class="w-10" alt="">
                                <div class="text-textColor">
                                    <h1 class="font-semibold text-sm">{{ $list['title'] }}</h1>
                                    <p class="font-normal text-xs">{{ $list['desc'] }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                {{-- end dropdown --}}
            </li>
        @endforeach
    </ul>
</nav>

<script>
    const menuList = document.querySelectorAll('.menu-list');
    const submenu = document.querySelectorAll('.submenu');
    const chevronMobile = document.querySelectorAll('.chevron-mobile');
    const menuMobile = document.querySelector('.menu-mobile');
    const humbergerMenu = document.getElementById('humberger-menu');

    function onMenuListToggleMobile(idx) {
        menuList.forEach((element, index) => {
            if (index != idx) {
                element.classList.remove('show')
            }
        });
        menuList[idx].classList.toggle('show')

        chevronMobile.forEach((element, index) => {
            if (index != idx) {
                element.classList.remove('-rotate-180')
            }
        });
        chevronMobile[idx].classList.toggle('-rotate-180')
    }

    function onMenuMobileToggle() {
        const toggle = menuMobile.classList.toggle('show');
        humbergerMenu.innerHTML = toggle ? `<x-icons.x-mark />`: `<x-icons.bars-3 />`;
    }

    function fadeShadowNav() {
        if($(this).scrollTop() >= 10) {
            $('#navbar').addClass('shadow-md');
        } else {
            $('#navbar').removeClass('shadow-md');
        }
    }

    $(window).ready(function() {
        fadeShadowNav()
    });
    $(window).scroll(function() {
        fadeShadowNav()
    });
</script>
