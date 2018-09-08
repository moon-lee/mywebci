<!-- calendar modal -->
<div id="fcmodalnew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
            </div>
            <div class="modal-body">
                <div id="testmodal" style="padding: 5px 20px;">
                <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                    </div>
                </div>
                </form>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div id="fcmodaledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
        </div>
        <div class="modal-body">

        <div id="testmodal2" style="padding: 5px 20px;">
            <form id="antoform2" class="form-horizontal calender" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label">Title</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="title2" name="title2">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                </div>
            </div>

            </form>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
        </div>
    </div>
    </div>
</div>


<div style="display: none;">
    <button id="fc_create" type="button" class="btn" data-toggle="modal" data-target="#fcmodalnew"></button>
    <button id="fc_edit" type="button" class="btn" data-toggle="modal" data-target="#fcmodaledit"></button>
</div>
<!-- <div id="fc_create" data-toggle="modal" data-target="#fcmodalnew"></div>
<div id="fc_edit" data-toggle="modal" data-target="#fcmodaledit"></div> -->
<!-- /calendar modal -->