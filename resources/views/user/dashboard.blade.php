<!DOCTYPE html>
<html lang="en">
@section('title','Earn2india | Dashboard')
@include('include.header')
<body class="ltr">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
    <div class="loader-inner">
        <div class="loader-circle">
            <img src="/backend/images/web-settings/image-assets/seeder/e2i.jpg" alt="Preloader">
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
    <div class="page-wrapper">
       
    @include('include.sidebar')

        <div class="main-wrapper">
            <div class="main-body-wrapper">
            @include('include.navbar')
                <div class="body-wrapper">
    <div class="dashboard-area mt-10">
        <div class="dashboard-header-wrapper">
            <h3 class="title">Overview</h3>
        </div>
        <div class="dashboard-item-area">
            <div class="row mb-20-none">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Balance</span>
                            <h3 class="title">26.35 <span class="text--base">USD</span></h3>
                        </div>

                        <div class="dashboard-icon">
                            <img src="https://envato.appdevs.net/qrpay/public/backend/images/currency-flag/3e92b13b-0fe5-4d98-9b15-45f85aaf0736.webp" alt="flag" />
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Total Receive Remittance</span>
                            <h3 class="title">0 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Total Send Remittance</span>
                            <h3 class="title">600 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Virtual Card</span>
                            <h3 class="title">0 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Total Bill Pay</span>
                            <h3 class="title">100 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Total Mobile TopUp</span>
                            <h3 class="title">70 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-mobile"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Total Withdraw</span>
                            <h3 class="title">70 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-20">
                    <div class="dashbord-item">
                        <div class="dashboard-content">
                            <span class="sub-title">Total Transaction</span>
                            <h3 class="title">57069 <span class="text--base">USD</span></h3>
                        </div>
                        <div class="dashboard-icon">
                            <i class="fas fa-arrows-alt-h"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chart-area mt-30">
        <div class="row mb-20-none">
            <div class="col-xxl-7 col-xl-7 col-lg-7 mb-20">
                <div class="chart-wrapper">
                    <div class="dashboard-header-wrapper">
                        <h4 class="title">Add Money Chart</h4>
                    </div>
                    <div class="chart-container">
                        <div id="chart1" data-chart_one_data="{&quot;pending_data&quot;:[0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],&quot;success_data&quot;:[0,0,1,10,1,1,1,5,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],&quot;canceled_data&quot;:[0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],&quot;hold_data&quot;:[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]}" data-month_day="[&quot;2023-10-01&quot;,&quot;2023-10-02&quot;,&quot;2023-10-03&quot;,&quot;2023-10-04&quot;,&quot;2023-10-05&quot;,&quot;2023-10-06&quot;,&quot;2023-10-07&quot;,&quot;2023-10-08&quot;,&quot;2023-10-09&quot;,&quot;2023-10-10&quot;,&quot;2023-10-11&quot;,&quot;2023-10-12&quot;,&quot;2023-10-13&quot;,&quot;2023-10-14&quot;,&quot;2023-10-15&quot;,&quot;2023-10-16&quot;,&quot;2023-10-17&quot;,&quot;2023-10-18&quot;,&quot;2023-10-19&quot;,&quot;2023-10-20&quot;,&quot;2023-10-21&quot;,&quot;2023-10-22&quot;,&quot;2023-10-23&quot;,&quot;2023-10-24&quot;,&quot;2023-10-25&quot;,&quot;2023-10-26&quot;,&quot;2023-10-27&quot;,&quot;2023-10-28&quot;,&quot;2023-10-29&quot;,&quot;2023-10-30&quot;,&quot;2023-10-31&quot;]" class="chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 mb-20">
                <div class="chart-wrapper">
                    <div class="dashboard-header-wrapper">
                        <h4 class="title">Withdraw Money</h4>
                    </div>
                    <div class="chart-container">
                        <div id="chart3" data-chart_three_data="{&quot;pending_data&quot;:[0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],&quot;success_data&quot;:[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],&quot;canceled_data&quot;:[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],&quot;hold_data&quot;:[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]}" data-month_day="[&quot;2023-10-01&quot;,&quot;2023-10-02&quot;,&quot;2023-10-03&quot;,&quot;2023-10-04&quot;,&quot;2023-10-05&quot;,&quot;2023-10-06&quot;,&quot;2023-10-07&quot;,&quot;2023-10-08&quot;,&quot;2023-10-09&quot;,&quot;2023-10-10&quot;,&quot;2023-10-11&quot;,&quot;2023-10-12&quot;,&quot;2023-10-13&quot;,&quot;2023-10-14&quot;,&quot;2023-10-15&quot;,&quot;2023-10-16&quot;,&quot;2023-10-17&quot;,&quot;2023-10-18&quot;,&quot;2023-10-19&quot;,&quot;2023-10-20&quot;,&quot;2023-10-21&quot;,&quot;2023-10-22&quot;,&quot;2023-10-23&quot;,&quot;2023-10-24&quot;,&quot;2023-10-25&quot;,&quot;2023-10-26&quot;,&quot;2023-10-27&quot;,&quot;2023-10-28&quot;,&quot;2023-10-29&quot;,&quot;2023-10-30&quot;,&quot;2023-10-31&quot;]" class="chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-list-area mt-20">
        <div class="dashboard-header-wrapper">
            <h4 class="title">Latest Transactions</h4>
            <div class="dashboard-btn-wrapper">
                <div class="dashboard-btn mb-2">
                    <a href="https://envato.appdevs.net/qrpay/user/transactions" class="btn--base">View More</a>
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
                                                            
                                                                            <h4 class="title">Send Money to @aminul (tihibe6324@ksyhtc.com) </h4>
                                                                                                                            <span class="badge badge--success">Success </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                                                    <h6 class="exchange-money text--warning ">20.00 USD</h6>
                        <h4 class="main-money fw-bold">21.20 USD</h4>
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
                        <span>SM42919931</span>
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
                                <span>1.20 USD</span>
                            </div>
                        </div>
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="lab la-get-pocket"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Recipient Received</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span>20.00 USD</span>
                            </div>
                        </div>
                        
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="las la-balance-scale"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Current Balance</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span class="text--base">26.35 USD</span>
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
                        <span>13-10-23 05:06:52 AM</span>
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
                                                            
                                                                            <h4 class="title">Send Money to @tarinabo (tarinabojahidua@gmail.com) </h4>
                                                                                                                            <span class="badge badge--success">Success </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                                                    <h6 class="exchange-money text--warning ">10.00 USD</h6>
                        <h4 class="main-money fw-bold">11.10 USD</h4>
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
                        <span>SM98535258</span>
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
                                <span>1.10 USD</span>
                            </div>
                        </div>
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="lab la-get-pocket"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Recipient Received</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span>10.00 USD</span>
                            </div>
                        </div>
                        
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="las la-balance-scale"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Current Balance</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span class="text--base">47.55 USD</span>
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
                        <span>11-10-23 01:21:44 PM</span>
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
                                                            
                                                                            <h4 class="title">Send Money to @testusr2 (user2@appdevs.net) </h4>
                                                                                                                            <span class="badge badge--success">Success </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                                                    <h6 class="exchange-money text--warning ">12.00 USD</h6>
                        <h4 class="main-money fw-bold">13.12 USD</h4>
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
                        <span>SM84357258</span>
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
                                <span>1.12 USD</span>
                            </div>
                        </div>
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="lab la-get-pocket"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Recipient Received</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span>12.00 USD</span>
                            </div>
                        </div>
                        
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="las la-balance-scale"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Current Balance</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span class="text--base">58.65 USD</span>
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
                        <span>11-10-23 01:12:47 PM</span>
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
                                                            
                                                                            <h4 class="title">Send Money to @tarinabo (tarinabojahidua@gmail.com) </h4>
                                                                                                                            <span class="badge badge--success">Success </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                                                    <h6 class="exchange-money text--warning ">10.00 USD</h6>
                        <h4 class="main-money fw-bold">11.10 USD</h4>
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
                        <span>SM57728315</span>
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
                                <span>1.10 USD</span>
                            </div>
                        </div>
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="lab la-get-pocket"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Recipient Received</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span>10.00 USD</span>
                            </div>
                        </div>
                        
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="las la-balance-scale"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Current Balance</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span class="text--base">71.77 USD</span>
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
                        <span>11-10-23 08:00:11 AM</span>
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
                                                            
                                                                            <h4 class="title">Send Money to @gidigidding (ginanceglobal@gmail.com) </h4>
                                                                                                                            <span class="badge badge--success">Success </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-list-right">
                                                                    <h6 class="exchange-money text--warning ">50.00 USD</h6>
                        <h4 class="main-money fw-bold">51.50 USD</h4>
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
                        <span>SM59384329</span>
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
                                <span>1.50 USD</span>
                            </div>
                        </div>
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="lab la-get-pocket"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Recipient Received</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span>50.00 USD</span>
                            </div>
                        </div>
                        
                        <div class="preview-list-item">
                            <div class="preview-list-left">
                                <div class="preview-list-user-wrapper">
                                    <div class="preview-list-user-icon">
                                        <i class="las la-balance-scale"></i>
                                    </div>
                                    <div class="preview-list-user-content">
                                        <span>Current Balance</span>
                                    </div>
                                </div>
                            </div>
                            <div class="preview-list-right">
                                <span class="text--base">82.87 USD</span>
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
                        <span>11-10-23 12:46:38 AM</span>
                    </div>
                </div>

                


            </div>
        </div>
    
    


        </div>
    </div>
