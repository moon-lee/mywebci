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
                        <p><span class="far fa-plus-square"></span>Payments Summary</p>
                        <canvas id="paymentPieChart"></canvas>


                        <table class="table table-sm table-hover table-summary">

                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Year to date</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Gross</th>
                                    <td>{gross_sum}</td>
                                </tr>

                                <tr>
                                    <th>Net</th>
                                    <td>{net_sum}</td>
                                </tr>
                                <tr>
                                    <th>Holiday Leave</th>
                                    <td>{holiday_leave_sum}</td>
                                </tr>
                                <tr>
                                    <th>Superannuation</th>
                                    <td>{supperannuation_sum}</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-8">
                        <p><span class="far fa-plus-square"></span>Payments Details</p>
                        <canvas id="paymentBarChart"></canvas>
                        <button>prev</button>
                        <button>next</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>