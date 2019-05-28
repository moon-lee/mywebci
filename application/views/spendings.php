<div class="content-body">
    <div class="container-fluid">
        <div class="cd-title card mb-2">
            <div class="card-header">
                <i class="fas fa-money-check"></i><strong>{contenttitle}</strong>
            </div>
        </div>

        <div class="card-spendings card my-2">
            <div class="card-body">

                <p><span class="far fa-plus-square"></span>Summary</p>

                <div class="row align-items-sm-center" id="sp_summary_section">
                    <div class="col">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="sp_year_month">Year-Month</label>
                            </div>
                            <select class="custom-select" id="sp_year_month">
                                {spend_year_month}
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="sp_category">Category</label>
                            </div>
                            <select class="custom-select" id="sp_category">
                                {category}
                            </select>
                        </div>
                    </div>
                    <div class="col-auto" id="spending_sub_summary_wrapper"></div>
                </div>
                <div class="row justify-content-end" id="spending_main_summary_wrapper"></div>
                <div class="row justify-content-between" id="spending_financial_trends_wrapper"></div>

                <p><span class="far fa-plus-square"></span>Details</p>

                <table id="tb-spending" class="table table-sm table-bordered table-hover" width="100%">
                    <thead class="thead-light">
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