<div class="content-body">
    <div class="container-fluid dashboard_container">
        <div class="cd-title card mb-3">
            <div class="card-header">
                <i class="fas fa-tachometer-alt"></i><strong>{contenttitle}</strong>
            </div>
        </div>
        <div class="row align-items-start justify-content-center">
            <div class="col-4 justify-content-between">
                <div class="cd-payment card my-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-money-check-alt"></i><strong>Payment</strong>
                            </div>
                            <div class="col-6">
                                <p class="card-text text-right">{sum_gross}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cd-weight  card my-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-weight"></i><strong>Weight</strong>
                            </div>
                            <div class="col-6">
                                <p class="card-text  text-right">Current: 88.9kg</p>
                            </div>
                        </div>
                    </div>
                </div>
                {task}
            </div>

            <div class="col-8">
                <div class="cd-cal card my-4">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>