</div>
            </div>
        </div>
    </div>
   
    @include('include.footer')

 <script>
    function laravelCsrf() {
    return $("head meta[name=csrf-token]").attr("content");
  }
//for popup
function openAlertModal(URL,target,message,actionBtnText = "Remove",method = "DELETE"){
    if(URL == "" || target == "") {
        return false;
    }

    if(message == "") {
        message = "Are you sure to delete ?";
    }
    var method = `<input type="hidden" name="_method" value="${method}">`;
    openModalByContent(
        {
            content: `<div class="card modal-alert border-0">
                        <div class="card-body">
                            <form method="POST" action="${URL}">
                                <input type="hidden" name="_token" value="${laravelCsrf()}">
                                ${method}
                                <div class="head mb-3">
                                    ${message}
                                    <input type="hidden" name="target" value="${target}">
                                </div>
                                <div class="foot d-flex align-items-center justify-content-between">
                                    <button type="button" class="modal-close btn btn--info rounded text-light">Close</button>
                                    <button type="submit" class="alert-submit-btn btn btn--danger btn-loading rounded text-light">${actionBtnText}</button>
                                </div>
                            </form>
                        </div>
                    </div>`,
        },

    );
  }
function openModalByContent(data = {
content:"",
animation: "mfp-move-horizontal",
size: "medium",
}) {
$.magnificPopup.open({
    removalDelay: 500,
    items: {
    src: `<div class="white-popup mfp-with-anim ${data.size ?? "medium"}">${data.content}</div>`, // can be a HTML string, jQuery object, or CSS selector
    },
    callbacks: {
    beforeOpen: function() {
        this.st.mainClass = data.animation ?? "mfp-move-horizontal";
    },
    open: function() {
        var modalCloseBtn = this.contentContainer.find(".modal-close");
        $(modalCloseBtn).click(function() {
        $.magnificPopup.close();
        });
    },
    },
    midClick: true,
});
}

