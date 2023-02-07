<!doctype html>
<html lang="en">
<head>
    @include('partials.backend.head')
</head>

<body>

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

    @include('partials.backend.sidebar')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('partials.backend.header')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Quick Overview -->
            <div class="row items-push">
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="be_pages_ecom_orders.html">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold text-primary mb-1">78</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Pending Orders
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold text-success mb-1">26%</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Profit
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold mb-1">126</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Orders Today
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold mb-1">$16.485</div>
                            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                                Earnings Today
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Overview -->

            <!-- Orders Overview -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Orders Overview</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <div style="height: 420px;"><canvas id="js-chartjs-overview"></canvas></div>
                </div>
            </div>
            <!-- END Orders Overview -->

            <!-- Top Products and Latest Orders -->
            <div class="row">
                <div class="col-xl-6">
                    <!-- Top Products -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Top Products</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped table-vcenter fs-sm">
                                <tbody>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.965</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Diablo III</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.154</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Control</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.523</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Minecraft</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.423</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Hollow Knight</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.391</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Sekiro: Shadows Die Twice</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.218</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">NBA 2K20</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.995</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Forza Motorsport 7</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.761</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Minecraft</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.860</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 100px;">
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.952</a>
                                    </td>
                                    <td>
                                        <a class="fw-medium" href="be_pages_ecom_product_edit.html">Age of Mythology</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-end text-nowrap">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Top Products -->
                </div>
                <div class="col-xl-6">
                    <!-- Latest Orders -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Latest Orders</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped table-vcenter fs-sm">
                                <tbody>
                                <tr>
                                    <td class="fw-semibold text-center" style="width: 100px;">
                                        <a href="be_pages_ecom_order.html">ORD.7116</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Jose Mills</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$341,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7115</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Thomas Riley</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Canceled</span>
                                    </td>
                                    <td class="fw-semibold text-end">$468,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7114</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Barbara Scott</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$825,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7113</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Jack Greene</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="fw-semibold text-end">$594,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7112</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Scott Young</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$703,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7111</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Sara Fields</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="fw-semibold text-end">$871,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7110</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Susan Day</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$712,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7109</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Scott Young</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="fw-semibold text-end">$466,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7108</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Lisa Jenkins</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td class="fw-semibold text-end">$593,00</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-center">
                                        <a href="be_pages_ecom_order.html">ORD.7107</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="fw-medium" href="be_pages_ecom_customer.html">Barbara Scott</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Canceled</span>
                                    </td>
                                    <td class="fw-semibold text-end">$486,00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Latest Orders -->
                </div>
            </div>
            <!-- END Top Products and Latest Orders -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    @include('partials.backend.footer')
    <!-- END Footer -->
</div>
<!-- END Page Container -->
@include('partials.backend.script')

</body>
</html>
