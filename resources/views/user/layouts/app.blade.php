@extends('user.layouts.master')

@section('content')
    <div class="sidebar-backdrop" id="sidebar-backdrop"></div>

    @include('user.layouts.header')

    @include('user.layouts.sidenav')


    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            @include('user.layouts.breadcrumb')

            @yield('panel')
        </div>
    </main>
    <!--end main wrapper-->

    <!--start cart-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
        <div class="offcanvas-header border-bottom h-70">
            <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body p-0">
            <div class="order-list">
                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">White Men Shoes</h5>
                        <p class="mb-0 order-price">$289</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Red Airpods</h5>
                        <p class="mb-0 order-price">$149</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
                        <p class="mb-0 order-price">$139</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
                        <p class="mb-0 order-price">$485</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Fancy Shirts</h5>
                        <p class="mb-0 order-price">$758</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Home Sofa Set </h5>
                        <p class="mb-0 order-price">$546</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Black iPhone</h5>
                        <p class="mb-0 order-price">$1049</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>

                <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                    <div class="order-img">
                        <img src="https://placehold.co/75x50" class="img-fluid rounded-3" width="75" alt="">
                    </div>
                    <div class="order-info flex-grow-1">
                        <h5 class="mb-1 order-title">Goldan Watch</h5>
                        <p class="mb-0 order-price">$689</p>
                    </div>
                    <div class="d-flex">
                        <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                        <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer h-70 p-3 border-top">
            <div class="d-grid">
                <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas">View Products</button>
            </div>
        </div>
    </div>
    <!--end cart-->



    <!--start user details offcanvas-->
    <div class="offcanvas offcanvas-start w-260" data-bs-scroll="true" tabindex="-1" id="offcanvasUserDetails"
        data-component="userProfile">
        <div class="offcanvas-body">
            <div class="user-wrapper">
                <div class="text-center p-3 bg-light rounded">
                    <img src="https://placehold.co/110x110" class="rounded-circle p-1 shadow mb-3" width="120"
                        height="120" alt="">
                    <h5 class="user-name mb-0 fw-bold">Jhon David</h5>
                    <p class="mb-0">Administrator</p>
                </div>
                <div class="list-group list-group-flush mt-3 profil-menu fw-bold">
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-top"><i
                            class="material-icons-outlined">person_outline</i>Profile</a>
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                            class="material-icons-outlined">local_bar</i>Setting</a>
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                            class="material-icons-outlined">dashboard</i>Dashboard</a>
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                            class="material-icons-outlined">account_balance</i>Earning</a>
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                            class="material-icons-outlined">cloud_download</i>Downloads</a>
                    <a href="javascript:;"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-bottom"><i
                            class="material-icons-outlined">power_settings_new</i>Logout</a>
                </div>
            </div>

        </div>
        <div class="offcanvas-footer p-3 border-top">
            <div class="text-center">
                <button type="button" class="btn d-flex align-items-center gap-2" data-bs-dismiss="offcanvas"><i
                        class="material-icons-outlined">close</i><span>Close Sidebar</span></button>
            </div>
        </div>
    </div>
    <!--end user details offcanvas-->
@endsection
