@include('inc.header')
@include('in.sidebar')
      <!-- -------------------------------------------------------------- -->
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-7 align-self-center">
              <div class="d-flex no-block justify-content-end align-items-center">
                <div class="me-2">
                  <div class="lastmonth"></div>
                </div>
                <div class="">
                  <small>LAST MONTH</small>
                  <h4 class="text-info mb-0 font-medium">$58,256</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Sales chart -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                            start Sales Summary
                        ---------------- -->
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Sales Summary</h4>
                      <h5 class="card-subtitle">Overview of Latest Month</h5>
                    </div>
                    <div class="ms-auto d-flex no-block align-items-center">
                      <ul class="list-inline fs-2 dl me-3 mb-0">
                        <li class="list-inline-item text-info">
                          <i class="ri-checkbox-blank-circle-fill align-middle fs-3"></i>
                          Iphone
                        </li>
                        <li class="list-inline-item text-primary">
                          <i class="ri-checkbox-blank-circle-fill align-middle fs-3"></i>
                          Ipad
                        </li>
                      </ul>
                      <div class="dl">
                        <select class="form-select">
                          <option value="0" selected>Monthly</option>
                          <option value="1">Daily</option>
                          <option value="2">Weekly</option>
                          <option value="3">Yearly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <!-- column -->
                    <div class="col-lg-4 d-md-flex d-lg-block justify-content-between">
                      <div>
                        <h1 class="mb-0 mt-4">$6,890.68</h1>
                        <h6 class="fw-light text-muted">Current Month Earnings</h6>
                      </div>
                      <div>
                        <h3 class="mt-4 mb-0">1,540</h3>
                        <h6 class="fw-light text-muted mb-md-0 mt-md-2 mt-lg-0 mt-0">
                          Current Month Sales
                        </h6>
                      </div>
                      <a class="btn btn-info mt-3 p-3 pl-4 pr-4 mb-3" href="javascript:void(0)"
                        >Last Month Summary</a
                      >
                    </div>
                    <!-- column (sales summery chart) -->
                    <div class="col-lg-8">
                      <div class="sales-summery"></div>
                    </div>
                    <!-- column -->
                  </div>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- Wallet  Summary-->
                <!-- -------------------------------------------------------------- -->
                <div class="card-body border-top">
                  <div class="row mb-0">
                    <!-- col -->
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                      <div class="d-flex align-items-center">
                        <div class="me-2">
                          <span class="text-orange display-5"
                            ><i class="ri-wallet-2-fill"></i
                          ></span>
                        </div>
                        <div>
                          <span>Wallet Balance</span>
                          <h3 class="font-medium mb-0">$3,567.53</h3>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                      <div class="d-flex align-items-center">
                        <div class="me-2">
                          <span class="text-cyan display-5"
                            ><i class="ri-money-cny-circle-fill"></i
                          ></span>
                        </div>
                        <div>
                          <span>Referral Earnings</span>
                          <h3 class="font-medium mb-0">$769.08</h3>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                      <div class="d-flex align-items-center">
                        <div class="me-2">
                          <span class="text-info display-5"
                            ><i class="ri-shopping-bag-fill"></i
                          ></span>
                        </div>
                        <div>
                          <span>Estimate Sales</span>
                          <h3 class="font-medium mb-0">5489</h3>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                    <!-- col -->
                    <div class="col-lg-3 col-md-6">
                      <div class="d-flex align-items-center">
                        <div class="me-2">
                          <span class="text-primary display-5"
                            ><i data-feather="dollar-sign"></i
                          ></span>
                        </div>
                        <div>
                          <span>Earnings</span>
                          <h3 class="font-medium mb-0">$23,568.90</h3>
                        </div>
                      </div>
                    </div>
                    <!-- col -->
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Sales Summary
                        ---------------- -->
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- Sales chart -->
          <!-- -------------------------------------------------------------- -->
          <!-- -------------------------------------------------------------- -->
          <!-- Email campaign chart -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <div class="col-lg-8 col-xl-6 d-flex align-items-stretch">
              <!-- ---------------------
                            start Email Campaigns
                        ---------------- -->
              <div class="card card-hover w-100">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Email Campaigns</h4>
                      <h5 class="card-subtitle">Overview of Email Campaigns</h5>
                    </div>
                    <div class="ms-auto align-items-center">
                      <div class="dl">
                        <select class="form-select">
                          <option value="0" selected>Monthly</option>
                          <option value="1">Daily</option>
                          <option value="2">Weekly</option>
                          <option value="3">Yearly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- column -->
                  <div class="row mt-5">
                    <!-- column -->
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                      <div id="email-campaign"></div>
                    </div>
                    <!-- column (Open Ratio for Campaigns chart) -->
                    <div class="col-lg-6">
                      <h1 class="display-6 mb-0 font-medium">45%</h1>
                      <span>Open Ratio for Campaigns</span>
                      <ul class="list-style-none">
                        <li class="mt-3 d-flex align-items-center">
                          <i class="ri-checkbox-blank-circle-fill fs-3 me-2 text-muted fs-2"></i>
                          Open Ratio <span class="ms-auto">45%</span>
                        </li>
                        <li class="mt-3 d-flex align-items-center">
                          <i class="ri-checkbox-blank-circle-fill fs-3 me-1 text-info fs-2"></i>
                          Clicked Ratio <span class="ms-auto">14%</span>
                        </li>
                        <li class="mt-3 d-flex align-items-center">
                          <i class="ri-checkbox-blank-circle-fill fs-3 me-1 text-orange fs-2"></i>
                          Un-Open Ratio <span class="ms-auto">25%</span>
                        </li>
                        <li class="mt-3 d-flex align-items-center">
                          <i class="ri-checkbox-blank-circle-fill fs-3 me-1 text-primary fs-2"></i>
                          Bounced Ratio <span class="ms-auto">17%</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- column -->
                </div>
              </div>
              <!-- ---------------------
                            start Email Campaigns
                        ---------------- -->
            </div>
            <div class="col-lg-4 col-xl-6 d-flex align-items-stretch">
              <!-- ---------------------
                            start Active Visitors on Site
                        ---------------- -->
              <div class="card card-hover w-100">
                <div
                  class="card-body"
                  style="
                    background: url(../../assets/images/background/active-bg.png) no-repeat top
                      center;
                  "
                >
                  <div class="pt-3 text-center">
                    <i class="ri-file-text-fill display-4 text-orange d-block"></i>
                    <span class="display-4 d-block font-medium">368</span>
                    <span>Active Visitors on Site</span>
                    <!-- Progress -->
                    <div class="progress mt-5" style="height: 4px">
                      <div
                        class="progress-bar bg-info"
                        role="progressbar"
                        style="width: 15%"
                        aria-valuenow="15"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                      <div
                        class="progress-bar bg-orange"
                        role="progressbar"
                        style="width: 30%"
                        aria-valuenow="30"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                      <div
                        class="progress-bar bg-warning"
                        role="progressbar"
                        style="width: 65%"
                        aria-valuenow="20"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <!-- Progress -->
                    <!-- row -->
                    <div class="row mt-4 mb-3">
                      <!-- column -->
                      <div class="col-4 border-end text-start">
                        <h3 class="mb-0 font-medium">60%</h3>
                        Desktop
                      </div>
                      <!-- column -->
                      <div class="col-4 border-end">
                        <h3 class="mb-0 font-medium">28%</h3>
                        Mobile
                      </div>
                      <!-- column -->
                      <div class="col-4 text-end">
                        <h3 class="mb-0 font-medium">12%</h3>
                        Tablet
                      </div>
                    </div>
                    <a
                      href="javascript:void(0)"
                      class="waves-effect waves-light mt-3 btn btn-lg btn-info accent-4 mb-3"
                      >View More Details</a
                    >
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Active Visitors on Site
                        ---------------- -->
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- Email campaign chart -->
          <!-- -------------------------------------------------------------- -->
          <!-- -------------------------------------------------------------- -->
          <!-- Ravenue - page-view-bounce rate -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <!-- ---------------------
                            start Revenue Statistics
                        ---------------- -->
              <div class="card bg-info text-white card-hover w-100">
                <div class="card-body">
                  <h4 class="card-title">Revenue Statistics</h4>
                  <div class="d-flex align-items-center mt-4">
                    <div class="" id="ravenue"></div>
                    <div class="ms-auto">
                      <h3 class="font-medium white-text mb-0">$351</h3>
                      <span class="white-text op-5">Jan 10 - Jan 20</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Revenue Statistics
                        ---------------- -->
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <!-- ---------------------
                            start Page Views
                        ---------------- -->
              <div class="card bg-cyan text-white card-hover w-100">
                <div class="card-body">
                  <h4 class="card-title">Page Views</h4>
                  <h3 class="white-text mb-0"><i class="ri-arrow-up-line"></i> 6548</h3>
                </div>
                <div class="mt-3" id="views"></div>
              </div>
              <!-- ---------------------
                            end Page Views
                        ---------------- -->
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <!-- ---------------------
                            start Bounce Rate
                        ---------------- -->
              <div class="card card-hover w-100">
                <div class="card-body">
                  <h4 class="card-title">Bounce Rate</h4>
                  <div class="d-flex no-block align-items-center mt-4">
                    <div class="">
                      <h3 class="font-medium mb-0">56.33%</h3>
                      <span class="">Total Bounce</span>
                    </div>
                    <div class="ms-auto">
                      <div>
                        <div id="bouncerate"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Bounce Rate
                        ---------------- -->
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- Ravenue - page-view-bounce rate -->
          <!-- -------------------------------------------------------------- -->
          <!-- -------------------------------------------------------------- -->
          <!-- Table -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <div class="col-lg-12">
              <!-- ---------------------
                            start Projects of the Month
                        ---------------- -->
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Projects of the Month</h4>
                      <h5 class="card-subtitle">Overview of Latest Month</h5>
                    </div>
                    <div class="ms-auto d-flex no-block align-items-center">
                      <div class="dl">
                        <select class="form-select">
                          <option value="0" selected>Monthly</option>
                          <option value="1">Daily</option>
                          <option value="2">Weekly</option>
                          <option value="3">Yearly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                      <thead>
                        <!-- start row -->
                        <tr class="border-0">
                          <th class="border-0">Team Lead</th>
                          <th class="border-0">Project</th>
                          <th class="border-0">Team</th>
                          <th class="border-0">Status</th>
                          <th class="border-0">Weeks</th>
                          <th class="border-0">Budget</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="me-2">
                                <img
                                  src="../../assets/images/users/d1.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 fs-4 font-medium">Hanna Gover</h5>
                                <span>hgover@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                              <a
                                class="btn-circle btn btn-cyan text-white popover-item"
                                href="javascript:void(0)"
                                >DS</a
                              >
                              <a class="btn-circle btn p-0 popover-item" href="javascript:void(0)"
                                ><img
                                  src="../../assets/images/users/1.jpg"
                                  class="rounded-circle"
                                  width="39"
                                  alt=""
                              /></a>
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="ri-checkbox-blank-circle-fill text-orange fs-4"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="In Progress"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">$96K</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="me-2">
                                <img
                                  src="../../assets/images/users/d2.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 fs-4 font-medium">Daniel Kristeen</h5>
                                <span>Kristeen@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                              <a
                                class="btn-circle btn btn-primary text-white popover-item"
                                href="javascript:void(0)"
                                >DS</a
                              >
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="ri-checkbox-blank-circle-fill text-success fs-4"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="Active"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">$96K</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="me-2">
                                <img
                                  src="../../assets/images/users/d3.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 fs-4 font-medium">Julian Josephs</h5>
                                <span>Josephs@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                              <a
                                class="btn-circle btn btn-cyan text-white popover-item"
                                href="javascript:void(0)"
                                >DS</a
                              >
                              <a
                                class="btn-circle btn btn-orange text-white popover-item"
                                href="javascript:void(0)"
                                >RP</a
                              >
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="ri-checkbox-blank-circle-fill text-success fs-4"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="Active"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">$96K</td>
                        </tr>
                        <!-- end row -->
                        <!-- start row -->
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="me-2">
                                <img
                                  src="../../assets/images/users/2.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 fs-4 font-medium">Jan Petrovic</h5>
                                <span>hgover@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a
                                class="btn-circle btn btn-orange text-white"
                                href="javascript:void(0)"
                                >RP</a
                              >
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="ri-checkbox-blank-circle-fill text-orange fs-4"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="In Progress"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">$96K</td>
                        </tr>
                        <!-- end row -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Projects of the Month
                        ---------------- -->
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- Table -->
          <!-- -------------------------------------------------------------- -->
          <!-- -------------------------------------------------------------- -->
          <!-- Recent comment and chats -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <!-- column -->
            <div class="col-lg-6">
              <!-- ---------------------
                            start Recent Comments
                        ---------------- -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="comment-widgets scrollable" style="height: 560px">
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row mt-0">
                    <div class="p-2">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">James Anderson</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and type setting industry.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-primary rounded">Pending</span>
                        <span class="action-icons">
                          <a href="javascript:void(0)"
                            ><i data-feather="edit-3" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="check-circle" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="heart" class="feather-sm"></i
                          ></a>
                        </span>
                        <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2016</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../../assets/images/users/4.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="font-medium">Michael Jorden</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and type setting industry.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-success rounded">Approved</span>
                        <span class="action-icons active">
                          <a href="javascript:void(0)"
                            ><i data-feather="edit-3" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="x-circle" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="heart" class="feather-sm text-danger"></i
                          ></a>
                        </span>
                        <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2016</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../../assets/images/users/5.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and type setting industry.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge rounded bg-danger">Rejected</span>
                        <span class="action-icons">
                          <a href="javascript:void(0)"
                            ><i data-feather="edit-3" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="check-circle" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="heart" class="feather-sm"></i
                          ></a>
                        </span>
                        <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2016</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">James Anderson</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and type setting industry.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge rounded bg-primary">Pending</span>
                        <span class="action-icons">
                          <a href="javascript:void(0)"
                            ><i data-feather="edit-3" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="check-circle" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="heart" class="feather-sm"></i
                          ></a>
                        </span>
                        <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2016</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../../assets/images/users/4.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="font-medium">Michael Jorden</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and type setting industry.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-success rounded">Approved</span>
                        <span class="action-icons active">
                          <a href="javascript:void(0)"
                            ><i data-feather="edit-3" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="x-circle" class="feather-sm"></i
                          ></a>
                          <a href="javascript:void(0)"
                            ><i data-feather="heart" class="feather-sm text-danger"></i
                          ></a>
                        </span>
                        <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2016</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                </div>
              </div>
              <!-- ---------------------
                            end Recent Comments
                        ---------------- -->
            </div>
            <!-- column -->
            <div class="col-lg-6">
              <!-- ---------------------
                            start Recent Chats
                        ---------------- -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Chats</h4>
                  <div class="chat-box scrollable position-relative" style="height: 475px">
                    <!--chat Row -->
                    <ul class="chat-list">
                      <!--chat Row -->
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="../../assets/images/users/1.jpg" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">James Anderson</h6>
                          <div class="box bg-light">
                            Lorem Ipsum is simply dummy text of the printing &amp; type setting
                            industry.
                          </div>
                        </div>
                        <div class="chat-time">10:56 am</div>
                      </li>
                      <!--chat Row -->
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="../../assets/images/users/2.jpg" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">Bianca Doe</h6>
                          <div class="box bg-light">It’s Great opportunity to work.</div>
                        </div>
                        <div class="chat-time">10:57 am</div>
                      </li>
                      <!--chat Row -->
                      <li class="odd chat-item">
                        <div class="chat-content">
                          <div class="box bg-light-inverse">I would love to join the team.</div>
                          <br />
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd chat-item">
                        <div class="chat-content">
                          <div class="box bg-light-inverse">Whats budget of the new project.</div>
                          <br />
                        </div>
                        <div class="chat-time">10:59 am</div>
                      </li>
                      <!--chat Row -->
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="../../assets/images/users/3.jpg" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">Angelina Rhodes</h6>
                          <div class="box bg-light">Well we have good budget for the project</div>
                        </div>
                        <div class="chat-time">11:00 am</div>
                      </li>
                      <!--chat Row -->
                      <!-- <div id="someDiv"></div> -->
                    </ul>
                  </div>
                </div>
                <div class="card-body border-top">
                  <div class="row">
                    <div class="col-9">
                      <div class="input-field mt-0 mb-0">
                        <input
                          type="text"
                          id="textarea1"
                          placeholder="Type and enter"
                          class="form-control border-0"
                        />
                      </div>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                      <a class="btn-circle btn-lg btn-cyan btn text-white" href="javascript:void(0)"
                        ><i data-feather="send" class="fill-white feather-sm"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ---------------------
                            end Recent Chats
                        ---------------- -->
            </div>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- Recent comment and chats -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
       