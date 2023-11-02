    <!-- HEADER -->
    <header>
        <!-- Banner -->
        <div class="header-wrapper text-center" style="background-color: #E9E4E0;">
            <div class="banner-top-wrapper container">
                <img src="Content/images/banner_top.png" class="header_banner-top" width="100%" alt="">
            </div>
        </div>

        <!-- Navbar -->
        <div class="main-header w-100">
            <div class="main-header--top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-7 col-md-12 col-sm-12">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="navbar" id="navbarToggler">
                                    <a class="navbar-brand me-4" href="#"><img src="Content/images/logo_svg.svg"
                                            width="140px" alt=""></a>
                                    <a class="navbar-brand me-4" href="#" id="site-menu-handle" aria-label="Danh mục"
                                        title="Danh mục">
                                        <span class="box-icon me-2">
                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="-0.00012207" y="0.000190735" width="18" height="2" rx="1"
                                                    fill="white"></rect>
                                                <rect x="-0.00012207" y="5.99999" width="18" height="2" rx="1"
                                                    fill="white"></rect>
                                                <rect x="-0.00012207" y="12.0001" width="18" height="2" rx="1"
                                                    fill="white"></rect>
                                            </svg>
                                        </span>
                                        <span class="box-text"><span class="txtnw">Danh mục</span></span>
                                    </a>
                                    <form class="d-flex">
                                        <!-- <input class="form-control" id="search-box" type="search" placeholder="Bạn đang cần gì ?" aria-label="Search"> -->
                                        <div class="input-group d-flex flex-nowrap">
                                            <input type="text" id="header-input-search" class="form-control"
                                                placeholder="Bạn cần tìm gì ?" aria-label="Bạn cần tìm gì ?"
                                                aria-describedby="search-btn">
                                            <button class="btn btn-light" type="button" id="search-btn"><i
                                                    class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-5 col-5 col-md-12 col-sm-12">
                            <div class="ms-3 mt-3 row justify-center" id="nav_lienhe_wrapper">
                                <span class="col ps-3 box-icon-wrapper"><a href="#" class="box-icon d-flex"><i
                                            class="fa fa-phone me-2 mt-1 " aria-hidden="true"></i><span
                                            class="txtnw">Hotline<br> 1800.6975</span></a></span>
                                <span class="col ps-3 box-icon-wrapper"><a href="#" class="box-icon d-flex"><i
                                            class="fa fa-map-marker me-2 mt-1" aria-hidden="true"></i><span
                                            class="txtnw">Hệ thống <br>Showroom</span></a></span>
                                <span class="col ps-3 box-icon-wrapper"><a href="#" class="box-icon d-flex"><i
                                            class="fa fa-calendar-check-o me-2 mt-1" aria-hidden="true"></i><span
                                            class="txtnw">Tra cứu<br> Đơn hàng</span></a></span>
                                <span class="col ps-3 box-icon-wrapper"><a href="#" class="box-icon d-flex"><i
                                            class="fa fa-shopping-cart me-3 mt-1 position-relative" aria-hidden="true">
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle"
                                                style="font-size: 10px;">
                                                <!-- Cart -->
                                                <?php echo (isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0);?>
                                            </span>
                                        </i><span class="txtnw"> Giỏ <br> hàng</span></a></span>
                                <span class="col ps-3 box-icon-wrapper">
                                            <?php if(!isset($_SESSION['id_user'])){
                                                    echo  "<a href='index.php?action=dangnhap&act=dangnhap' class='box-icon d-flex'><i
                                                    class='fa fa-user-o me-2 mt-1' aria-hidden='true'></i><span
                                                    class='txtnw'>Đăng <br> nhập</span></a>";
                                                }else {
                                                    echo  "<a href='index.php?action=dangnhap&act=dangxuat_action' class='box-icon d-flex'><i
                                                    class='fa fa-user-o me-2 mt-1' aria-hidden='true'></i><span
                                                    class='txtnw'>Đăng <br> xuất</span></a>";
                                                }
                                            ?>   
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-header--top">
                <div class="container">
                    <ul class="text-center">
                        <li class="mx-auto"><a href=""><span class="icon"><svg width="19" height="19"
                                        viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3.95453" y="3.95454" width="2.27273" height="2.27273" rx="1.13636"
                                            stroke="currentcolor"></rect>
                                        <path d="M9.18179 11.6364L12.4545 14.9091" stroke="currentcolor"
                                            stroke-linecap="round"></path>
                                        <path d="M10 7.54546L14.9091 12.4545" stroke="currentcolor"
                                            stroke-linecap="round"></path>
                                        <path
                                            d="M10.2227 17.6407L1.61378 9.3629C1.22163 8.98583 1 8.46527 1 7.92124V4.28297C1 3.75254 1.21071 3.24383 1.58579 2.86876L2.86876 1.58579C3.24383 1.21071 3.75254 1 4.28297 1H7.92124C8.46527 1 8.98583 1.22163 9.3629 1.61378L13.8864 6.31818L17.6407 10.2227C18.3957 11.0079 18.3835 12.2529 17.6132 13.0231L13.0231 17.6132C12.2529 18.3835 11.0079 18.3957 10.2227 17.6407Z"
                                            stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></span> Tổng hợp khuyến mãi</a></li>
                        <li class="mx-auto"><a href=""> <svg width="18" height="17" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.5 3.25H17.875C18.1734 3.25 18.4595 3.36853 18.6705 3.5795C18.8815 3.79048 19 4.07663 19 4.375V16.75C19 17.3467 18.7629 17.919 18.341 18.341C17.919 18.7629 17.3467 19 16.75 19M16.75 19C16.1533 19 15.581 18.7629 15.159 18.341C14.7371 17.919 14.5 17.3467 14.5 16.75V2.125C14.5 1.82663 14.3815 1.54048 14.1705 1.32951C13.9595 1.11853 13.6734 1 13.375 1H2.125C1.82663 1 1.54048 1.11853 1.32951 1.32951C1.11853 1.54048 1 1.82663 1 2.125V15.625C1 16.5201 1.35558 17.3786 1.98851 18.0115C2.62145 18.6444 3.47989 19 4.375 19H16.75Z"
                                        stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M4 11.5L11 11.5" stroke="currentcolor" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M4 15L11 15" stroke="currentcolor" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <rect x="4" y="5" width="7" height="3" rx="1" stroke="currentcolor"></rect>
                                </svg> Tin công nghệ</a></li>
                        <li class="mx-auto"><a href=""><span class="icon"><svg width="20" height="15"
                                        viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5284 1.31948C16.0412 0.967549 14.6837 0.5 8.99522 0.5C2.89942 0.5 1.99504 1.03692 1.7048 1.2126C0.160125 2.14402 0.0134681 6.26764 0 7.10376C0.0185428 8.20809 0.196385 11.8822 1.70369 12.7911C1.99337 12.9662 2.89268 13.5 8.99522 13.5C14.6873 13.5 16.0432 13.0347 16.5284 12.6842C17.8449 11.7336 17.9963 8.45989 18 7.08941C17.9966 5.98737 17.8814 2.29774 16.5284 1.3195L16.5284 1.31948ZM15.8721 11.7688C15.6763 11.9104 14.5518 12.372 8.99519 12.372C3.62312 12.372 2.49594 11.9535 2.28298 11.8246C1.74074 11.4981 1.16844 9.76467 1.12351 7.10066C1.1679 4.44256 1.74806 2.50215 2.28414 2.17955C2.49766 2.05011 3.62903 1.62825 8.99519 1.62825C14.5474 1.62825 15.6748 2.09299 15.8721 2.23512C16.3533 2.5831 16.8686 4.41495 16.8762 7.09306C16.8686 9.81319 16.35 11.4237 15.8721 11.7688H15.8721ZM12.6597 6.55639L7.60369 3.44229C7.51846 3.3907 7.4211 3.36276 7.32158 3.36133C7.22206 3.35989 7.12395 3.38501 7.03727 3.43411C6.95052 3.48322 6.87832 3.55459 6.82807 3.6409C6.77782 3.72721 6.75131 3.82538 6.75127 3.92535V10.1546C6.75134 10.3042 6.81056 10.4476 6.91593 10.5534C7.02129 10.6591 7.16417 10.7185 7.31317 10.7186C7.41544 10.7186 7.51577 10.6907 7.60337 10.6377L12.6594 7.52249C12.828 7.42014 12.9311 7.23714 12.9311 7.03944C12.9311 6.84175 12.8282 6.65819 12.6597 6.55639H12.6597ZM7.87537 9.15552V4.92388L11.2819 7.03941L7.87537 9.15552Z"
                                            fill="currentcolor"></path>
                                    </svg></span> Video</a></li>
                        <li class="mx-auto"><a href=""> <span class="icon"><svg width="20" height="17"
                                        viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="0.5" width="18" height="13" rx="2.5" stroke="currentcolor">
                                        </rect>
                                        <rect x="1.25" y="3" width="18" height="2" fill="currentcolor"></rect>
                                    </svg></span> <span class="icon"></span>Hướng dẫn thanh toán</a></li>
                        <li class="mx-auto"><a href=""><svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 5.69566V8.04349C18 9.06087 15.6495 10.3913 12.75 10.3913C9.8505 10.3913 7.5 9.06087 7.5 8.04349V5.69566"
                                        stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M18 8.43477V10.7826C18 11.8 15.6495 13.1304 12.75 13.1304C9.8505 13.1304 7.5 11.8 7.5 10.7826V8.43477"
                                        stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M18 3.34782V5.69565C18 6.71304 15.6495 8.04347 12.75 8.04347C9.8505 8.04347 7.5 6.71304 7.5 5.69565V3.34782"
                                        stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <mask id="mask0_5669_936" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="1" width="8" height="15">
                                        <rect y="1.78261" width="7.50001" height="13.3043" fill="#C4C4C4"></rect>
                                    </mask>
                                    <g mask="url(#mask0_5669_936)">
                                        <path
                                            d="M11.25 8.82608V11.1739C11.25 12.1913 8.89949 13.5217 6 13.5217C3.1005 13.5217 0.75 12.1913 0.75 11.1739V8.82608"
                                            stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M11.25 6.47827V8.82609C11.25 9.84348 8.89949 11.1739 6 11.1739C3.1005 11.1739 0.75 9.84348 0.75 8.82609V6.47827"
                                            stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6 8.81354C8.89949 8.81354 11.25 7.55667 11.25 6.47667C11.25 5.39589 8.89949 4.13042 6 4.13042C3.1005 4.13042 0.75 5.39589 0.75 6.47667C0.75 7.55667 3.1005 8.81354 6 8.81354Z"
                                            stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.75 5.68312C15.6495 5.68312 18 4.42626 18 3.34626C18 2.26548 15.6495 1 12.75 1C9.8505 1 7.5 2.26548 7.5 3.34626C7.5 4.42626 9.8505 5.68312 12.75 5.68312Z"
                                        stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <rect x="3.5" y="6.97827" width="11" height="11.5217" rx="5.5" fill="white"
                                        stroke="currentcolor"></rect>
                                    <path
                                        d="M11.25 13.7732C11.25 14.1878 11.1012 14.5475 10.8037 14.8522C10.5112 15.1519 10.0847 15.3442 9.52438 15.4291V16.2609H8.63182V15.4591C8.25992 15.4341 7.90785 15.3717 7.57562 15.2718C7.24339 15.1669 6.96818 15.0395 6.75 14.8896L7.23347 13.7957C7.46653 13.9505 7.73678 14.0754 8.04422 14.1703C8.35165 14.2652 8.65413 14.3127 8.95165 14.3127C9.51694 14.3127 9.79959 14.1703 9.79959 13.8856C9.79959 13.7357 9.71777 13.6258 9.55413 13.5559C9.39546 13.4809 9.13761 13.4035 8.78058 13.3236C8.38884 13.2387 8.06157 13.1488 7.79876 13.0538C7.53595 12.9539 7.31033 12.7966 7.1219 12.5818C6.93347 12.367 6.83926 12.0772 6.83926 11.7126C6.83926 11.283 6.99298 10.9158 7.30041 10.6111C7.60785 10.3014 8.05165 10.1116 8.63182 10.0416V9.21739H9.52438V10.0266C9.80703 10.0516 10.0773 10.1016 10.3351 10.1765C10.5979 10.2514 10.831 10.3488 11.0343 10.4687L10.5806 11.5702C10.0847 11.3005 9.60372 11.1656 9.1376 11.1656C8.84504 11.1656 8.63182 11.2105 8.49794 11.3005C8.36405 11.3854 8.29711 11.4978 8.29711 11.6377C8.29711 11.7775 8.37645 11.8824 8.53513 11.9524C8.6938 12.0223 8.94918 12.0947 9.30124 12.1697C9.69794 12.2546 10.0252 12.347 10.2831 12.4469C10.5459 12.5418 10.7715 12.6967 10.9599 12.9115C11.1533 13.1213 11.25 13.4085 11.25 13.7732Z"
                                        fill="currentcolor"></path>
                                </svg> Hướng dẫn trả góp</a></li>
                        <li class="mx-auto"><a href=""><span class="icon"><svg width="16" height="18"
                                        viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.95771 1.78875C3.86924 2.08404 2.78817 2.40514 1.71543 2.75175C1.61748 2.78298 1.5304 2.84067 1.46413 2.91824C1.39785 2.99581 1.35504 3.09015 1.34058 3.1905C0.707434 7.86713 2.17029 11.2793 3.91543 13.527C4.6543 14.4882 5.53532 15.335 6.52914 16.0391C6.92457 16.3136 7.27428 16.5116 7.54971 16.6388C7.68685 16.7029 7.79885 16.7456 7.88457 16.7715C7.92205 16.7844 7.9607 16.7939 7.99999 16.7996C8.03882 16.7934 8.07705 16.784 8.11428 16.7715C8.20114 16.7456 8.31314 16.7029 8.45028 16.6388C8.72457 16.5116 9.07542 16.3125 9.47085 16.0391C10.4647 15.335 11.3457 14.4882 12.0846 13.527C13.8297 11.2804 15.2926 7.86713 14.6594 3.1905C14.6451 3.0901 14.6023 2.99571 14.536 2.91811C14.4697 2.84052 14.3826 2.78287 14.2846 2.75175C13.5406 2.51213 12.2846 2.12175 11.0423 1.78987C9.77371 1.45125 8.60685 1.20038 7.99999 1.20038C7.39428 1.20038 6.22628 1.45012 4.95771 1.78875ZM4.65371 0.63C5.89371 0.298125 7.21142 0 7.99999 0C8.78856 0 10.1063 0.298125 11.3463 0.63C12.6148 0.9675 13.8937 1.36687 14.6457 1.60875C14.9601 1.71096 15.2389 1.8984 15.4499 2.14954C15.661 2.40068 15.7958 2.70533 15.8388 3.0285C16.52 8.06513 14.9394 11.7979 13.0217 14.2673C12.2085 15.3236 11.2388 16.2538 10.1451 17.0269C9.76695 17.2944 9.36626 17.5296 8.94742 17.73C8.62742 17.8785 8.28342 18 7.99999 18C7.71657 18 7.37371 17.8785 7.05257 17.73C6.63373 17.5296 6.23303 17.2944 5.85486 17.0269C4.76117 16.2538 3.79152 15.3236 2.97829 14.2673C1.06058 11.7979 -0.519993 8.06513 0.161149 3.0285C0.20422 2.70533 0.339026 2.40068 0.550082 2.14954C0.761137 1.8984 1.03988 1.71096 1.35429 1.60875C2.44594 1.25641 3.54606 0.930065 4.65371 0.63Z"
                                            fill="currentcolor"></path>
                                        <path
                                            d="M11.2618 5.78928C11.315 5.84153 11.3572 5.9036 11.386 5.97194C11.4148 6.04028 11.4297 6.11354 11.4297 6.18753C11.4297 6.26152 11.4148 6.33478 11.386 6.40312C11.3572 6.47145 11.315 6.53353 11.2618 6.58578L7.83322 9.96078C7.78014 10.0132 7.71708 10.0547 7.64765 10.0831C7.57823 10.1114 7.50381 10.126 7.42865 10.126C7.35348 10.126 7.27906 10.1114 7.20964 10.0831C7.14021 10.0547 7.07715 10.0132 7.02407 9.96078L5.30979 8.27328C5.25666 8.22098 5.21452 8.15889 5.18576 8.09056C5.15701 8.02223 5.14221 7.94899 5.14221 7.87503C5.14221 7.80107 5.15701 7.72783 5.18576 7.6595C5.21452 7.59117 5.25666 7.52908 5.30979 7.47678C5.36292 7.42448 5.42599 7.38299 5.49541 7.35469C5.56483 7.32639 5.63923 7.31182 5.71436 7.31182C5.7895 7.31182 5.8639 7.32639 5.93331 7.35469C6.00273 7.38299 6.0658 7.42448 6.11893 7.47678L7.42865 8.76715L10.4526 5.78928C10.5057 5.73689 10.5688 5.69533 10.6382 5.66698C10.7076 5.63862 10.782 5.62402 10.8572 5.62402C10.9324 5.62402 11.0068 5.63862 11.0762 5.66698C11.1456 5.69533 11.2087 5.73689 11.2618 5.78928Z"
                                            fill="currentcolor"></path>
                                    </svg></span> Chính sách bảo hành</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>