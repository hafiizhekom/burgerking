
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <div class="card w-50 mx-auto">
                            <div class="card-body text-center">
                                <h2>ACCOUNT</h2>


                                <ul class="list-group mt-3">
                                    <li class="list-group-item"><a href="account/info">Account Info</a></li>
                                    <li class="list-group-item">Payment Method</li>
                                    <li class="list-group-item">Recent Orders</li>
                                    <li class="list-group-item">Submit Feedback</li>
                                  </ul>

                                <div class="mt-4">
                                    <a href="#" class="btn btn-lg btn-primary-reverse w-50" id="logout-button">SIGN OUT</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
@endsection

@section('script')

@endsection

