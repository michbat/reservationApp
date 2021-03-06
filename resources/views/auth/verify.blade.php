@extends('layouts.master')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Vérification email</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{ route('home.index') }}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="{{ route('login') }}">Login</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="home_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Verification de votre adresse email</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    Un lien de vérification a été envoyé à votre adresse email.
                                </div>
                            @endif

                            Veuillez consulter votre boîte d'email. Si vous n'avez pas reçu d'email
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Cliquez ici pour envoyer
                                    un autre mail de vérification</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
