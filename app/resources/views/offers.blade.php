
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <h3 class="text-center mb-5"> OUR OFFERS </h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="filter">
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Sort
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" onclick="change_sort('price-asc')">Price Lowest</a>
                                          <a class="dropdown-item" onclick="change_sort('price-desc')">Price Highest</a>
                                          <a class="dropdown-item" onclick="change_sort('name-asc')">A - Z</a>
                                          <a class="dropdown-item" onclick="change_sort('name-desc')">Z - A</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter">
                                    <h4 class="pb-2">Search</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search" id="search-form" value="">
                                    </div>
                                </div>

                                <div class="filter">
                                    <h4 class="pb-2">Price</h4>
                                    <div class="form-group">
                                        <input type="number" class="form-control" min="0" placeholder="Harga Terendah" id="lowest-price-form">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" min="0" placeholder="Harga Terendah" id="highest-price-form">
                                    </div>
                                    <button class="btn btn-md btn-block btn-primary">Search</button>
                                </div>



                                <div class="filter">
                                    <ul class="list-group" id="category-list">
                                        <h4 class="pb-2">Category</h4>
                                    </ul>
                                </div>


                            </div>



                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="row" id="offers-list">

                                </div>
                            </div>

                    </div>
                </section>
@endsection


@section('script')
    <script src="asset/js/search-product.js"></script>
@endsection
