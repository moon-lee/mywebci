<!-- Modal -->
<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addTaskLabel">Add Task</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <form id="form_task" novalidate>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-11">
                            <label for="taskItem">Task</label>
                            <div class="input-group">
                                <input type="text" name="task_item" id="taskItem" class="form-control" maxlength="80"
                                    required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="col-1 align-self-center"><span id="taskItemLength"></span></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="taskDueDate">Due Date</label>
                            <div class="input-group">
                                <input type="text" name="task_due_date" id="taskDueDate" class="form-control"
                                    placeholder="Select date ..." required>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="taskPriority">Priority</label>
                            <select class="form-control" name="task_priority" id="taskPriority">
                                <option value="0">Select Priority</option>
                                <option value="1">Urgent</option>
                                <option value="2">High</option>
                                <option value="3">Medium</option>
                                <option value="4">Low</option>
                            </select>
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