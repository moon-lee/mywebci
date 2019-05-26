<!-- Add or Edit Categories Modal -->
<div class="modal fade" id="categoriesInfo" tabindex="-1" role="dialog" aria-labelledby="categoriesInfoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form_categories" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="categoriesInfoLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <p><span class="far fa-plus-square"></span>Main Category</p>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="input-group-sm">
                                <select class="form-control" name="maincategory" id="mainCategory" required>
                                    {main_category}
                                </select>
                                <div class="invalid-tooltip"></div>
                            </div>
                        </div>
                    </div>
                    <p><span class="far fa-plus-square"></span>Sub Category</p>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- <span class="input-group-text">Sub Category</span> -->
                                    <input type="text" name="subcategoryname" id="subCategoryName"
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