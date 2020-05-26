
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <div class="card w-50 mx-auto">
                            <div class="card-body text-center">
                                <h2>ORDER</h2>


                                <ul class="list-group mt-3" id="cart-list">
                                </ul>

                                <div class="mt-2">
                                    Total Price: <span class="price-tag"></span>
                                </div>

                                <div class="mt-2">
                                    <ul class="list-group mt-3" id="cart-list">
                                        <li class="list-group-item" id="list-type-order">Type Order: <span id="type-order"></span></li>
                                        <li class="list-group-item" id="list-location-order">Location: <span id="location"></span></li>
                                        <li class="list-group-item" id="list-address-order">Location Address: <span id="location-address"></span></li>
                                        <li class="list-group-item" id="list-phone-order">Location Phone: <span id="location-phone"></span></li>
                                        <li class="list-group-item" id="list-instruction-order">Location Instrution: <span id="location-instruction"></span></li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <form id="restaurant-form">
                                        <input type="hidden" name="type">
                                        <input type="hidden" name="location">
                                        <button type="submit" class="btn btn-lg btn-primary-reverse w-50">ORDER</button>
                                    </form>

                                    <form id="delivery-form">
                                        <input type="hidden" name="type">
                                        <input type="hidden" name="address">
                                        <input type="hidden" name="phone">
                                        <input type="hidden" name="note">
                                        <button type="submit" class="btn btn-lg btn-primary-reverse w-50">ORDER</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/order.js");?>"></script>
@endsection

