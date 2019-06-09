<div class="content-body">
    <div class="container-fluid">
        <div class="cd-title card mb-2">
            <div class="card-header">
                <i class="fas fa-cog"></i><strong>{contenttitle}</strong>
            </div>
        </div>

        <div class="card-settings card my-2">
            <div class="card-body">
                <div class="row justify-content-around">
                    <div class="col-5">
                        <p><span class="far fa-plus-square"></span>Categories</p>
                        <div class="row" id="categories_section">
                            <div class="col">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="setting_category">Category</label>
                                    </div>
                                    <select class="custom-select" id="setting_category">
                                        {category}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table id="tb-categories" class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Category</td>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>

                        <p><span class="far fa-plus-square"></span>Keywords</p>
                        <div class="row" id="keywords_section">
                            <div class="col">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="setting_keyword">Category</label>
                                    </div>
                                    <select class="custom-select" id="setting_keyword">
                                        {category}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table id="tb-keywords" class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>keyword</td>
                                    <th>Category</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                    <div class="col-7">
                        <p><span class="far fa-plus-square"></span>Load - Spending Data</p>
                        <div class="row" id="trans_section">
                            <div class="col">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="setting_trans">Category</label>
                                    </div>
                                    <select class="custom-select" id="setting_trans">
                                        {category}
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="setting_tStatus">Status</label>
                                    </div>
                                    <select class="custom-select" id="setting_tStatus">
                                        <option value="">ALL</option>
                                        <option value="0">LOAD</option>
                                        <option value="1">MATCH</option>
                                        <option value="2">APPLY</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table id="tb-load-spend" class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</td>
                                    <th>Detail</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                        </table>
                        <div id="toast-wrapper">
                            <div class="toast fade hide" role="alert" aria-live="assertive" aria-atomic="true"
                                data-delay="10000">
                                <div class="toast-header">
                                    <strong class="mr-auto">Transaction</strong>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body" id="toast_message">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>