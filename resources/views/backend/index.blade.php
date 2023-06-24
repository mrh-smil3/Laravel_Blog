@extends('backend.dashboard')
@section('content')
    <div class="card-header">
        <h3 class="card-title">Dashboard</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <!-- Konten halaman dashboard -->
        @if(Auth::check())
            <p>Welcome, {{ Auth::user()->name }}</p>
        @endif
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
