<!-- BEGIN: Top Menu -->
<nav class="top-nav">
    <ul>
        <li>
            <a href="{{ route('home') }}" class="top-menu {{ request()->is('home') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Dashboard </i>
                </div>
            </a>

        </li>
        <li>
            <a href="{{ route('diagnosa') }}"
                class="top-menu {{ request()->is('diagnosa') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Diagnosa
                </div>
            </a>

        </li>
        @if (auth()->user()->role == 2)
            <li>
                <a href="{{ route('informasi') }}"
                    class="top-menu {{ request()->is('informasi') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="top-menu__title"> Informasi Penyakit </i>
                    </div>
                </a>

            </li>
        @else
            <li>
                <a href="{{ route('informasi') }}"
                    class="top-menu {{ request()->is('informasi') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="top-menu__title"> Informasi Penyakit </i>
                    </div>
                </a>

            </li>
            <li>
                <a href="{{ route('penyakit') }}"
                    class="top-menu {{ request()->is('penyakit') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="top-menu__title"> Penyakit
                    </div>
                </a>

            </li>
            <li>
                <a href="{{ route('gejala') }}"
                    class="top-menu {{ request()->is('gejala') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="top-menu__title"> Gejala
                    </div>
                </a>

            </li>
            {{-- <li>
            <a href="{{ route('cf') }}" class="top-menu {{ request()->is('cf') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Nilai CF
                </div>
            </a>

        </li> --}}
            <li>
                <a href="{{ route('basis') }}"
                    class="top-menu {{ request()->is('basis') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="top-menu__title"> Basis Pengetahuan
                    </div>
                </a>

            </li>


            <li>
                <a href="{{ route('laporan') }}"
                    class="top-menu {{ request()->is('laporan') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i data-feather="align-right"></i> </div>
                    <div class="top-menu__title"> Laporan
                    </div>
                </a>

            </li>

        @endif


    </ul>
</nav>
<!-- END: Top Menu -->
