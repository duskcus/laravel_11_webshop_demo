<nav class="shadow-md bg-base-100 p-4">

    <div class="max-w-7xl mx-auto flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 text-white hover:text-gray-300 mr-6">
            {{-- <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-.707-6.293a1 1 0 1 1 1.414-1.414A2 2 0 0 0 10 8a2 2 0 0 0-1.707 1.707z" />
            </svg> --}}
            <a href="{{ route('home') }}"><span class="font-semibold text-xl ml-2 mr-6">TLMOD</span></a>
        </div>


        <!-- Navigation Links -->
        <div class="hidden md:block">
            <a href="{{ route('home')}}" class="block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('home') ? 'text-primary' : 'text-white hover:text-gray-300' }}">
                Home
            </a>
            <a href="{{ route('products.index') }}"
               class="block mt-4 lg:inline-block lg:mt-0 mr-4
               {{ request()->routeIs('products.*') ? 'text-primary' : 'text-white hover:text-gray-300' }}">
                Products
            </a>
            <a href="{{ route('about') }}" class="block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('about') ? 'text-primary' : 'text-white hover:text-gray-300' }}">
                About
            </a>
            <a href="{{ route('contact') }}" class="block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('contact') ? 'text-primary' : 'text-white hover:text-gray-300' }}">
                Contact
            </a>
        </div>


        {{-- Basket --}}
        <div class="flex-none">
            <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <div class="indicator">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <span class="badge badge-sm indicator-item">8</span>
                </div>
              </div>
              <div
                tabindex="0"
                class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                <div class="card-body">
                  <span class="text-lg font-bold">8 Items</span>
                  <span class="text-info">Subtotal: $999</span>
                  <div class="card-actions">
                    <button class="btn btn-primary btn-block">View cart</button>
                  </div>
                </div>
              </div>
            </div>

        {{-- Profile --}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img
                  alt="Tailwind CSS Navbar component"
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
              </div>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li>
                <a class="justify-between">
                  Profile
                </a>
              </li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>

    </div>
</nav>
