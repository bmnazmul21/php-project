<?php include "header.php" ?>
<?php include "top.php" ?>


    <div class="right-part container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item dd-item">
                            <a class="nav-link dd-link collapsed" data-bs-toggle="collapse" data-delay="0"
                                href="#collapseSetting" role="button" aria-expanded="false"
                                aria-controls="collapseSetting">
                                <span data-feather="folder" class="align-text-bottom"></span>
                                Settings
                            </a>
                            <div class="collapse" id="collapseSetting">
                                <a class="nav-link inner-item" href="#">
                                    General Settings
                                </a>
                                <a class="nav-link inner-item" href="#">
                                    Payment Settings
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form.html">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form-tab.html">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Form Tab
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="table.html">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Table
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datatable.html">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Data Table
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

                <h1 class="page-heading">Dashboard</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="number">140</div>
                            <div class="text">Active Customers</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="number">14</div>
                            <div class="text">Pending Customers</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="number">1200</div>
                            <div class="text">Active Listings</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="number">300</div>
                            <div class="text">Pending Listings</div>
                        </div>
                    </div>
                </div>

                <h2 class="page-heading mt_10">Latest Listing</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">Property Price</th>
                                <th scope="col">Location</th>
                                <th scope="col">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>207 AB Villa</td>
                                <td>$10,000</td>
                                <td>NewYork</td>
                                <td>Villa</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>207 AB Villa</td>
                                <td>$10,000</td>
                                <td>NewYork</td>
                                <td>Villa</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>207 AB Villa</td>
                                <td>$10,000</td>
                                <td>NewYork</td>
                                <td>Villa</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>207 AB Villa</td>
                                <td>$10,000</td>
                                <td>NewYork</td>
                                <td>Villa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="page-heading">Sales of 2022</h2>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

            </main>
        </div>
    </div>

    <?php include "footer.php" ?>