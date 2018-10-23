<!-- TO DO List -->
<div class="card my-5">
    <div class="card-header">
        <i class="far fa-clipboard"></i>
        <strong>Task List</strong>
    </div>
    <!-- /.box-header -->
    <div class="card-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <ul class="task-list">
            <li>
                <i class="fas fa-ellipsis-v"></i>
                <!-- checkbox -->
                <input type="checkbox" value="">
                <!-- todo text -->
                <span class="text">Design a nice theme</span>
                <!-- Emphasis label -->
                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                <!-- General tools such as edit or delete-->
                <div class="tools">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </div>
            </li>
            <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <input type="checkbox" value="">
                <span class="text">Make the theme responsive</span>
                <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                <div class="tools">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </div>
            </li>
            <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <input type="checkbox" value="">
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                <div class="tools">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </div>
            </li>
            <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <input type="checkbox" value="">
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                <div class="tools">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </div>
            </li>
            <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <input type="checkbox" value="">
                <span class="text">Check your messages and notifications</span>
                <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                <div class="tools">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </div>
            </li>
            <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <input type="checkbox" value="">
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                <div class="tools">
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                </div>
            </li>
        </ul>
    </div>
    <!-- /.box-body -->
    <div class="card-footer">
        <div class="row">
            <div class="col-5">
                <button type="button" class="btn btn-default btn-sm" id="addTaskList"><i class="fas fa-plus"></i> Add
                    Task</button>
            </div>
            <div class="col-7">
                <nav id="task_pagination_link"></nav>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->