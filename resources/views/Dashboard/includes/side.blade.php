<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('AdminAssets/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ env('APP_NAME') }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a 
                {{-- href="javascript:;"
                class="has-arrow" --}}
            >
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            {{-- <ul>
                <li> <a href="{{route('admin.admins.index')}}"><i class="bx bx-right-arrow-alt"></i>Admins</a>
                </li>
                <li> <a href="{{route('admin.users.index')}}"><i class="bx bx-right-arrow-alt"></i>Users</a>
                </li>
            </ul> --}}
        </li>
        {{-- <li class="menu-label">UI Elements</li> --}}
        <li>
            <a href="{{route('admin.admins.index')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Admin</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.users.index')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.ads.index')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Ads</div>
            </a>
        </li>
       
        {{-- <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Content</div>
            </a>
            <ul>
                <li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>Grid System</a>
                </li>
                <li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Typography</a>
                </li>
                <li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>Text
                        Utilities</a>
                </li>
            </ul>
        </li> --}}
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->