<!-- Thống kê danh mục -->


<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Thống kê</b></a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="item" style="display: flex;">

    <div class="item_bieudo">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <div id="myChart" style="width:600px; height:330px; margin-bottom: 25px;">
        </div>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    foreach ($listthongke as $item) {
                        echo '["' . $item['tendm'] . '", ' . $item['count_sp'] . '],';
                    }
                    ?>
                ]);

                const options = {
                    title: 'Thống kê danh mục sản phẩm',
                };

                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
    </div>

    <!--  bảng thống kê -->
    <div class="item_bieudo" style="margin-left: 25px;">
        <div>
            <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
            <table>
                <tr>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG SẢN PHẨM</th>
                </tr>
                <?php
                foreach ($listthongke as $tke) {
                    extract($tke);
                    echo '<tr>
                        <td>' . $tendm . '</td>
                        <td>' . $count_sp . '</td>
                    </tr>';
                }
                ?>
            </table>
        </div>
        <div>
            <div id="myChart"></div>
        </div>
    </div>
</div>

</div>

<!-- Doan thu theo tháng -->
<div class="products" style="width: 100%; width: 1440px; height: 500px; margin-bottom: 65px;">
    <h1>BIỂU ĐỒ THỐNG KÊ DOANH THU THEO THÁNG</h1>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="lineChart"></canvas>

    <?php
    $rows = doanhthutheothang();

    if ($rows) {
        // Tạo mảng để chứa dữ liệu
        $data = [];

        foreach ($rows as $row) {
            $data[] = [
                'thang' => $row['thang'],
                'doanhThu' => $row['tongDoanhThu']
            ];
        }
        usort($data, function ($a, $b) {
            return $a['thang'] - $b['thang'];
        });
    }
    ?>

    <script>
        var ctxL = document.getElementById("lineChart").getContext('2d');

        var hasData = <?php echo isset($data) && !empty($data) ? 'true' : 'false'; ?>;

        if (hasData) {
            var labels = <?php echo json_encode(array_column($data, 'thang')); ?>;

            var doanhThu = <?php echo json_encode(array_column($data, 'doanhThu')); ?>;

            var myLineChart = new Chart(ctxL, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Doanh thu",
                        data: doanhThu,
                        backgroundColor: ['rgba(105, 0, 132, .2)'],
                        borderColor: ['rgba(200, 99, 132, .7)'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true
                }
            });
        }
    </script>



</div>
<!-- thống kê bình luận -->
