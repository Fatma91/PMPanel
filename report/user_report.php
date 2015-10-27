<script src="<?php $js1=base_url().'resources/js/jquery1.min.js';echo $js1;?>"></script>
<script src="<?php $js1=base_url().'resources/js/highcharts.js'; echo $js1;?>">
    </script>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reports</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           User Report
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div id="container" style="width:100%; height:400px;">

                             </div>
                                <script>

                                        $(function () {
                                        $('#container').highcharts({
                                                chart: {
                                                    type: 'area',

                                                },
                                                title: {
                                                    text: 'Monthly Average Registration'
                                                },
                                                xAxis: {
                                                    categories: ['January', 'February','March','April','May','June','July','August','September','October','November','December']
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: 'Users Registration Rate'
                                                    }
                                                },
                                                
                                                series:<?php echo $series_data; ?>
                                            });
                                        });

                                    </script>
                        </div>
                    </div>
                </div>
            </div>
</div>