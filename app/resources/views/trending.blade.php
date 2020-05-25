
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <button class="btn btn-small btn-primary" id="back-button" style="position:absolute;">Back</button>
                        <h3 class="text-center mb-5" id="title-trending"> TRENDING </h3>
                        <div class="row" id="trending-list">

                        </div>
                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/fetching-article.js");?>"></script>
@endsection

