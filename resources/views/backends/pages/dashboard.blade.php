@extends('backends.master')
@section('page_title')
    <title>Admin Dashboard</title>
@endsection
@section('dashboard_layouts')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="" class="btn btn-success"><i class="fa fa-edit"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-info"><i class="icon icon-basket"></i> </div>
                        <div class="content">
                            <div class="text text-right">Total Products</div>
                            <h5 class="number text-right">{{ count($pro) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-warning"><i class="fa fa-tags"></i> </div>
                        <div class="content">
                            <div class="text text-right">Department</div>
                            <h5 class="number text-right">{{ count($cat) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-success">
                            <i class="fa fa-university"></i>
                        </div>
                        <div class="content">
                            <div class="text text-right">Income</div>
                            <h5 class="number text-right">৳ 335515</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-success">
                            <i class="fa fa-smile-o"></i>
                        </div>
                        <div class="content">
                            <div class="text text-right">Happy Clients</div>
                            <h5 class="number text-right">{{ count($usr) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- delivery area --}}
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-info"><i class="icon icon-map"></i> </div>
                        <div class="content">
                            <div class="text text-right">Divisions</div>
                            <h5 class="number text-right">{{ count($div) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-warning"><i class="icon icon-map"></i> </div>
                        <div class="content">
                            <div class="text text-right">Districts</div>
                            <h5 class="number text-right">{{ count($dis) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-success">
                            <i class="icon icon-map"></i>
                        </div>
                        <div class="content">
                            <div class="text text-right">Upazilas</div>
                            <h5 class="number text-right">{{ count($upa) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Recent Order List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>27</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>23</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td>James</td>
                                        <td>23</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td>charlie</td>
                                        <td>21</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>
                                        <td><span class="badge badge-success">BBA</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Income Survey</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row text-center">
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$231</h4>
                                <p class="text-muted margin-0"> Today's</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$1,254</h4>
                                <p class="text-muted margin-0">This Week's</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$3,298</h4>
                                <p class="text-muted margin-0">This Month's</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$9,208</h4>
                                <p class="text-muted margin-0">This Year's</p>
                            </div>
                        </div>
                        <div id="m_bar_chart" class="graph m-t-20"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection