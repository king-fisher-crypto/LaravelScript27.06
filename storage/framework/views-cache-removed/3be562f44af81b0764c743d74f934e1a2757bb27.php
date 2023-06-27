<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
        <!--begin::Logo-->
        <!-- <a href="../../demo3/dist/index.html">
             <img alt="Logo" src="adminV2/assets/media/logos/demo3.svg" class="h-20px logo theme-light-show" />
             <img alt="Logo" src="adminV2/assets/media/logos/demo3-dark.svg" class="h-20px logo theme-dark-show" />
         </a> -->
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
            <!--begin::Menu-->

            <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold my-auto"
                id="#kt_aside_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="/admin">
                        <img alt="Logo" src="<?php echo e(asset_dir('newdesign/assets/img/logo/logo.png')); ?>" class="h-80px logo" />
                        
                    </a>
                    <!--end::Logo-->
                </div>
                <div class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <div class="menu-sub show menu-sub-accordion">
                        <span class="menu-item">
                            <a class="menu-link" href="<?php echo e(route('backendV2-dashboard')); ?>">
                                <span class="menu-title white-menu-title"><?php echo e(__('backend/dashboard.title')); ?></span>
                            </a>
                        </span>
                    </div>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->


                <div class="menu-item menu-accordion">
                    <div class="menu-sub show menu-sub-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-item">
                            <a class="menu-link" href="<?php echo e(url('/')); ?>">
                                <span class="menu-title white-menu-title">Shop <i
                                        class="fa-solid fa-up-right-from-square" style="font-size: 12px;"></i></span>
                            </a>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </div>



                <!--begin:Menu item-->
                <!-- <div  class="menu-item here show menu-accordion"> -->
                <!--begin:Menu link-->
                <!-- <span class="menu-link">
                         
                             
                         </a>
                     </span> -->
                <!--end:Menu link-->
                <!-- </div> -->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item here show menu-accordion">
                    <!--begin:Menu link-->
                    <div class="menu-sub show menu-sub-accordion">
                        <span class="menu-item">
                            <a class="menu-link" href="<?php echo e(route('backend-management-shop-logo')); ?>">
                                <span class="text-title white-menu-title">Appearance</span>
                            </a>
                        </span>
                    </div>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item here show menu-accordion">
                    <!--begin:Menu link-->
                    <div class="menu-sub show menu-sub-accordion">
                        <span class="menu-item">
                            <a class="menu-link" href="<?php echo e(route('backend-system-payments')); ?>">
                                <span class="text-title white-menu-title">Payments</span>
                            </a>
                        </span>
                    </div>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item here show menu-accordion">
                    <!--begin:Menu link-->
                    <div class="menu-sub show menu-sub-accordion">
                        <span class="menu-item">
                            <a class="menu-link" href="<?php echo e(route('backendV2-orders')); ?>">
                                <span class="text-title white-menu-title"><?php echo e(__('backend/orders.title')); ?></span>
                            </a>
                        </span>
                    </div>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                
                <!--begin:Menu link-->
                <!--<span class="menu-link">-->
                <!--    <a class="menu-link" href="<?php echo e(route('backendV2-design')); ?>">-->
                <!--        <span class="text-muted"><?php echo e(__('backend/design.title')); ?></span>-->
                <!--    </a>-->
                
                <!--end:Menu link-->
                
                <!--end:Menu item-->

                <!-- <div class="menu-item">-->
                <!--begin:Menu link-->
                <!--    <span class="menu-link">-->
                <!--        <a class="menu-link" href="<?php echo e(route('backend-management-marque')); ?>">-->
                <!--            <span class="text-muted">Marque</span>-->
                <!--        </a>-->
                <!--     </span>-->
                <!--end:Menu link-->
                <!--</div>-->

                <!--begin:Menu item-->
                <!-- <div  class="menu-item here show menu-accordion"> -->
                <!--begin:Menu link-->
                <!-- <span class="menu-link">
                         <a class="menu-link" href="<?php echo e(route('backendV2-media')); ?>">
                             <span class="text-muted"><?php echo e(__('backend/media.title')); ?></span>
                         </a>
                     </span> -->
                <!--end:Menu link-->
                <!-- </div> -->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="text-title white-menu-title"><?php echo e(__('backend/management.title')); ?></span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span
                                    class="text-title white-menu-title"><?php echo e(__('backend/management.tickets.title')); ?></span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="<?php echo e(route('backend-management-tickets-with-pageNumber')); ?>">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span
                                                class="text-title white-menu-title"><?php echo e(__('backend/management.tickets.title')); ?></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="<?php echo e(route('backend-management-tickets-categories-with-pageNumber')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span
                                            class="text-title white-menu-title"><?php echo e(__('backend/management.tickets.categories.title')); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span
                                    class="text-title white-menu-title"><?php echo e(__('backend/management.products.title')); ?></span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="<?php echo e(route('backend-management-products-with-pageNumber')); ?>">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span
                                                class="text-title white-menu-title"><?php echo e(__('backend/management.products.title')); ?></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="<?php echo e(route('backend-management-products-categories-with-pageNumber')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span
                                            class="text-title white-menu-title"><?php echo e(__('backend/management.products.categories.title')); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span
                                    class="text-title white-menu-title"><?php echo e(__('backend/management.faqs.title')); ?></span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                            href="<?php echo e(route('backend-management-faqs-with-pageNumber')); ?>">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span
                                                class="text-title white-menu-title"><?php echo e(__('backend/management.faqs.title')); ?></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="<?php echo e(route('backend-management-faqs-categories-with-pageNumber')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span
                                            class="text-title white-menu-title"><?php echo e(__('backend/management.faqs.categories.title')); ?></span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!-- <div class="menu-item"> -->
                        <!--begin:Menu link-->
                        <!-- <a class="menu-link" href=""> -->
                        <!-- <span class="menu-bullet"> -->
                        <!-- <span class="bullet bullet-dot"></span> -->
                        <!-- </span> -->
                        <!-- <span class="text-muted"><?php echo e(__('backend/management.articles.title')); ?></span> -->
                        <!-- </a> -->
                        <!--end:Menu link-->
                        <!-- </div> -->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo e(route('backend-management-users-with-pageNumber')); ?>">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span
                                    class="text-title white-menu-title"><?php echo e(__('backend/management.users.title')); ?></span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="<?php echo e(route('backend-management-coupons-with-pageNumber')); ?>">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span
                                    class="text-title white-menu-title"><?php echo e(__('backend/management.coupons.title')); ?></span>
                            </a>
                            <!--end:Menu link-->
                        </div>

                        <!-- <div class="menu-item"> -->
                        <!--begin:Menu link-->
                        <!-- <a class="menu-link" href="<?php echo e(route('backend-management-delivery-methods-with-pageNumber')); ?>">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                 <span class="text-muted"><?php echo e(__('backend/management.delivery_methods.title')); ?></span>
                             </a> -->
                        <!--end:Menu link-->
                        <!-- </div> -->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <!-- <span class="menu-link">&nbsp;&nbsp;
                                <span class="svg-icon svg-icon-5">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                    </svg>
                                </span>&nbsp;&nbsp;&nbsp;
                                 <span class="text-muted">Shop</span>
                                 <span class="menu-arrow"></span>
                             </span> -->
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="<?php echo e(route('backend-management-shop-logo')); ?>">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="text-title white-menu-title">Shop logo</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu link-->
                            <a class="menu-link"
                                href="<?php echo e(route('backend-management-tickets-categories-with-pageNumber')); ?>">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="text-title white-menu-title">Shop name</span>
                            </a>

                            <a class="menu-link"
                                href="<?php echo e(route('backend-management-tickets-categories-with-pageNumber')); ?>">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="text-title white-menu-title">Shop Description</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>

                <!-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion"> -->
                <!--begin:Menu link-->
                <!-- <span class="menu-link">
                         <span class="menu-icon"> -->
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                <!-- <span class="svg-icon svg-icon-5">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                     <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                 </svg>
                             </span> -->
                <!--end::Svg Icon-->
                <!-- </span>
                         <span class="text-muted">System</span>
                         <span class="menu-arrow"></span>
                     </span> -->
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <!-- <div class="menu-sub menu-sub-accordion"> -->
                <!--begin:Menu item-->
                <!-- <div class="menu-item"> -->
                <!--begin:Menu link-->
                <!-- <a class="menu-link" href="<?php echo e(route('backend-system-settings')); ?>">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                 <span class="text-muted"><?php echo e(__('backend/system.settings.title')); ?></span>
                             </a> -->
                <!--end:Menu link-->
                <!-- </div> -->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <!-- <div class="menu-item"> -->
                <!--begin:Menu link-->
                <!-- <a class="menu-link" href="<?php echo e(route('backend-system-bonus')); ?>">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                 <span class="text-muted"><?php echo e(__('backend/system.bonus.title')); ?></span>
                             </a> -->
                <!--end:Menu link-->
                <!-- </div> -->
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <!-- <div class="menu-item"> -->
                <!--begin:Menu link-->
                <!-- <a class="menu-link" href="<?php echo e(route('backend-system-payments')); ?>">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                 <span class="text-muted"><?php echo e(__('backend/system.payment_methods.title')); ?></span>
                             </a> -->
                <!--end:Menu link-->
                <!-- </div> -->
                <!--end:Menu item-->
                <!-- </div> -->
                <!--end:Menu sub-->
                <!-- </div> -->

                <!--end:Menu item-->

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
        <!--begin::User panel-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <div class="symbol symbol-circle symbol-40px">
                    <!-- <img src="adminV2/assets/media/avatars/300-1.jpg" alt="photo" /> -->
                </div>
                <!--end::Avatar-->
                <!--begin::User info-->
                <?php if(Auth::check()): ?>
                <div class="ms-2">
                    <!--begin::Name-->
                    <a href="#" class="text-white text-hover-primary fs-6 fw-bold lh-1"><?php echo e(Auth::user()->name); ?></a>
                    <!--end::Name-->
                    <!--begin::Major-->
                    <!--<span class="text-muted fw-semibold d-block fs-7 lh-1">Python Dev</span>-->
                    <!--end::Major-->
                </div>
                <?php endif; ?>
                <!--end::User info-->
            </div>




            <!--end::Wrapper-->
            <!--begin::User menu-->
            <div class="ms-1">
                <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
                    data-kt-menu-placement="top-end">
                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                fill="currentColor" />
                            <path
                                d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true" style="text-align: left;">
                    <!--begin::Menu item-->
                    <!-- <div class="menu-item px-3"> -->
                    <!-- <div class="menu-content d-flex align-items-center px-3"> -->
                    <!--begin::Avatar-->
                    <!-- <div class="symbol symbol-50px me-5">
                                 <img alt="Logo" src="adminV2/assets/media/avatars/300-1.jpg" />
                             </div> -->
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <!-- <div class="d-flex flex-column">
                                 <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                     <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                 </div>
                                 <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                             </div> -->
                    <!--end::Username-->
                    <!-- </div> -->
                    <!-- </div> -->
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <!-- <div class="separator my-2"></div> -->
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <!-- <div class="menu-item px-5">
                         <a href="../../demo3/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                     </div> -->
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <!-- <div class="menu-item px-5">
                         <a href="../../demo3/dist/apps/projects/list.html" class="menu-link px-5">
                             <span class="menu-text">My Projects</span>
                             <span class="menu-badge">
                                 <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                             </span>
                         </a>
                     </div> -->
                    <!--end::Menu item-->

                    <!--begin::Menu item-->

                    <div class="menu-item px-5 my-1">
                        <!-- <a href="<?php echo e(url('admin/language')); ?>" class="menu-link px-5">language</a> -->
                        <div class="ms-1">
                            <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2"
                                style="width: 100%;" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
                                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                <span class="menu-link px-5" style="font-size: 15px;">
                                    Language
                                    <?php
                                    if( \Lang::locale() == "de"){
                                    $localeImage = "/assets/svg/flags/017-germany.svg";
                                    }else{
                                    $localeImage = "/assets/svg/flags/020-flag.svg";
                                    }
                                    ?>
                                    <span
                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0"><?php echo e(\Lang::get('locale.name', [], \Lang::locale())); ?>

                                        <img class="w-15px h-15px rounded-1 ms-2" src="<?php echo e($localeImage); ?>" alt="" />
                                    </span>
                                </span>

                                <!--end::Svg Icon-->
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <!-- <div class="menu-item px-3"> -->
                                <!-- <div class="menu-content d-flex align-items-center px-3"> -->
                                <!--begin::Avatar-->
                                <!-- <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="adminV2/assets/media/avatars/300-1.jpg" />
                                            </div> -->
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <!-- <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div> -->
                                <!--end::Username-->
                                <!-- </div> -->
                                <!-- </div> -->
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <!-- <div class="separator my-2"></div> -->
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <!-- <div class="menu-item px-5">
                                        <a href="../../demo3/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                    </div> -->
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <!-- <div class="menu-item px-5">
                                        <a href="../../demo3/dist/apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
                                        </a>
                                    </div> -->
                                <!--end::Menu item-->

                                <!--begin::Menu item-->

                                <div class="menu-item px-5 my-1">
                                    <?php if(count(App\Models\Setting::getAvailableLocales())): ?>
                                    <?php $__currentLoopData = App\Models\Setting::getAvailableLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if( \Lang::get('locale.name', [], $locale) == "Deutsch"){
                                    $val = "/assets/svg/flags/017-germany.svg";
                                    }else{
                                    $val = "/assets/svg/flags/020-flag.svg";
                                    }
                                    ?>
                                    <a href="<?php echo e(route('language', $locale)); ?>"
                                        style="display: flex; justify-content: space-between; align-items: center;"
                                        class="menu-link px-5"><?php echo e(\Lang::get('locale.name', [], $locale)); ?><img
                                            width="20px" height="20px" src="<?php echo  $val; ?>"></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <!--end::Menu item-->
                                <!--begin::Menu item-->

                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                        </div>
                    </div>

                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                        <a href="<?php echo e(url('settings')); ?>" class="menu-link px-5">Account Settings</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="<?php echo e(url('/admin/session/logout')); ?>" class="menu-link px-5">Sign Out</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
            </div>
            <!--end::User menu-->
        </div>
        <!--end::User panel-->
    </div>
    <!--end::Footer-->
</div><?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/layouts/sidebar.blade.php ENDPATH**/ ?>