 @include('include.header')
<body class="ltr">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
    <div class="loader-inner">
        <div class="loader-circle">
         <img src="/backend/images/web-settings/image-assets/seeder/shreeluxmiLogo.png" alt="Preloader">
        </div>
        <div class="loader-line-mask">
            <div class="loader-line"></div>
        </div>
    </div>
</div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start body overlay
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="body-overlay" class="body-overlay"></div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End body overlay
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Dashboard
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 @include('include.sidebar')
    <div class="page-wrapper">
        <div class="main-wrapper">
            <div class="main-body-wrapper">
                <nav class="navbar-wrapper">
    <div class="dashboard-title-part">
        <div class="left">
            <div class="icon">
                <button class="sidebar-menu-bar">
                    <i class="fas fa-exchange-alt"></i>
                </button>
            </div>
                <div class="dashboard-path">
            <span class="main-path"><a href="https://envato.appdevs.net/qrpay/user/dashboard">Dashboard</a></span>
                <i class="las la-angle-right" ></i>
        
              <span class="active-path ">Mobile Topup</span>
    </div>


        </div>
        <div class="right">
            
            <div class="header-push-wrapper">
                <button class="push-icon">
                    <i class="las la-bell"></i>
                </button>
                <div class="push-wrapper">
                    <div class="push-header">
                        <h5 class="title">Notification</h5>
                    </div>
                    <ul class="push-list">
                                                <li>
                            <div class="thumb">
                                <img src="https://envato.appdevs.net/qrpay/public/frontend/user/40690ef9-579c-4fa7-9dd3-cfaff02e1bcb.webp" alt="user" />
                            </div>
                            <div class="content">
                                <div class="title-area">
                                    <h5 class="title">Mobile Topup </h5>
                                    <span class="time">3 days ago</span>
                                </div>
                                <span class="sub-title">Mobile Topup request send to admin 50 USD successful.</span>
                            </div>
                        </li>
                                                <li>
                            <div class="thumb">
                                <img src="https://envato.appdevs.net/qrpay/public/frontend/user/40690ef9-579c-4fa7-9dd3-cfaff02e1bcb.webp" alt="user" />
                            </div>
                            <div class="content">
                                <div class="title-area">
                                    <h5 class="title">Transfer Money</h5>
                                    <span class="time">3 days ago</span>
                                </div>
                                <span class="sub-title">Transfer Money to  a a 10 USD successful</span>
                            </div>
                        </li>
                                                <li>
                            <div class="thumb">
                                <img src="https://envato.appdevs.net/qrpay/public/frontend/user/40690ef9-579c-4fa7-9dd3-cfaff02e1bcb.webp" alt="user" />
                            </div>
                            <div class="content">
                                <div class="title-area">
                                    <h5 class="title">Transfer Money</h5>
                                    <span class="time">3 days ago</span>
                                </div>
                                <span class="sub-title">Transfer Money to  a a 10 USD successful</span>
                            </div>
                        </li>
                                                <li>
                            <div class="thumb">
                                <img src="https://envato.appdevs.net/qrpay/public/frontend/user/40690ef9-579c-4fa7-9dd3-cfaff02e1bcb.webp" alt="user" />
                            </div>
                            <div class="content">
                                <div class="title-area">
                                    <h5 class="title">Bill Pay </h5>
                                    <span class="time">4 days ago</span>
                                </div>
                                <span class="sub-title">Bill Pay request send to admin 24 USD successful.</span>
                            </div>
                        </li>
                                                <li>
                            <div class="thumb">
                                <img src="https://envato.appdevs.net/qrpay/public/frontend/user/40690ef9-579c-4fa7-9dd3-cfaff02e1bcb.webp" alt="user" />
                            </div>
                            <div class="content">
                                <div class="title-area">
                                    <h5 class="title">Bill Pay </h5>
                                    <span class="time">4 days ago</span>
                                </div>
                                <span class="sub-title">Bill Pay request send to admin 50 USD successful.</span>
                            </div>
                        </li>
                                            </ul>

                </div>
            </div>
            <div class="header-user-wrapper">
                <div class="header-user-thumb">
                    <a href="https://envato.appdevs.net/qrpay/user/profile"><img src="https://envato.appdevs.net/qrpay/public/frontend/user/40690ef9-579c-4fa7-9dd3-cfaff02e1bcb.webp" alt="client" /></a>
                </div>
            </div>
        </div>
    </div>
