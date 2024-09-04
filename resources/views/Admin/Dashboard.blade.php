<div class="row">
    <div class="col-lg-2">
        <div class="ibox ">
            <div class="ibox-title">
                <div class="ibox-tools">
                    <span class="label label-success float-right">Monthly</span>
                </div>
                <h5>Views</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{$totalVisits}}</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total views</small>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="ibox">
            <div class="ibox-title">
                <div class="ibox-tools">
                    <span class="label label-info float-right">Annual</span>
                </div>
                <h5>Posts</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $totalPosts }}</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>Total posts</small>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="ibox">
            <div class="ibox-title">
                <div class="ibox-tools">
                    <span class="label label-primary float-right">Today</span>
                </div>
                <h5>Events</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="no-margins">{{ $totalEvents }}</h1>
                        <div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>Rapid pace</small></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="no-margins">{{ $totalEvents / 2 }}</h1>
                        <div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>Slow pace</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Monthly Visits</h5>
                <div class="ibox-tools">
                    <span class="label label-primary">Updated 12.2015</span>
                </div>
            </div>
            <div class="ibox-content no-padding">
                <div class="flot-chart m-t-lg" style="height: 55px;">
                    <div class="flot-chart-content" id="flot-chart1"></div>
                </div>
            </div>

        </div>
    </div>
</div>
