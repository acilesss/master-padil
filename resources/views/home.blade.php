@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('contents')
    <div class="row mb-3">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Ruangan 1</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Ruangan 2</h4>
                </div>
            </div>
        </div>
    </div>

    @livewire('dashboard-livewire')
    @livewire('dashboard-livewire-v2')
    @livewire('dashboard-livewire-v3')

    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-body">
                    <canvas id="biayaChartR1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-body">
                    <canvas id="biayaChartR2"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // Data dari backend
            const data = @json($biaya);

            // Ekstrak waktu (per jam) dan total biaya
            const labels = [];
            const biaya = [];

            $.each(data, function(index, item) {
                labels.push(item.hour); // Format waktu per jam
                biaya.push(item.total_biaya); // Total biaya
            });

            // Inisialisasi grafik
            const ctx = $('#biayaChartR1');
            const biayaChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Biaya (IDR) R1',
                        data: biaya,
                        backgroundColor: 'rgba(153, 102, 255, 0.6)',
                        borderColor: 'rgba(153, 102, 255, 1)',
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
        });

        $(document).ready(function() {
            // Data dari backend
            const data = @json($biaya2);

            // Ekstrak waktu (per jam) dan total biaya
            const labels = [];
            const biaya = [];

            $.each(data, function(index, item) {
                labels.push(item.hour); // Format waktu per jam
                biaya.push(item.total_biaya); // Total biaya
            });

            // Inisialisasi grafik
            const ctx = $('#biayaChartR2');
            const biayaChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Biaya (IDR) R2',
                        data: biaya,
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
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
        });
    </script>
@endsection
