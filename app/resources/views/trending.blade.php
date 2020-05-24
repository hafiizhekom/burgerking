
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <h3 class="text-center mb-5"> TRENDING </h3>
                        <div class="row" id="trending-list">

                        </div>
                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/fetching-home.js");?>"></script>
@endsection

