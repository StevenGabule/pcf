@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Bar Chart 2012 enrolled -->
        <div class="col-xl-8 col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Yearly Estimated Enrolled</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBarYearlyChart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart 2011 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2011</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myAreaChart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bar Chart 2012 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2012</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2012Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart 2013 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2013</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2013Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart 2014 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2014</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2014Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bar Chart 2015 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2015</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2015Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart 2016 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2016</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2016Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart 2017 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2017</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2017Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bar Chart 2018 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2018</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2018Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bar Chart 2019 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2019</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2019Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bar Chart 2020 enrolled -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student Enrolled In 2020</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBar2020Chart" style="display: block; width: 1037px; height: 320px;" width="1037" height="320" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')

    @include('admin.__shared.2011_yearly_enrolled_report')
    @include('admin.__shared.2012_yearly_enrolled_report')
    @include('admin.__shared.2013_yearly_enrolled_report')
    @include('admin.__shared.2014_yearly_enrolled_report')
    @include('admin.__shared.2015_yearly_enrolled_report')
    @include('admin.__shared.2016_yearly_enrolled_report')
    @include('admin.__shared.2017_yearly_enrolled_report')
    @include('admin.__shared.2018_yearly_enrolled_report')
    @include('admin.__shared.2019_yearly_enrolled_report')
    @include('admin.__shared.2020_yearly_enrolled_report')
    @include('admin.__shared.yearly_enrolled_report')
 @endpush
