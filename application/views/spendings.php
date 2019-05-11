<div class="content-body">
    <div class="container-fluid">
        <div class="cd-title card mb-3">
            <div class="card-header">
                <i class="fas fa-money-check"></i><strong>{contenttitle}</strong>
            </div>
        </div>

        <div class="card-spendings card my-4">
            <div class="card-body">

                <p><span class="far fa-plus-square"></span>Summary</p>

                <div class="row" id="sp_summary_section">
                    <div class="col-2">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="sp_year_month">Year-Month</label>
                            </div>
                            <select class="custom-select" id="sp_year_month">
                                {spend_year_month}
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="sp_category">Category</label>
                                </div>
                                <select class="custom-select" id="sp_category">
                                   {category}
                                </select>
                            </div>
                        </div>
                </div>
                <div class="row justify-content-end" id="spending_summary_wrapper"></div>
                <p><span class="far fa-plus-square"></span>Details</p>

                <table id="tb-spending" class="table table-sm table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Account Type</th>
                            <th>Amount</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>

    </div>
</div>