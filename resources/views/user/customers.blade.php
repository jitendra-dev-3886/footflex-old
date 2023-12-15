<!DOCTYPE html>
<html lang="en">
@section('title','Customer')
@include('include.header')
<body class="ltr">

    <div class="preloader">
    <div class="loader-inner">
        <div class="loader-circle">
            <img src="../public/backend/images/web-settings/image-assets/seeder/suvidhaa-logo.png" alt="Preloader">
        </div>
        <div class="loader-line-mask">
            <div class="loader-line"></div>
        </div>
    </div>
</div>

    <div id="body-overlay" class="body-overlay"></div>

    <div class="page-wrapper">
        
    @include('include.sidebar')

        <div class="main-wrapper">
            <div class="main-body-wrapper">
            @include('include.navbar')
<div class="body-wrapper">
    
    
  <div class="col-xxl-12 col-xl-12 col-lg-12 mb-20">
     <div class="chart-wrapper">
       <div class="dash-payment-body">
            <form class="card-form" id="filerFormData" action="" method="POST">
                @csrf
                <div class="row">
                      <div class="col-xl-4 col-lg-4 form-group">
                               <label>Select Date Range</label>
                                <div id="reportrange" class="form-control" name="daterange">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;
                                    <span></span>
                                </div>
                            </div>
                            <input type="hidden" id="fromdate" name="fromdate">
                            <input type="hidden" id="todate" name="todate">
                      <div class="col-xl-2 col-lg-2 form-group">
                        <label>Status <span class="text--base">*</span></label>
                        <div class="input-group">
                             <select class="custom-select form--control form-select" name="status" id="status">
                             <option value="" selected>All</option>
                            <option value="Pending">Pending</option>
                            <option value="Created">Created</option>
                            <option value="SUCCESS" >Success</option>
                            <option value="FAILED">Failed</option>
                              </select>
                        </div>
                    </div>
                      <div class="col-xl-2 col-lg-2 form-group">
                        <label>Amount <span class="text--base">*</span></label>
                        <div class="input-group">
                            <input type="text" name="amount" class="form--control" placeholder="Enter Amount" value="" >
                            <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-2 col-lg-2 form-group">
                        <label>Merchant Txn Number <span class="text--base">*</span></label>
                        <div class="input-group">
                            <input type="text" name="order_id" class="form--control" placeholder="Enter Txn Number" value="" >
                            <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 form-group">
                         <label><span class="text--base"></span></label>
                           <div class="dashboard-btn mb-2">
                                <button type="submit" id="filter" class="btn--base">Search<button>
                            </div>
                        </div>
                    
                    </div>
                    </div>
                </div>
            </form>
        </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12">
                <div class="chart-wrapper table-responsive">
                    <table class="table align-middle mb-0" style="width:100%">
                      <thead class="">
                        <tr>
                        <th>Id No</th>
                        <th>DateTime</th>
                        <th>Member ID</th>
                        <th>Member Name</th>
                        <th>Member Mobile</th>
                        <th>Order Id</th>
                        <th>Order Amount</th>
                        <th>Upi Txn Id</th>
                        <th>Status</th>
                        <th>Charge</th>
                        <th>GST</th>
                        <th>TDS</th>
                        <th>Txn Time</th>
                        <th>Message</th>
                        <th>Remark</th>
                        <th>Txn Date</th>
                        <th>Create Date</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      @foreach($customer as $payinData)
                      <tr>
                        @php $status = $payinData->TRANSACTION_STATUS;
                        if(strtolower($status) == "success"){
                            $bg = "success";
                        }elseif(strtolower($status) == "pending" || $status == "accepted"){
                            $bg = "warning";
                        }
                        elseif(strtolower($status) == "refunded"){
                            $bg = "info";
                        }
                        elseif(strtolower($status) == "failed" || $status == "rejected" || $status == "error"){
                            $bg = "danger";
                        }else{
                            $bg = "primary"; 
                        }
                        @endphp
                          <td>{{ $payinData->W_ID}}</td>
                          <td>{{ $payinData->CURRENTT_TIMESTAMP}}</td>
                          <td>{{ $payinData->PARTNER_ID}}</td>
                          <td>{{ $payinData->FIRST_NAME }} {{ $payinData->LAST_NAME }}</td>
                          <td>{{ $payinData->MOBILE }}</td>
                          <td>{{ $payinData->ORDER_ID }}</td>   
                          <td>{{ $payinData->ORDER_AMOUNT }}</td>
                          <td>{{ $payinData->UPI_TXN_ID }}</td>
                          <td><span class='badge badge--{{$bg}}'>{{ $payinData->TRANSACTION_STATUS }}</span></td>
                          <td>{{ $payinData->CHARGE_AMOUNT }}</td>
                          <td>{{ $payinData->GST }}</td>
                          <td>{{ $payinData->TDS }}</td>
                          <td>{{ $payinData->TRANSACTION_TIME }}</td>
                          <td>{{ $payinData->MESSAGE }}</td>
                          <td>{{ $payinData->REMARK }}</td>
                          <td>{{ $payinData->DATE }}</td>
                          <td>{{ $payinData->CREATE_DATE }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                     
                    </table>
                </div>
            </div>    
    @include('include.footer')
</body>
</html>
