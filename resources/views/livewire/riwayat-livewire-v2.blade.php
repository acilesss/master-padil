<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="mb-3">Ruangan 2</h5>
                <div class="table-responsive">
                    <table id="datatable2" class="table table-sm table-bordered table-striped">
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
                                    <td>{{ carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i:s') }}</td>
                                    <td>{{ $item->r2_arus }}</td>
                                    <td>{{ $item->r2_tegangan }}</td>
                                    <td>{{ $item->r2_daya }}</td>
                                    <td>{{ $item->r2_pengguna }}</td>
                                    <td>Rp. {{ number_format($item->r2_pengguna * 1000, 2, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
