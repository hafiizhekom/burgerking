<html>
    <head>
        <title>Burger King</title>
        <link rel="shortcut icon" href="<?=asset("asset/favicon.ico");?>" type="image/x-icon">
        <link rel="stylesheet" href="<?=asset("vendor/bootstrap/css/bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?=asset("asset/css/bk.css");?>">
        <link rel="stylesheet" href="<?=asset("asset/css/navbar.css");?>">
        <script src="<?=asset("vendor/jquery/jquery-3.5.1.min.js");?>"></script>

    </head>
    <body>
        <div class="main">

                <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light p-3">


                    <div class="collapse navbar-collapse nav-left" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="#" id="order-nav-button">ORDER</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="restaurant">RESTAURANTS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="offers">OFFERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="trending">TRENDING</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MORE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">About BK rocks</a>
                                <a class="dropdown-item" href="#">Careers</a>
                                <a class="dropdown-item" href="#">Nutrition</a>
                                <a class="dropdown-item" href="#">Offer Terms</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">FAQ</a>
                                <a class="dropdown-item" href="#">Contact Us</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Term of Services</a>
                                <a class="dropdown-item" href="#">Privacy Policy</a>
                                <a class="dropdown-item" href="#">Trademarks</a>
                                <a class="dropdown-item" href="#">Accessibility</a>
                            </div>
                            </li>
                        </ul>
                    </div>

                        <a class="navbar-brand" href="/">
                            <div class="logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" aria-hidden="true"><g fill-rule="nonzero" fill="none"><path d="M0 44.647C0 19.989 19.985 0 44.645 0c24.66 0 44.644 19.989 44.644 44.647 0 24.655-19.984 44.646-44.645 44.646C19.985 89.293 0 69.303 0 44.647" fill="#FEFEFE"></path><title>Burger King Logo</title><path d="M70.624 53.952c.513-.121.882-.112 1.145.153.306.324.245.862.162 1.2-.394 1.64-3.863 13.268-20.302 17.244-10.764 2.598-20.677-.954-22.914-3.756 0 0-.52-.52-.29-1.048.15-.342.364-.414.835-.617 10.95-4.691 29.945-10.491 41.364-13.176zm-2.595 4.777c.752-1.593-1.417-2.403-2.027-.538-1.523 3.913-4.653 8.508-10.16 11.637 4.893-1.923 9.59-5.595 12.187-11.099zm-36.446-47.24c5.501-2.967 13.358-4.135 19.123-3.518 10.444 1.113 13.626 6.021 13.806 6.313l.016.023c.053.067.362.489.19.918-.137.326-.452.44-.807.502-4.966.843-12.701 2.362-22.122 4.862-6.615 1.755-17.105 5.233-20.621 6.421-.417.14-.747.144-.975-.141-.222-.282-.13-.94-.074-1.16 0 0 1.496-8.848 11.464-14.22zm2.216-.1c-6.041 2.666-10.123 9.015-10.348 11.702-.085 1.069 1.328 1.222 1.465.085 1.276-4.898 5.175-9.524 8.883-11.787zm25.108 2.178c.05-2.437-6.903-5.265-13.273-4.752 6.491.432 10.384 2.931 10.402 4.67.016 1.103-.938 2.075-2.214 2.458 3.258-.8 5.051-.92 5.085-2.376z" fill="#FAAE17"></path><path d="M75.47 56.933c-5.637 12.665-16.45 21.476-30.623 21.676-10.325.142-19.436-3.39-26.015-9.556l-3.978 1.697.01-6.16c-4.336-5.844-6.85-13.24-6.85-21.643 0-21.522 16.48-38.487 39.468-38.487 3.753 0 7.146.585 9.704 1.164C53.244 4.364 49.33 3.68 44.97 3.68c-24.667 0-41.272 20.004-41.272 40.637 0 22.484 17.638 41.314 40.788 41.314 22.11 0 34.036-15.59 37.854-24.961l-6.872-3.737z" fill="#0054A5"></path><path d="M27.065 45.06c.62-.945 2.07-1.802 3.765-1.035 1.539.698 1.962 2.376 1.118 3.728-.63 1.02-4.502 7.124-4.502 7.124l4.396 4.43c.871.96 1.107 3.1-.448 4.354-1.719 1.388-3.665.826-4.727-.277l-4.828-5.123-.01 6.394s.023 1.247-.45 1.985c-.512.81-1.363 1.046-1.363 1.046L15.698 69.5l.018-20.18 6.136-2.54.007 7.132 5.206-8.852zm12.92-5.037l-.008 15.215v1.887c0 2.38-.853 3.544-3.119 4.397-1.59.598-3.298 1.185-3.298 1.185l.006-14.957V45.89c0-2.95 1.12-4.077 3.072-4.784a70.832 70.832 0 013.348-1.082zm19.261-4.997s.016 12.44.003 17.534c-.027 1.523-1.008 2.605-2.187 2.947-1.141.333-2.394.248-3.384-.78l-6.132-7.056s.007 4.614.034 6.975c.011 2.184-.763 3.442-2.88 4.173-.23.077-2.862.984-2.862.984l-.002-20.235 2.94-.888s1.992-.72 3.196.483c2.252 2.257 5.706 6.577 5.706 6.577v-6.07c0-2.543 1.16-3.506 2.675-3.936a50.596 50.596 0 012.802-.689l.091-.02zm21.78 15.957c1.88 0 3.456 1.476 3.456 3.433 0 1.985-1.577 3.46-3.456 3.46-1.896 0-3.474-1.475-3.474-3.46 0-1.957 1.578-3.433 3.474-3.433zm0 .51c-1.622 0-2.848 1.265-2.848 2.923 0 1.685 1.226 2.95 2.848 2.95 1.591 0 2.83-1.265 2.83-2.95 0-1.658-1.239-2.923-2.83-2.923zm.077.925c1.015 0 1.59.313 1.59 1.201 0 .745-.465 1.03-1.07 1.083l1.084 1.777h-.832l-.997-1.741h-.51v1.741h-.79v-4.061h1.525zm-.054.628h-.682v1.07h.722c.457 0 .8-.067.8-.562 0-.445-.455-.508-.84-.508zM69.565 32.094c2.368-.47 4.85-.333 6.76.438 2.587 1 1.781 5.263-1.063 4.836-.848-.126-2.285-.734-4.837-.149-2.257.518-4.124 2.423-4.183 5.724.032 3.076 1.319 4.817 4.151 4.374 2.01-.399 2.038-1.256 2.038-1.338l.001-.005-.011-1.636s-.669.212-1.11.281c-1.388.257-2.029-.465-2.047-1.79.004-.765.005-1.305.006-1.63v-.378l8.585-1.856s.044 5.234 0 6.89c0 1.127-.264 2.65-1.386 3.748-1.231 1.213-3.477 2.513-6.719 2.887-4.52.51-9.551-1.71-9.57-8.534.019-8.589 6.226-11.23 9.386-11.862zm-52.502-.077c3.173-1.154 5.034.236 5.034 2.353 0 1.413-.603 2.615-1.92 3.672 1.296.212 2.399 1.274 2.424 2.745.047 2.822-1.985 4.323-4.633 5.42l-5.423 2.305-.015-14.695s3.417-1.395 4.533-1.8zm1.618 9.281c-.018-1.114-.884-1.719-2.376-.97l-.004 3.576s.483-.214.837-.378c.875-.405 1.557-1.137 1.543-2.228zM31.018 27.11c1.031-.294 1.884.034 1.884 1.272l.002 7.677c-.038 4.036-1.915 5.613-4.725 6.444-3.19.94-5.28-.572-5.267-3.607.014-2.285.007-7.606.005-8.812v-.247s.692-.276 1.846-.661c1.026-.34 1.893.031 1.893 1.276l.011 7.476c.005.91.41 1.485 1.271 1.27 1.12-.282 1.258-1.423 1.27-2.334l.004-9.137s.974-.378 1.806-.617zm7.79-2.369c2.81-.655 4.812.628 4.772 2.898-.014 2.162-1.22 3.476-2.302 4.374l2.378 2.286c.736.711.78 1.993-.036 2.767-.49.46-1.798.934-2.82-.108l-3.174-3.276-.013 3.6c-.007.973-.67 1.675-1.51 1.996-.698.241-2.194.752-2.194.752l.01-13.797s3.075-1.071 4.888-1.492zM18.352 35.693c.009-1.08-.876-1.356-2.075-.738v3.112c.261-.106.461-.193.682-.301.81-.396 1.386-1.125 1.393-2.073zm33.503-14.447c2.378-.083 3.49.69 3.46 1.94-.029 1.167-.839 1.847-2.256 1.617-.574-.072-1.319-.175-2.135.034-1.64.42-2.842 1.921-2.887 4.475.022 1.946.75 2.966 2.063 3 .94.024 1.843-.372 1.84-.975l-.008-1.52s-.36.082-.81.175c-.718.148-1.218-.31-1.222-1.02l.004-1.523 5.481-1.246v5.21c0 .788-.292 1.71-.992 2.33-.706.616-1.719 1.277-3.76 1.69-3.618.652-6.572-1.349-6.572-5.878 0-4.426 2.64-8.131 7.794-8.31zm12.379-2.54s-.007.76-.008 1.306l-.001.252c0 .798-.286 1.383-1.134 1.561-1.093.23-3.123.653-3.123.653v2.052l3.904-.826s.003.51.004 1.16v.336c0 .862-.396 1.271-1.145 1.436-.598.132-2.758.587-2.758.587l-.012 2.59 4.401-.961v1.568c0 .99-.506 1.562-1.316 1.737-2.412.524-6.793 1.557-6.793 1.557l.03-13.399c2.304-.526 6-1.269 7.951-1.608zm5.806-.989c2.768-.356 4.626 1.183 4.592 3.364-.018 1.919-1.224 3.075-2.25 3.768l2.385 2.685c.68.756.648 2.052-.353 2.682-.985.625-1.962.297-2.529-.329l-3.107-3.645s.007 2.241.002 3.222c-.009.972-.571 1.683-1.584 1.895l-2.027.398.009-13.228s3.86-.686 4.862-.812zM39.773 28.71c-.023-1.523-1.427-1.188-2.151-.922l-.005 3.829c.01-.002 2.178-1.125 2.156-2.907zm31.114-7.049c-.016-1.451-1.449-1.188-2.124-1.037l.005 3.573c.004 0 2.15-.817 2.12-2.536z" fill="#EC1D24"></path></g></svg></div>
                        </a>


                        <div class="nav-right">
                            <div class="btn btn-sm btn-link text-dark font-weight-bold" id="recentorder-nav-button">RECENT ORDER</div>
                            <div class="btn btn-sm btn-primary-reverse mr-3" id="signup-nav-button">
                                <span >SIGN UP</span>
                            </div>
                            <a class="btn btn-sm btn-primary-reverse mr-3" id="profile-nav-button" href="/account">
                                <i class="fas fa-user"  style="font-size:20px;"></i>
                            </a>
                            <a class="btn btn-sm btn-primary-reverse" href="cart">$ <span class="price-tag">0</span> <i class="fas fa-shopping-bag"></i></a>
                        </div>

                  </nav>



                <div class="back-content bg-default">
                    @yield('content')
                </div>

                <div class="modal" tabindex="-1" role="dialog" id="buy-modal">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">BUY PRODUCT</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="product-modal">
                            <input type="hidden" name="price-modal">
                            <input type="hidden" name="nameproduct-modal">
                           <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-lg btn-primary btn-block" id="order-button-modal">ORDER</button>
                                </div>

                                <div class="col-6">
                                    <button class="btn btn-lg btn-primary-reverse btn-block" id="add-to-cart-button-modal">ADD TO CART</button>
                                </div>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal" tabindex="-1" role="dialog" id="order-modal">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">WHAT TYPE OF ORDER WILL THIS BE?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="product-modal">
                            <input type="hidden" name="price-modal">
                            <input type="hidden" name="nameproduct-modal">
                           <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-lg btn-primary btn-block" id="delivery-button-modal">DELIVERY</button>
                                </div>

                                <div class="col-6">
                                    <a class="btn btn-lg btn-primary-reverse btn-block" href="restaurant"">AT RESTAURANT</a>
                                </div>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal" tabindex="-1" role="dialog" id="delivery-modal">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">ENTER YOU DELIVERY ADDRESS</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address" id="address-modal">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone-modal" onkeyup="numOnly(this)" onblur="numOnly(this)">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Delivery Instrution" name="instruction" id="instruction-modal">
                            </div>
                            <button class="btn btn-lg btn-block btn-primary" id="delivery-here-button-modal" disabled>DELIVERY HERE</button>
                        </div>
                      </div>
                    </div>
                  </div>



                <section class="footer p-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <ul><h4>BKC INFO</h4>
                                    <li><a href="#">About BK</a></li>
                                    <li><a href="#">Trademarks Notice</a></li>
                                    <li><a href="#">Food Quality</a></li>
                                    <li><a href="#">Prepared to Order</a></li>
                                    <li><a href="#">News & Press</a></li>
                                    <li><a href="#">Investor Relations</a></li>
                                    <li><a href="#">Franchising</a></li>
                                    <li><a href="#">International</a></li>
                                    <li><a href="#">Menu</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <ul><h4>MY BK</h4>
                                    <li><a href="#">BK App</a></li>
                                    <li><a href="#">Gift Cards / Crown Card</a></li>
                                    <li><a href="#">Reload Card</a></li>
                                    <li><a href="#">Check Card Balance</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <ul><h4>CAREERS</h4>
                                    <li><a href="#">Careers Home</a></li>
                                    <li><a href="#">Opportunities</a></li>
                                    <li><a href="#">Apply</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <ul><h4>BK CARES</h4>
                                    <li><a href="#">Nutrition Explorer</a></li>
                                    <li><a href="#">Download Allergens</a></li>
                                    <li><a href="#">Allergens View in Browser</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Responsibility</a></li>
                                    <li><a href="#">BK McLAMORE Foundation</a></li>
                                    <li><a href="#">Diversity</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-copyright pl-4 pr-4">
                            <hr>
                            <div class="d-flex justify-content-between">

                                <svg viewBox="0 0 183 21" width="183" height="21"><title>Wordmark</title><path d="M9.1 1c4.1 0 6.1 1.6 6.1 4.8 0 2.1-.8 3.5-2.5 4.4 2.1 1 3.2 2.7 3.2 4.9 0 4-2.1 5.9-6.4 5.9H0V1h9.1zM20 1c2 0 3 .9 3 2.6v11.1c0 1.1.7 1.7 2 1.7 1.4 0 2-.6 2-1.7V1h3c2 0 3 .9 3 2.6v11.9c0 1.9-.8 3.3-2.4 4.2-1.6.9-3.5 1.4-5.6 1.4-2.1 0-3.9-.5-5.6-1.4-1.6-.9-2.4-2.3-2.4-4.2V1h3zm42.2-1c2.8 0 4.9.4 6.4 1.3s2.2 1.7 2.2 2.5-.2 1.5-.8 2.1c-.5.6-1 .9-1.5.9s-1.2-.2-2.2-.7c-1-.5-2.2-.7-3.8-.8-1.6 0-2.8.5-3.6 1.5-.8 1-1.2 2.3-1.2 3.8s.4 2.8 1.3 3.7c.9 1 2 1.5 3.4 1.4 1.4 0 2.3-.2 2.7-.6v-1.6h-.9c-1.8 0-2.7-.8-2.7-2.5V8.5H71v8.2c0 1.2-.7 2.3-2 3.1-1.3.8-3.5 1.3-6.5 1.3s-5.5-1-7.5-2.9-3-4.5-3-7.6c0-3.1 1-5.7 3-7.6 2-2 4.4-3 7.2-3zM85 1v2.4c0 1.6-.7 2.4-2.2 2.4h-4.1v2.9h5.7V11c0 1.6-.7 2.4-2.2 2.4h-3.5v3H85v2.4c0 1.6-.7 2.4-2.2 2.4H73V1h12zm51 0v17.4c0 1.7-1 2.6-3 2.6h-3V3.6c0-1.7 1-2.6 3-2.6h3zm20 0v17.4c0 1.7-1 2.6-2.9 2.6-1.1 0-1.9-.4-2.6-1.1l-6.6-7.8v6.4c0 1.7-1 2.6-2.9 2.6h-3V1h2.9c1.3 0 2.2.4 2.7 1.2l6.5 7.7V3.6c0-1.7 1-2.6 2.9-2.6h3zm12.2-1c2.8 0 4.9.4 6.4 1.3s2.2 1.7 2.2 2.5-.2 1.5-.8 2.1c-.5.6-1 .9-1.5.9s-1.2-.2-2.2-.7c-1-.5-2.2-.7-3.8-.8-1.6 0-2.8.5-3.6 1.5-.8 1-1.2 2.3-1.2 3.8s.4 2.8 1.3 3.7c.9 1 2 1.5 3.4 1.4 1.4 0 2.3-.2 2.7-.6v-1.6h-.9c-1.8 0-2.7-.8-2.7-2.5V8.5h9.5v8.2c0 1.2-.7 2.3-2 3.1-1.3.8-3.5 1.3-6.5 1.3s-5.5-1-7.5-2.9-3-4.5-3-7.6c0-3.1 1-5.7 3-7.6 2-2 4.4-3 7.2-3zm-40.3 1.7c.7.6 1 1.2 1.1 1.9 0 .7-.3 1.4-.9 2.1l-4.7 5.2 4.7 5.2c.7.8 1 1.5 1 2.2-.1.7-.4 1.3-1.1 1.9-.7.6-1.4.8-2.2.7-.8-.1-1.5-.5-2.2-1.3l-5.7-6.2v4.8c0 1.7-1 2.5-2.9 2.5h-3V1.2h5.9v7.3l5.7-6.1c.7-.8 1.4-1.3 2.2-1.3.7-.2 1.5.1 2.1.6zM44.6 1c1.6 0 3 .6 4.1 1.9 1.1 1.3 1.6 2.6 1.6 4 0 2.6-1 4.4-3 5.5L50 16c.7.9 1.1 1.6 1 2.3 0 .7-.4 1.3-1.1 1.9-.7.5-1.4.8-2.1.8-.7 0-1.5-.5-2.3-1.4l-4.6-6.3v5c0 1.7-1 2.6-2.9 2.6h-3V1h9.6zm52 0c1.6 0 3 .6 4.1 1.9 1.1 1.3 1.6 2.6 1.6 4 0 2.6-1 4.4-3 5.5L102 16c.7.9 1.1 1.6 1 2.3 0 .7-.4 1.3-1.1 1.9-.7.5-1.4.8-2.1.8-.7 0-1.5-.5-2.3-1.4l-4.6-6.3v5c0 1.7-1 2.6-2.9 2.6h-3V1h9.6zM7.8 12.6H6v4.3h1.8c1.4 0 2.2-.7 2.2-2.2 0-1.4-.7-2.1-2.2-2.1zM42.6 5h-1.7v4.5h1.7c1.7 0 2.5-.8 2.5-2.3C45 5.8 44.2 5 42.6 5zm52 0h-1.7v4.5h1.7c1.7 0 2.5-.8 2.5-2.3C97 5.8 96.2 5 94.6 5zm-87 0H6v3.9h1.6c1.3 0 1.9-.6 1.9-1.9.1-1.3-.6-2-1.9-2zm172.9-5c1.4 0 2.5 1.1 2.5 2.5S181.9 5 180.5 5 178 3.9 178 2.5s1.1-2.5 2.5-2.5zm0 .4c-1.2 0-2.1.9-2.1 2.1 0 1.2.9 2.1 2.1 2.1 1.1 0 2-.9 2-2.1 0-1.2-.8-2.1-2-2.1zm.1.6c.7 0 1.1.2 1.1.9 0 .5-.3.7-.8.8l.8 1.3h-.6l-.7-1.3h-.4V4h-.6V1h1.2zm-.1.5h-.5v.8h.5c.3 0 .6 0 .6-.4s-.3-.4-.6-.4z" fill="#fefefe" fill-rule="evenodd"></path></svg>


                                <div class="share-list">
                                    <div class="icon-container">
                                        <a href="#" class="icon-link">
                                            <svg viewBox="0 0 17 16" aria-hidden="true"><title lang="en">Follow us on Instagram</title><path d="M8.082 0C5.91 0 5.637.01 4.784.048c-.852.04-1.433.174-1.942.372-.534.2-1.018.516-1.417.923-.407.4-.722.883-.923 1.417C.304 3.268.169 3.85.13 4.701c-.038.854-.048 1.126-.048 3.3 0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372.854.039 1.126.048 3.299.048s2.444-.01 3.298-.048c.851-.04 1.433-.174 1.942-.372a3.914 3.914 0 0 0 1.417-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942.038-.853.048-1.125.048-3.298s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.91 3.91 0 0 0 13.322.42c-.51-.198-1.092-.333-1.943-.372C10.525.01 10.254 0 8.08 0h.003-.001zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.452.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.705.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0-.128 8.217 4.109 4.109 0 0 0 .128-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill-rule="nonzero" fill="white"></path></svg>
                                        </a>
                                    </div>
                                    <div class="icon-container" style="width:19px;height:19px;">
                                        <a href="#" class="icon-link">
                                            <svg viewBox="0 0 22 22" aria-hidden="true"><path d="M20.786 0H1.214C.544 0 0 .543 0 1.214v19.572C0 21.456.543 22 1.214 22h10.537v-8.52H8.884v-3.32h2.867V7.712c0-2.842 1.735-4.39 4.27-4.39 1.215 0 2.258.091 2.562.132v2.97h-1.758c-1.378 0-1.645.655-1.645 1.616v2.12h3.287l-.428 3.32h-2.86V22h5.607c.67 0 1.214-.544 1.214-1.214V1.214C22 .544 21.456 0 20.786 0" fill-rule="nonzero" fill="white"></path></svg>
                                        </a>
                                    </div>
                                    <div class="icon-container">
                                        <a href="#" class="icon-link">
                                            <svg viewBox="0 0 16 12" aria-hidden="true"><title lang="en">Follow us on YouTube</title><path d="M15.84 2.495S16 3.827 16 5.158v1.248c0 1.33-.16 2.662-.16 2.662s-.157 1.133-.636 1.632c-.608.655-1.29.658-1.603.697-2.239.167-5.601.172-5.601.172s-4.16-.04-5.44-.166c-.356-.068-1.155-.048-1.765-.703C.316 10.201.16 9.068.16 9.068S0 7.737 0 6.406V5.158c0-1.331.16-2.663.16-2.663S.316 1.362.795.863C1.405.208 2.086.205 2.399.167 4.638 0 7.997 0 7.997 0h.007s3.358 0 5.597.167c.313.038.995.04 1.603.696.48.5.636 1.632.636 1.632zM6.348 7.918l4.322-2.303-4.323-2.319.001 4.622z" fill-rule="nonzero" fill="white"></path></svg>
                                        </a>
                                    </div>
                                    <div class="icon-container">
                                        <a href="#" class="icon-link">
                                            <svg viewBox="0 0 15 12" aria-hidden="true"><title lang="en">Follow us on Twitter</title><path d="M7.434 3.128l.03.508-.506-.062c-1.84-.239-3.45-1.048-4.815-2.408L1.476.492 1.304.99c-.365 1.11-.132 2.283.627 3.072.404.436.313.498-.385.238-.242-.083-.455-.145-.475-.114-.07.073.172 1.017.364 1.39.263.52.8 1.028 1.386 1.33l.496.238-.587.01c-.566 0-.587.01-.526.229.202.674 1.001 1.39 1.892 1.702l.627.218-.546.332c-.81.477-1.76.747-2.711.768-.456.01-.83.052-.83.083 0 .104 1.234.685 1.952.913 2.155.675 4.714.384 6.636-.768 1.366-.82 2.732-2.45 3.369-4.027.344-.84.688-2.376.688-3.113 0-.478.03-.54.597-1.11.333-.333.647-.696.708-.8.1-.197.09-.197-.425-.02-.86.31-.981.27-.557-.198.314-.332.688-.934.688-1.11 0-.031-.151.02-.323.114-.182.104-.587.26-.89.353l-.547.176-.496-.342c-.273-.187-.657-.395-.86-.457-.515-.145-1.304-.124-1.77.042-1.264.467-2.063 1.67-1.972 2.989z" fill-rule="evenodd" fill="white"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-link mt-3">
                                <a class="footer-link-item" href="#">Policies</a>
                                <a class="footer-link-item" href="#">Terms of Service</a>
                                <a class="footer-link-item" href="#">Accessibility</a>
                                <a class="footer-link-item" href="#">Contact Us</a>
                                <a class="footer-link-item" href="#">Sitemap</a>
                                <a class="footer-link-item" href="#">Diagnostics</a>
                            </div>

                            <div class="copyright mt-3">
                                <small>TM & Copyright 2020 Burger King Corporation.‌‌ All Rights Reserved.</small>
                            </div>
                        </div>
                    </div>
                </section>
            </div>




        <script src="<?=asset("asset/js/admin/env.js");?>"></script>
        <script src="<?=asset("asset/js/check-login.js");?>"></script>
        <script src="<?=asset("asset/js/logout.js");?>"></script>
        <script src="<?=asset("asset/js/navigation.js");?>"></script>
        <script src="<?=asset("asset/js/cart.js");?>"></script>
        <script src="<?=asset("vendor/popper/popper.js");?>"></script>
        <script src="<?=asset("vendor/bootstrap/js/bootstrap.min.js");?>"></script>
        <script src="<?=asset("vendor/font-awesome/js/all.js");?>"></script>
        @yield('script')
    </body>

</html>
