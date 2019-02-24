<div class="content-body">
    <div class="container-fluid">
        <div class="cd-title card mb-3">
            <div class="card-header">
                <i class="fas fa-money-check"></i><strong>{contenttitle}</strong>
            </div>
        </div>

        <div class="card-spendings card my-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <p><span class="far fa-plus-square"></span>Summary</p>
                    </div>
                    <div class="col-8">
                        <p><span class="far fa-plus-square"></span>Details</p>

                        <table id="datatable" class="table table-sm table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Account Type</th>
                                    <th>Category</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                        </table>

                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary btn-sm" id="addSpending"><i class="fas fa-plus"></i>Add
                                    Data</button>
                            </div>
                            <div class="col-6">
                                <nav id="spendings_pagination_link"></nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>