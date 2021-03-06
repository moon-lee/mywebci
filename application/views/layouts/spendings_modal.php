<!-- Add Spending Modal -->
<div class="modal fade" id="addSpendinginfo" tabindex="-1" role="dialog" aria-labelledby="addSpendinginfoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="form_spending" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="addSpendinginfoLabel">Add Spending</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <p><span class="far fa-plus-square"></span>Basic</p>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="spendingDate">Spending Date</label>
                            <div class="input-group-sm">
                                <input type="text" name="spendingdate" id="spendingDate" class="form-control"
                                    placeholder="Select date ..." required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="spendingAmount">Amount</label>
                            <div class="input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                    <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="spendingamount"
                                        id="spendingAmount" class="form-control form-control-sm text-right" data-format-type="currency"
                                        required>
                                    <div class="invalid-tooltip"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><span class="far fa-plus-square"></span>Details</p>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="accountType">Account Type</label>
                            <div class="input-group-sm">
                                <select class="form-control" name="accounttype" id="accountType" required>
                                    {account_type}
                                </select>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label for="mainCategory">Main Category</label>
                            <div class="input-group-sm">
                                <select class="form-control" name="maincategory" id="mainCategory" required>
                                    {main_category}
                                </select>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label for="subCategory">Sub-Category</label>
                            <div class="input-group-sm">
                                <select class="form-control" name="subcategory" id="subCategory" required>
                                    {sub_category_first}
                                </select>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <div class="input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" name="ospendingtax" id="spendingTax" value="true">
                                    </span>
                                    <span class="input-group-text">Tax Refundable</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <div class="input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description</span>
                                    <input type="text" name="ospendingdesc" id="spendingDesc"
                                        class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>