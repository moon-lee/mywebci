<!-- Modal -->
<div class="modal fade" id="addSpendinginfo" tabindex="-1" role="dialog" aria-labelledby="addSpendinginfoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSpendinginfoLabel">Add Spending</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <form id="form_spending" novalidate>
                <div class="modal-body">
                    <p><span class="far fa-plus-square"></span>Basic</p>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="spendingDate">Spending Date</label>
                            <div class="input-group">
                                <input type="text" name="spendingdate" id="spendingDate" class="form-control"
                                    placeholder="Select date ..." required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="spendingAmount">Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="spendingamount" id="spendingAmount"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <p><span class="far fa-plus-square"></span>Details</p>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="spendingAccount">Account</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="spendingaccount" id="spendingAccount"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label for="mainCategory">Category</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="maincategory" id="mainCategory"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label for="subCategory">Sub-Category</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="subcategory" id="subCategory"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="spendingDesc">Description</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="spendingdesc" id="spendingDesc"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
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