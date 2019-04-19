<!-- Upload file Modal -->
<div class="modal fade" id="uploadFile" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload spending data file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_upload" novalidate>
                    <div class="input-group input-group-sm">
                        <div class="custom-file">
                            <input type="file" name="spend_data" class="custom-file-input" id="upload_spend_file">
                            <div class="invalid-tooltip"></div>
                            <label class="custom-file-label" for="upload_spend_file">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button type="submit"  class="btn btn-sm btn-primary">Upload</button>
                        </div>
  
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="upload_status"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>