
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <div class="card w-50 mx-auto">
                            <div class="card-body text-center">
                                <h2>CART</h2>


                                <ul class="list-group mt-3" id="cart-list">
                                </ul>

                                <div class="mt-2">
                                    Total Price: <span class="price-tag"></span>
                                </div>

                                <div class="mt-4">
                                    <a href="#" class="btn btn-lg btn-primary-reverse w-50 open-modal-order">ORDER</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
@endsection

@section('script')

@endsection

