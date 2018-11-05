<div class="d-flex content-body">
    <div class="container-fluid payments_container">
        <div class="cd-title card card-block align-middle mb-3">
            <div class="card-header">
                <i class="fas fa-money-check-alt"></i><strong>{contenttitle}</strong>

            </div>
        </div>
        <div class="cd-payment card my-4">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">
                    <div class="col-4">
                        <p><span class="far fa-plus-square"></span>Summary</p>
                        <canvas id="paymentPieChart"></canvas>


                        <table class="table table-sm table-hover table-summary text-right">

                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Year to date</td>
                                    <th>Estimation of Year</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_summary">
                                <tr>
                                    <th>Gross</th>
                                    <td class="table-primary" id="sum_gross"></td>
                                    <td class="table-success" id="est_gross"></td>
                                </tr>

                                <tr>
                                    <th>Net</th>
                                    <td class="table-primary" id="sum_net"></td>
                                    <td class="table-success" id="est_net"></td>
                                </tr>
                                <tr>
                                    <th>Withholding</th>
                                    <td id="sum_withholding"></td>
                                    <td id="est_withholding"></td>
                                </tr>
                                <tr>
                                    <th>Superannuation</th>
                                    <td id="sum_super"></td>
                                    <td id="est_super"></td>
                                </tr>
                                <tr>
                                    <th>Holiday Leave[Hours]</th>
                                    <td id="sum_holiday_leave"></td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-8">
                        <p><span class="far fa-plus-square"></span>Details</p>
                        <canvas id="paymentBarChart"></canvas>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-success btn-sm" id="addPayment"><i class="fas fa-plus"></i>Add
                                    Data</button>
                            </div>
                            <div class="col-6">
                                <nav id="payments_pagination_link"></nav>
                            </div>
                        </div>


                        <div class="dropdown-menu dropdown-menu-sm" id="paymentContextMenu">
                            <a class="dropdown-item" href="#">Update</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>