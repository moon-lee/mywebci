<!-- Modal -->
<div class="modal fade" id="addPaymentinfo" tabindex="-1" role="dialog" aria-labelledby="addPaymentinfoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPaymentinfoLabel">Add Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <form id="form_payment" novalidate>
                <div class="modal-body">
                    <p><span class="far fa-plus-square"></span>Basic</p>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="paymentDate">Payment Date</label>
                            <div class="input-group">
                                <input type="text" name="bpaymentdate" id="paymentDate" class="form-control"
                                    placeholder="Select date ..." required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="grossPay">Gross Pay</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="bgrosspay" id="grossPay"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="netPay">Net Pay</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="bnetpay" id="netPay"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="withHolding">PAYG</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="bwithholding" id="withHolding"
                                    class="form-control text-right" data-format-type="currency" readonly>
                            </div>
                        </div>
                    </div>
                    <p><span class="far fa-plus-square"></span>Details</p>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="overTime_15">Overtime(1.5x)</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dovertime_15" id="overTime_15"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label for="shiftAllow">Shift Allowence</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dshiftallow" id="shiftAllow"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label for="baseHour">Base</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dbasehour" id="baseHour"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="overTime_2">Overtime(2x)</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dovertime_2" id="overTime_2"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="personalLeave">Personal Leave</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dpersonalleave" id="personalLeave"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="holidayPay">Holiday Pay</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dholidaypay" id="holidayPay"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="holidayLoad">Holiday Leave Load</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="dholidayload" id="holidayLoad"
                                    class="form-control text-right" data-format-type="currency" required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <p><span class="far fa-plus-square"></span>More...</p>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group row ">
                                <label for="holidayHours" class=" col-5 col-form-label text-right">Annual Leave
                                    </label>
                                <div class="input-group col-7">
                                    <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="oholidayhours" id="holidayHours"
                                        class="form-control text-right" data-format-type="currency" required>
                                    <div class="input-group-append"><span class="input-group-text">hrs</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group row">
                                <label for="superAnnuation" class=" col-5 col-form-label text-right">Superannuation </label>
                                <div class="input-group col-7">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                    <input type="text" pattern="^\d{1,3}(,\d{3})*(\.\d+)?$" name="osuperannuation" id="superAnnuation"
                                        class="form-control text-right" data-format-type="currency" required>
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