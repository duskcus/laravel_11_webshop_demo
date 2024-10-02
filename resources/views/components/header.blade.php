<nav class="shadow-md bg-base-100 p-4">

    <div class="px-[10%] mx-auto flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 hover:opacity-75 mr-6">
            {{-- <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" class="h-[50px] cursor-pointer"> --}}
            <a href="{{ route('home') }}"><span class="font-semibold text-xl ml-2 mr-6">LOGONAME</span></a>
        </div>


        <!-- Navigation Links -->
        <div>
            <a href="{{ route('home') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('home') ? 'text-primary' : 'hover:opacity-75' }}">
                Home
            </a>
            <a href="{{ route('products.index') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                {{ request()->routeIs('products.*') ? 'text-primary' : 'hover:opacity-75' }}">
                Products
            </a>
            <a href="{{ route('about') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('about') ? 'text-primary' : 'hover:opacity-75' }}">
                About
            </a>
            <a href="{{ route('contact') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('contact') ? 'text-primary' : 'hover:opacity-75' }}">
                Contact
            </a>

            @if (Auth::user())
                <a href="{{ route('calendar') }}"
                    class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                {{ request()->routeIs('calendar') ? 'text-primary' : 'hover:opacity-75' }}">
                    Calendar
                </a>
            @endif
        </div>


        {{-- Basket --}}
        <div class="flex items-center ml-auto">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        {{-- <span class="badge badge-sm indicator-item">{{ session }}</span> --}}
                        <span class="badge badge-sm indicator-item">0</span>
                    </div>
                </div>
                <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                    <div class="card-body">
                        {{-- <span class="text-lg font-bold">{{ session }} Items</span> --}}
                        <span class="text-lg font-bold">0 Items</span>
                        {{-- <span class="text-info">Subtotal: €{{ sum }}</span> --}}
                        <span class="text-info">Subtotal: €999.00</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Profile --}}
            @if (Auth::user())
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li class="my-1 ml-3 font-bold text-primary">{{ Auth::user()->name }} </li>
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('settings') }}">Settings</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </hr>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 mr-4
                {{ request()->routeIs('login') ? 'text-primary' : 'hover:opacity-75' }}">
                    <button class="btn btn-primary ml-4">Login</button>
                </a>
            @endif
        </div>

        {{-- <label class="ml-12 flex cursor-pointer gap-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="12" cy="12" r="5" />
              <path
                d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
            </svg>
            <input type="checkbox" value="synthwave" class="toggle theme-controller" />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
          </label> --}}

    </div>
</nav>