</script>
 
 <!-- notify js -->
<script src='https://envato.appdevs.net/qrpay/public/backend/js/bootstrap-notify.min.js'></script>

<script>
    // Show Laravel Error Messages----------------------------------------------
    $(function () {
        $(document).ready(function(){
                    });
    });
    //--------------------------------------------------------------------------

    // Function for throw error messages from javascript------------------------
    function throwMessage(type,errors = []) {
        if(type == 'error') {
            $.each(errors,function(index,item) {
                $.notify(
                    {
                        title: "",
                        message: item,
                        icon: 'las la-exclamation-triangle',
                    },
                    {
                        type: "danger",
                        allow_dismiss: true,
                        delay: 5000,
                        placement: {
                        from: "top",
                        align: "right"
                        },
                    }
                );
            });
        }else if(type == 'success') {
            $.each(errors,function(index,item) {
                $.notify(
                    {
                        title: "",
                        message: item,
                        icon: 'las la-check-circle',
                    },
                    {
                        type: "success",
                        allow_dismiss: true,
                        delay: 5000,
                        placement: {
                        from: "top",
                        align: "right"
                        },
                    }
                );
            });
        }else if(type == 'warning') {
            $.each(errors,function(index,item) {
                $.notify(
                    {
                        title: "",
                        message: item,
                        icon: 'las la-check-circle',
                    },
                    {
                        type: "warning",
                        allow_dismiss: true,
                        delay: 500000000,
                        placement: {
                        from: "top",
                        align: "right"
                        },
                    }
                );
            });
        }

    }
    //--------------------------------------------------------------------------

    // Function for set modal session value --------------------
    var validationSession = null;
    function getSessionValue(sesesionValue = null) {
        validationSession = sessionValue;
    }

    
    // Function for open modal/popup when have backend session
    function openModalWhenError(sessionValue,modalSelector) {
        if(validationSession != sessionValue) {
            return false;
        }
        openModalBySelector(modalSelector);
    }
    //----------------------------------------------------------


    function countrySelect(element,errorElement) {
        $(document).on("change",element,function(){
            var targetElement = $(this);
            var countryId = $(element+" :selected").attr("data-id");
            if(countryId != "" || countryId != null) {
                var CSRF = $("meta[name=csrf-token]").attr("content");
                var data = {
                    _token      : CSRF,
                    country_id  : countryId,
                };
                $.post("https://envato.appdevs.net/qrpay/global/get-states",data,function() {
                    // success
                    $(errorElement).removeClass("is-invalid");
                    $(targetElement).siblings(".invalid-feedback").remove();
                }).done(function(response){
                    // Place States to States Field
                    var options = "<option selected disabled>Select State</option>";
                    $.each(response,function(index,item) {
                        options += `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                    });
                    $(".state-select").html(options);
                }).fail(function(response) {
                    if(response.status == 422) { // Validation Error
                        var faildMessage = "Please select a valid Country.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }else {
                        var faildMessage = "Something went worng! Please try again.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }

                });
            }else {
                // Push Error
            }
        });
    }

    // State Select Get Cities
    function stateSelect(element,errorElement) {
        $(document).on("change",element,function(){
            var targetElement = $(this);
            var stateId = $(element+" :selected").attr("data-id");
            if(stateId != "" || stateId != null) {
                var CSRF = $("meta[name=csrf-token]").attr("content");
                var data = {
                    _token      : CSRF,
                    state_id  : stateId,
                };
                $.post("https://envato.appdevs.net/qrpay/global/get-cities",data,function() {
                    // success
                    $(errorElement).removeClass("is-invalid");
                    $(targetElement).siblings(".invalid-feedback").remove();
                }).done(function(response){
                    // console.log(response);
                    // Place States to States Field
                    var options = "<option selected disabled>Select City</option>";
                    $.each(response,function(index,item) {
                        options += `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                    });

                    $(".city-select").html(options);
                }).fail(function(response) {
                    if(response.status == 422) { // Validation Error
                        var faildMessage = "Please select a valid state.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }else {
                        var faildMessage = "Something went worng! Please try again.";
                        var faildElement = `<span class="invalid-feedback" role="alert">
                                                <strong>${faildMessage}</strong>
                                            </span>`;
                        $(errorElement).addClass("is-invalid");
                        if($(targetElement).siblings(".invalid-feedback").length != 0) {
                            $(targetElement).siblings(".invalid-feedback").text(faildMessage);
                        }else {
                            errorElement.after(faildElement);
                        }
                    }
                });
            }else {
                // Push Error
            }
        });
    }

