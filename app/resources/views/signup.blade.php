
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <div class="card w-50 mx-auto">
                            <div class="card-body text-center">
                                <h2>Create an Account to Get Started</h2>
                                <div class="w-50 bg-default border p-3 mx-auto text-center mb-4 mt-4">
                                    <b>Already have an account?</b>
                                    <a href="signin" class="">SIGN IN</a>
                                </div>
                                <form id="register-user">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Phone" name="phone" onkeyup="numOnly(this)" onblur="numOnly(this)" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="Birthday" name="birthday" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password" onkeyup="checkPassword()" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Repassword" name="repassword" onkeyup="checkPassword()" required>
                                    </div>
                                    <button class="btn btn-lg btn-block btn-primary" type="submit" id="register-button" disabled>SIGN UP</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/register.js");?>"></script>
@endsection

