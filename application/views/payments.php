<div class="d-flex content-body">
    <div class="container-fluid">
        <div class="cd-title card card-block align-middle mb-3">
            <div class="card-header">
                <i class="fas fa-money-check-alt"></i><strong>{contenttitle}</strong>
                <button type="button" class="btn btn-success float-right" id="addPayment">Add Data</button>
            </div>
        </div>
        <div class="cd-payment card my-4">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">
                    <div class="col-4">
                        <p><span class="far fa-plus-square"></span>Summary</p>
                        <canvas id="paymentPieChart"></canvas>


                        <table class="table table-sm table-hover table-summary">

                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Year to date</td>
                                </tr>
                            </thead>
                            <tbody id="tbody_summary">
                                <tr>
                                    <th>Gross</th>
                                    <td id="sum_gross"></td>
                                </tr>

                                <tr>
                                    <th>Net</th>
                                    <td id="sum_net"></td>
                                </tr>
                                <tr>
                                    <th>Superannuation</th>
                                    <td id="sum_super"></td>
                                </tr>
                                <tr>
                                    <th>Holiday Leave</th>
                                    <td id="sum_holiday_leave"></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-8">
                        <p><span class="far fa-plus-square"></span>Details</p>
                        <canvas id="paymentBarChart"></canvas>
                        <nav id="payments_pagination_link"></nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>