</script>    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
    <script>
        var clientInstanceId = "809313fc-1f5c-4d0b-90bc-1c6751b83bbd";
        const beamsClient = new PusherPushNotifications.Client({
            instanceId: clientInstanceId,
        });

        // navigator.serviceWorker.register('https://envato.appdevs.net/qrpay/public/service-worker.js')
        //     .then((registration) => {
        //     messaging.useServiceWorker(registration)});

        var generatePublisherId = "user-"+"1";
        const beamsTokenProvider = new PusherPushNotifications.TokenProvider({
            url: "https://envato.appdevs.net/qrpay/user/pusher/beams-auth",
        });

        beamsClient
            .start()
            .then((beamsClient) => beamsClient.getDeviceId())
            .then((response) => beamsClient.setUserId(generatePublisherId, beamsTokenProvider))
            .catch(console.error());

    </script>


    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var primaryKey = "39079c30de823f783dbe";
    var cluster = "ap2";

    var pusher = new Pusher(primaryKey, {
        cluster: cluster,
    });

    var channel = pusher.subscribe('user');
    channel.bind('dashbord-push', function(data) {
        var jsonData = JSON.stringify(data);
        var object = JSON.parse(jsonData);
        document.querySelector(".header-notification-area .bling-area").classList.remove("d-none");
        document.querySelector(".notifications-clear-all-btn").classList.remove("d-none");
        var message = `
            <li>
                <div class="thumb">
                    <img src="${object.message.image}" alt="user">
                </div>
                <div class="content">
                    <h6 class="title">${object.message.title}</h6>
                    <span class="sub-title">${object.message.time}</span>
                </div>
            </li>
        `;
        if(document.querySelector(".notification-list .not-found") != null) {
            document.querySelector(".notification-list .not-found").remove();
        }
        document.querySelector(".notification-wrapper .notification-list").innerHTML += message;
    });
    </script>