</nav>
                <div class="body-wrapper">
    <div class="dashboard-area mt-10">
        <div class="dashboard-header-wrapper">
            <h3 class="title">Mobile Topup</h3>
        </div>
    </div>
    <div class="row mb-30-none">
        <div class="col-xl-12 mb-30">
            <div class="dash-payment-item-wrapper">
                <div class="dash-payment-item active">
                    <div class="dash-payment-title-area">
                        <span class="dash-payment-badge">!</span>
                        <h5 class="title">Recharge</h5>
                    </div>
                    <div class="dash-payment-body">
                        <form class="card-form" action="/do-recharge" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 form-group text-center">
                                    <div class="exchange-area">
                                        <code class="d-block text-center"><span class="">Available Blanance : {{$userData[0]->MAIN_BAL}} </span></code>
                                    </div>
                                </div>
                                   <div class="col-xl-6 col-lg-6  form-group">
                                    <label>Mobile Number <span class="text--base">*</span></label>
                                    <input type="number" class="form--control" name="mobile_number" placeholder="Enter Mobile Number" value="">

                                </div>
                                
                                <div class="col-xl-6 col-lg-6  form-group">
                                    <label>Mobile Operator <span class="text--base">*</span></label>
                                    <select class="form--control" name="operator">
                                        <option value="1" data-name="Vodafone">Vodafone</option>
                                        <option value="2" data-name="Airtel">Airtel</option>
                                        <option value="3" data-name="Bsnl">Idea</option>
                                        <option value="4" data-name="Bsnl">BSNL</option>
                                        <option value="5" data-name="Jio">Jio</option>
                                    </select>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6  form-group">
                                    <label>Amount<span>*</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form--control" required placeholder="Enter Amount" name="amount" value="">
                                        <select class="form--control nice-select currency" name="currency">
                                            <option value="USD">USD</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <button type="submit" class="btn--base w-100">Recharge Now <i class="fas fa-mobile ms-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <div class="dashboard-list-area mt-20">
        <div class="dashboard-header-wrapper">
            <h4 class="title ">Mobile Topup Log</h4>
            <div class="dashboard-btn-wrapper">
                <div class="dashboard-btn mb-2">
                    <a href="https://envato.appdevs.net/qrpay/user/transactions/mobile-topup" class="btn--base">View More</a>
                </div>
            </div>
        </div>
        <div class="dashboard-list-wrapper">
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">50.00 USD</h4>
                        <h6 class="exchange-money fw-bold">51.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP26798234</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">34536737764</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">1.69 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>15-11-23 04:13:35 AM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">50.00 USD</h4>
                        <h6 class="exchange-money fw-bold">51.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP63687711</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">0898987867</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">47.47 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>06-11-23 10:21:21 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">100.00 USD</h4>
                        <h6 class="exchange-money fw-bold">101.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP12516172</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">868696436475</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">201.47 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>05-11-23 07:19:30 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">50.00 USD</h4>
                        <h6 class="exchange-money fw-bold">51.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP33931773</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">9048457200</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">5.47 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>05-11-23 02:42:04 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">50.00 USD</h4>
                        <h6 class="exchange-money fw-bold">51.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP36193446</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">9048457200</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">56.47 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>05-11-23 02:41:54 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(M-PESA)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">56.00 USD</h4>
                        <h6 class="exchange-money fw-bold">57.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP35877639</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">M-PESA</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">72828282872</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">322.57 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>04-11-23 06:17:43 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(M-PESA)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">56.00 USD</h4>
                        <h6 class="exchange-money fw-bold">57.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP74121522</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">M-PESA</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">72828282872</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">379.57 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>04-11-23 06:17:20 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">200.00 USD</h4>
                        <h6 class="exchange-money fw-bold">201.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP84782547</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">7016090877</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">953.27 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>02-11-23 08:20:46 AM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">50.00 USD</h4>
                        <h6 class="exchange-money fw-bold">51.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP75864616</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">019392444632</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">150.05 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>01-11-23 06:42:47 PM</span>
                    </div>
                </div>

                


            </div>
        </div>
            <div class="dashboard-list-item-wrapper">
            <div class="dashboard-list-item sent">
                <div class="dashboard-list-left">
                    <div class="dashboard-list-user-wrapper">
                        <div class="dashboard-list-user-icon">
                                                        <i class="las la-arrow-up"></i>
                                                    </div>
                        <div class="dashboard-list-user-content">
                                                            <h4 class="title">Mobile Topup <span class="text--warning">(Airtel)</span></h4>
                                                        <span class="badge badge--warning">Pending </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                            <h4 class="main-money text--warning">50.00 USD</h4>
                        <h6 class="exchange-money fw-bold">51.00 USD</h6>
                                    </div>
            </div>
            <div class="preview-list-wrapper">

                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="lab la-tumblr"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Transaction ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>MP78966743</span>
                    </div>
                </div>
                                                                                                                
                                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-balance-scale"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Topup Type</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">Airtel</span>
                    </div>
                </div>
                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Mobile Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span class="text--base">8639825812</span>
                    </div>
                </div>
                                

                                                                            <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-battery-half"></i>
                                </div>
                                <div class="preview-list-user-content">
                                    <span>Fees &amp; Charge</span>
                                </div>
                            </div>
                        </div>
                        <div class="preview-list-right">
                                                            <span>1.00 USD</span>
                                                    </div>
                    </div>
                                                                                                                                                                                    <div class="preview-list-item">
                        <div class="preview-list-left">
                            <div class="preview-list-user-wrapper">
                                <div class="preview-list-user-icon">
                                    <i class="las la-receipt"></i>
                                </div>
                                <div class="preview-list-user-content">
                                                                            <span>Current Balance</span>
                                                                    </div>
                            </div>
                        </div>

                        <div class="preview-list-right">
                                                            <span class="text--danger">24.25 USD</span>
                                                    </div>
                    </div>
                                                                                                                            
                                <div class="preview-list-item">
                    <div class="preview-list-left">
                        <div class="preview-list-user-wrapper">
                            <div class="preview-list-user-icon">
                                <i class="las la-clock"></i>
                            </div>
                            <div class="preview-list-user-content">
                                <span>Time &amp; Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="preview-list-right">
                        <span>30-10-23 10:58:20 AM</span>
                    </div>
                </div>

            </div>
        </div>
    
        </div>
    </div>
