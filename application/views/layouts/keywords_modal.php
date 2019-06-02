<!-- Add or Edit Keywords Modal -->
<div class="modal fade" id="keywordsInfo" tabindex="-1" role="dialog" aria-labelledby="keywordsInfoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form_keywords" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="keywordsInfoLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <p><span class="far fa-plus-square"></span>Category</p>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="input-group input-group-sm">
                                <select class="form-control" name="maincategory" id="keyword_mainCategory" required>
                                    {main_category}
                                </select>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="input-group input-group-sm">
                                <select class="form-control" name="subcategory" id="subCategory" required>
                                    {sub_category_first}
                                </select>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <p><span class="far fa-plus-square"></span>Keyword</p>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- <span class="input-group-text">Sub Category</span> -->
                                    <input type="text" name="keywordname" id="keywordName"
                                        class="form-control form-control-sm">
                                    <div class="invalid-tooltip"></div>
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