<div class="content-body">
    <div class="container-fluid">
        <div class="cd-title card mb-3">
            <div class="card-header">
                <i class="fas fa-cog"></i><strong>{contenttitle}</strong>
            </div>
        </div>

        <div class="card-settings card my-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <p><span class="far fa-plus-square"></span>General</p>

                        <div class="custom-control custom-checkbox form-group">
                            <input type="checkbox" name="" id="customCheck1" class="custom-control-input">
                            <label for="customCheck1" class="custom-control-label">Enable the notification of tasks</label>
                        </div>

                        <p><span class="far fa-plus-square"></span>Income</p>
                        <div class="form-group">
                            <label for="customSelect1">Pay frequency</label>
                            <select class="custom-select" id="customSelect1">
                                <option value="1">Weekly</option>
                                <option value="2">Fortnightly</option>
                                <option value="3">Monthly</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-5">
                        <p><span class="far fa-plus-square"></span>Expenses - Main Category</p>
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Category</td>
                                    <th>Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Category example</td>
                                    <td>Budget</td>
                                </tr>
                            </tbody>
                        </table>

                        <button class="btn btn-sm btn-primary float-right" type="button" data-toggle="collapse"
                            data-target="#mainCategory" aria-expanded="false" aria-controls="mainCategory">add

                        </button>

                        <div class="collapse" id="mainCategory">
                            <div class="row">
                                <div class="col">
                                    <label for="spendingDate">Spending Date</label>
                                    <div class="input-group">
                                        <input type="text" name="spendingdate" id="spendingDate" class="form-control"
                                            placeholder="Select date ..." required>
                                        <div class="invalid-tooltip"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="spendingAmount">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                        <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="spendingamount"
                                            id="spendingAmount" class="form-control text-right" data-format-type="currency"
                                            required>
                                        <div class="invalid-tooltip"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>