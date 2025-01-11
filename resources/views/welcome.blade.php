@extends('templates.bootstrap')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Welcome to Our Site!</h1>
                <p class="lead text-muted mb-4">Your ultimate solution for generating professional PDF sell certificates with ease and efficiency.</p>
                <hr class="my-4">
                <a href="#features" class="btn btn-primary btn-lg">Discover Features</a>
                <a href="#get-started" class="btn btn-outline-secondary btn-lg">Get Started</a>
            </div>
        </div>

        <div id="features" class="mt-5">
            <h2 class="text-center fw-bold mb-4">Why Choose Us?</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-file-pdf fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Generate PDFs</h5>
                            <p class="card-text">Easily create professional PDF certificates with detailed seller and buyer information.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-cogs fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Manage Certificates</h5>
                            <p class="card-text">View, edit, and manage your existing certificates with intuitive tools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-share-alt fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Export and Share</h5>
                            <p class="card-text">Download your certificates or share them directly from the platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="get-started" class="mt-5 text-center">
            <h2 class="fw-bold mb-4">Get Started Today</h2>
            <p class="lead">Sign up now and start generating certificates in just a few clicks.</p>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg">Sign Up</a>
            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg">Log In</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; {{ date('Y') }} Your Company Name. All Rights Reserved.</p>
    </footer>
@endsection