<script>

</script>
    <script>
    var chart1 = $('#chart1');
    var chart_one_data = chart1.data('chart_one_data');
    var month_day = chart1.data('month_day');
    var options = {
        series: [
            {
            name: 'Pending',
            color: "#0C56DB",
            data: chart_one_data.pending_data
            }, {
            name: 'Completed',
            color: "rgba(0, 227, 150, 0.85)",
            data: chart_one_data.success_data
            }, {
            name: 'Canceled',
            color: "#dc3545",
            data: chart_one_data.canceled_data
            }, {
            name: 'Hold',
            color: "#ded7e9",
            data: chart_one_data.hold_data
            }
        ],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            type: "datetime",
            categories:month_day,
        },
        tooltip: {
            x: {
                format: "dd/MM/yy HH:mm",
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
//money out
var chart3 = $("#chart3");
var chart_three_data = chart3.data("chart_three_data");
var month_day = chart3.data("month_day");
// apex-chart
var options = {
    series: [
        {
            name: 'Pending',
            color: "#0C56DB",
            data: chart_three_data.pending_data
            }, {
            name: 'Completed',
            color: "rgba(0, 227, 150, 0.85)",
            data: chart_three_data.success_data
            }, {
            name: 'Canceled',
            color: "#dc3545",
            data: chart_three_data.canceled_data
            }, {
            name: 'Hold',
            color: "#ded7e9",
            data: chart_three_data.hold_data
            }
    ],
    chart: {
        type: "bar",
        height: 350,
        stacked: true,
        toolbar: {
            show: false,
        },
        zoom: {
            enabled: true,
        },
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                legend: {
                    position: "bottom",
                    offsetX: -10,
                    offsetY: 0,
                },
            },
        },
    ],
    plotOptions: {
        bar: {
            horizontal: false,
            borderRadius: 10,
        },
    },
    xaxis: {
        type: "datetime",
        categories: month_day,
    },
    legend: {
        position: "bottom",
        offsetX: 40,
    },
    fill: {
        opacity: 1,
    },
};

var chart = new ApexCharts(document.querySelector("#chart3"), options);
chart.render();

</script>
    <script>
        $(".logout-btn").click(function(){
            var actionRoute =  "https://envato.appdevs.net/qrpay/user/logout";
            var target      = 1;
            var message     = `Are you sure to <strong>Logout</strong>?`;

            openAlertModal(actionRoute,target,message,"Logout","POST");
        });
    </script>
</body>

</html>