</div>
<div class="modal fade" id="scanModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-body text-center">
                <video id="preview" class="p-1 border" style="width:300px;"></video>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">close</button>
            </div>
      </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Dashboard
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="https://envato.appdevs.net/qrpay/user/receive-money" class="qr-scan"><i class="fas fa-qrcode"></i></a>
    <!-- jquery -->
 <script src="https://envato.appdevs.net/qrpay/public/frontend/js/jquery-3.5.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="https://envato.appdevs.net/qrpay/public/frontend/js/bootstrap.bundle.min.js"></script>
 <!-- swipper js -->
 <script src="https://envato.appdevs.net/qrpay/public/frontend/js/swiper.min.js"></script>
 <!-- apexcharts js -->
 <script src="https://envato.appdevs.net/qrpay/public/frontend/js/apexcharts.min.js"></script>

 <script src="https://envato.appdevs.net/qrpay/public/backend/js/select2.min.js"></script>
 <script src="https://envato.appdevs.net/qrpay/public/backend/library/popup/jquery.magnific-popup.js"></script>
  <!-- nice-select js -->
  <script src="https://envato.appdevs.net/qrpay/public/frontend/js/jquery.nice-select.js"></script>
 <!-- smooth scroll js -->
 <script src="https://envato.appdevs.net/qrpay/public/frontend/js/smoothscroll.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- main -->
 <script src="https://envato.appdevs.net/qrpay/public/frontend/js/main.js"></script>
  
 
</body>

</html>
