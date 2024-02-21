<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
         data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->


        <div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu"
             data-kt-menu="true" data-kt-menu-expand="false">

            <div class="menu-item">
                <a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                   href="{{ route('dashboard') }}">
                    <span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>
                    <span class="menu-title">Dashboards</span>
                </a>
            </div>

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion {{ request()->routeIs('catalog.*') ? 'here show' : '' }}">
                <!--begin:Menu link-->
                <span class="menu-link">
					<span class="menu-icon">{!! getIcon('lots-shopping', 'fs-2') !!}</span>
					<span class="menu-title">Catalog</span>
					<span class="menu-arrow"></span>
				</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('catalog.brands.*') ? 'active' : '' }}"
                           href="{{ route('catalog.brands.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
                            <span class="menu-title">Brands</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
  
                    {{--<!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('user-management.roles.*') ? 'active' : '' }}" href="{{ route('user-management.roles.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('user-management.permissions.*') ? 'active' : '' }}" href="{{ route('user-management.permissions.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Permissions</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->--}}
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            {{-- <div class="menu-item">
                <a class="menu-link {{ request()->routeIs('phone-managements.apps.*') ? 'active' : '' }}"
                   href="{{ route('phone-managements.apps.index') }}">
                    <span class="menu-icon">{!! getIcon('abstract-41', 'fs-2') !!}</span>
                    <span class="menu-title">Apps</span>
                </a>
            </div> --}}

            {{-- <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->routeIs('posters.*') ? 'active' : '' }}"
                   href="{{ route('posters.index') }}">
                    <span class="menu-icon">{!! getIcon('abstract-39', 'fs-2') !!}</span>
                    <span class="menu-title">Posters</span>
                </a>
            </div> --}}

            {{-- <div class="menu-item">
                <a class="menu-link {{ request()->routeIs('proxy-managements.groups.*') ? 'active' : '' }}"
                   href="{{ route('proxy-managements.groups.index') }}">
                    <span class="menu-icon">{!! getIcon('rocket', 'fs-2') !!}</span>
                    <span class="menu-title">Proxy Groups</span>
                </a>
            </div> --}}

            {{-- <div class="menu-item">
                <a class="menu-link {{ request()->routeIs('phone-managements.ranges.*') ? 'active' : '' }}"
                   href="{{ route('phone-managements.ranges.index') }}">
                    <span class="menu-icon">{!! getIcon('text-number', 'fs-2') !!}</span>
                    <span class="menu-title">Number Ranges</span>
                </a>
            </div> --}}
            {{--
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('finance-managements.cdr.*') ? 'active' : '' }}"
                               href="{{ route('finance-managements.cdr.index') }}">
                                <span class="menu-icon">{!! getIcon('call', 'fs-2') !!}</span>
                                <span class="menu-title">CDR</span>
                            </a>
                        </div> --}}

            <div class="menu-item">
                <a class="menu-link {{ request()->routeIs('user-management.users.*') ? 'active' : '' }}"
                   href="{{ route('user-management.users.index') }}">
                    <span class="menu-icon">{!! getIcon('user', 'fs-2') !!}</span>
                    <span class="menu-title">User</span>
                </a>
            </div>


            {{--    <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ request()->routeIs('finance-managements.*') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">{!! getIcon('lots-shopping', 'fs-2') !!}</span>
                        <span class="menu-title">Finance Managements</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ request()->routeIs('finance-managements.reports.*') ? 'active' : '' }}"
                               href="{{ route('finance-managements.reports.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Reports</span>
                            </a>

                        </div>
                    </div>

                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{ request()->routeIs('finance-managements.cdr.*') ? 'active' : '' }}"
                               href="{{ route('finance-managements.cdr.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">CDR</span>
                            </a>
                        </div>
                    </div>
                </div>--}}

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
