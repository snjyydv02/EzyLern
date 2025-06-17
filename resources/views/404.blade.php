@extends('layouts.app')
@section('content')
<style>
      .error-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 20px;
        }
        .error-code {
            font-size: 10rem;
            font-weight: bold;
            background: linear-gradient(45deg, #a445b2, #fa4299);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
                padding:10%;
        }
        .error-message {
            font-size: 1.5rem;
            color: #333;
        }
        .error-description {
            font-size: 1rem;
            color: #666;
            margin-top: 10px;
        }
        .home-button {
            margin-top: 30px;
        }
    </style>
    <br> <br>

<div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Oops! Page Not Found</div>
    <div class="error-description">
        The URL you entered doesn’t match any page on our website.<br>
        It might have been removed, renamed, or is temporarily unavailable.
    </div>
    <a href="{{ url('/') }}" class="btn btn-primary home-button">Return to Homepage</a>
</div>



@endsection
