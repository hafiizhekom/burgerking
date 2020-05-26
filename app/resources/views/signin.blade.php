
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <div class="card w-50 mx-auto">
                            <div class="card-body text-center">
                                <h2>Sign In</h2>


                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" id="email-form" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" id="password-form" name="password"  required>
                                    </div>
                                    <button class="btn btn-lg btn-block btn-primary" type="button" id="login-button">SIGN IN</button>


                                <div class="mt-4">
                                    <b>Don't have an account yet?</b><br>
                                    <a href="signup" class="btn btn-lg btn-primary w-50">SIGN UP</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/login.js");?>"></script>
@endsection

