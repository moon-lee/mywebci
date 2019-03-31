<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{pagetitle}</title>
    <!-- CSS -->
    {css}
</head>

<body>
    <div class="app-wrapper">
        <!-- #sidebar -->
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-header">
                <a href="#" class="site-title"><i class="fas fa-cloud fa-lg"></i><span>WOM</span></a>
            </div>

            <div class="sidebar-profile">
                <span>Welcome,</span>
                <span>{username}</span>
            </div>

            <div class="sidebar-list">
                <ul class="list-unstyled">
                    <li>
                        <a href="{dashboard}"><i class="fas fa-tachometer-alt fa-lg"></i>Dashboard</a>
                    </li>

                    <li>
                        <a class="dropdown-toggle" data-toggle="collapse" href="#mydatalist" aria-expanded="false"
                            aria-controls="mydatalist"><i class="fas fa-table fa-lg"></i>
                            My Finance
                        </a>

                        <ul class="collapse list-unstyled sidebar-child-list" id="mydatalist">
                            <li><a href="{payments}"><i class="fas fa-money-check-alt"></i>Income</a></li>
                            <li><a href="{spendings}"><i class="fas fa-money-check"></i>Expenses</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{settings}"><i class="fas fa-cog fa-lg""></i>Settings</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- /#sidebar -->

        <!-- page content -->
        <div class="content-wrapper">
            <div class="content-header sticky-top">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn my-btn">
                            <i class="fas fa-bars fa-lg"></i>
                        </button>
                        <button class="btn my-btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="fas fa-bars fa-lg"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">

                                <li class="nav-item active">
                                    <a href="{logout}" class="btn btn-sm my-btn" role="button" aria-pressed="true"><i class="fas fa-sign-out-alt fa-lg fa-pull-right"></i>
                                        Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            {content-body}

            <div class="content-footer">
                <div class="container-fluid">
                    <span> <strong>Copyright &copy; {copyrightyear} <a href="#">WOM</a>.</strong></span>
                    <span> All rights reserved. CI Version <strong> {ci_version} </strong></span>
                </div>
            </div>

        </div>
        <!-- /page content -->
    </div>

    <!-- fontawesome symbol links  -->
    <i data-fa-symbol="ellipsis-v" class="fas fa-ellipsis-v"></i>
    <i data-fa-symbol="clock" class="far fa-clock"></i>
    <i data-fa-symbol="edit" class="far fa-edit"></i>
    <i data-fa-symbol="trash-alt" class="far fa-trash-alt"></i>
    <i data-fa-symbol="minus-circle" class="fas fa-minus-circle"></i>


    <!-- Modal -->
    {modal}
    <!-- JavaScripts -->
    {js}

</body>

</html>