<!-- Modal -->
<div class="modal fade" id="addPaymentinfo" tabindex="-1" role="dialog" aria-labelledby="addPaymentinfoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addPaymentinfoLabel">Add Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <form id="form_payment">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="paymentDate" class="col-md-3 col-form-label">Payment Date</label>
                        <div class="input-group col-md-9">
                            <input type="text" name="paymentdate" id="paymentDate" class="form-control" placeholder="Select date ..." required >
                            <div class="invalid-tooltip"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="grossPay" class="col-md-3 col-form-label">Gross Pay</label>
                        <div class="input-group col-md-9">
                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                            <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="grosspay" id="grossPay" class="form-control" data-format-type="currency" required>
                             <div class="invalid-tooltip"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="netPay" class="col-md-3 col-form-label">Net Pay</label>
                        <div class="input-group col-md-9">
                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                            <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="netpay" id="netPay" class="form-control" data-format-type="currency" required>
                             <div class="invalid-tooltip"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>