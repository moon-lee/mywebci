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
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>