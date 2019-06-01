<!-- Load Data Modal -->
<div class="modal fade" id="loadTransModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Load transactions data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_load_trans" novalidate>
                    <div class="input-group input-group-sm">
                        <div class="custom-file">
                            <input type="file" name="load_data" class="custom-file-input" id="load_trans_data" aria-describedby="load_trans_submit">
                            <div class="invalid-tooltip"></div>
                            <label class="custom-file-label" for="load_trans_data">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" id="load_trans_submit" class="btn btn-sm btn-primary">Load</button>
                        </div>
                    </div>
                    <div id="load_trans_status"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>