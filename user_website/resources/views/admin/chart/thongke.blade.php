<!-- resources/views/admin/chart/thongke.blade.php -->
@extends('layouts.admin')

@section('title')
<title>Thống kê doanh thu</title>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name'=>'Thống kê', 'key'=>'List'])
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <h2 class="mb-4 text-center">Thống kê doanh thu sản phẩm theo tháng</h2>

                <form id="revenueForm">
                    <div class="form-group">
                        <label for="month">Chọn tháng:</label>
                        <input type="month" id="month" name="month" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thống kê</button>
                </form>

                <div id="result" class="mt-4">
                    <h4>Kết quả thống kê cho tháng <span id="selectedMonth"></span>:</h4>
                    <p">Tổng số tiền:{{ number_format($totalAmount) }} VND</span></p>
                    <p style="display:none">Tổng số tiền: <span id="totalRevenue">{{ number_format($totalAmount) }} VND</span></p>

                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>

                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody id="orderTableBody">
                            @foreach ($purchaseproduct as $index => $product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y') }}</td>
                                    <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Set the default month to the current month
                    const monthInput = document.getElementById('month');
                    const now = new Date();
                    const currentMonth = now.toISOString().substr(0, 7);
                    monthInput.value = currentMonth;

                    // Data from the server
                    const orders = @json($purchaseproduct);

                    function updateStatistics(month) {
                        const totalRevenue = orders.reduce((sum, order) => sum + order.price, 0);
                        document.getElementById('selectedMonth').innerText = month;
                        document.getElementById('totalRevenue').innerText = totalRevenue.toLocaleString();

                        const orderTableBody = document.getElementById('orderTableBody');
                        orderTableBody.innerHTML = '';
                        orders.forEach((order, index) => {
                            const row = `<tr>
                                <td>${index + 1}</td>
                                <td>${order.name}</td>
                                <td>${ order.quantity}</td>
                                <td>${new Date(order.created_at).toLocaleDateString()}</td>
                                <td>${order.price.toLocaleString()} VND</td>
                            </tr>`;
                            orderTableBody.insertAdjacentHTML('beforeend', row);
                        });

                        const ctx = document.getElementById('revenueChart').getContext('2d');
                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: orders.map(order => new Date(order.created_at).toLocaleDateString()),
                                datasets: [{
                                    label: 'Doanh thu',
                                    data: orders.map(order => order.price),
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });

                        document.getElementById('result').style.display = 'block';
                    }

                    // Handle form submission
                    document.getElementById('revenueForm').addEventListener('submit', function(event) {
                        event.preventDefault();
                        const month = monthInput.value;
                        updateStatistics(month);
                    });

                    // Trigger initial form submission
                    updateStatistics(currentMonth);
                });
            </script>
        </div>
    </div>
</div>
@endsection
