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
@endsection
