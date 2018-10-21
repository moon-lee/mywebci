<!-- Modal -->
<div class="modal fade" id="addtodo" tabindex="-1" role="dialog" aria-labelledby="addTodoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addTodoLabel">Add To Do</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <form id="form_todo" novalidate>
                <div class="modal-body">
                    <p><span class="far fa-plus-square"></span>Basic</p>
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="paymentDate">Payment Date</label>
                            <div class="input-group">
                                <input type="text" name="todo_date" id="todo_Date" class="form-control"
                                    placeholder="Select date ..." required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="grossPay">Gross Pay</label>
                            <div class="input-group">
                                <input type="text" name="title" id="title"
                                    class="form-control" required>
                                <div class="invalid-tooltip"></div>
                            </div>
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