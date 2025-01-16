<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="mb-3">Ruangan 1</h5>
                <div class="table-responsive">
                    <table id="datatable1" class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Arus (A)</th>
                                <th>Tegangan (V)</th>
                                <th>Daya (W)</th>
                                <th>Energi (kWh)</th>
                                <th>Penggunaan (Rp.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ carbon\Carbon::parse($item->created_at)->locale('id')->format('d/m/Y H:i:s') }}</td>
                                    <td>{{ $item->r1_arus }}</td>
                                    <td>{{ $item->r1_tegangan }}</td>
                                    <td>{{ $item->r1_daya }}</td>
                                    <td>{{ $item->r1_pengguna }}</td>
                                    <td>Rp. {{ number_format($item->r1_pengguna * 1000, 2, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
