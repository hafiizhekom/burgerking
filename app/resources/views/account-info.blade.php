
@extends('layout.app')

@section('content')
                <section class="offers pt-5 mb-3">
                    <div class="container">
                        <div class="card w-50 mx-auto">
                            <div class="card-body text-center">
                                <h2>ACCOUNT</h2>
                                <form id="update-user" class="mt-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email"   id="email-account-info" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Phone" name="phone" onkeyup="numOnly(this)" onblur="numOnly(this)" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="Birthday" id="birthday-account-info" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password" onkeyup="checkPassword()">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Repassword" name="repassword" onkeyup="checkPassword()">
                                    </div>
                                    <input type="hidden" id="id" name="id" value="">
                                    <button class="btn btn-lg btn-block btn-primary" type="submit" id="register-button">UPDATE</button>
                                </form>

                                <form id="view-user">
                                    <input type="hidden" name="check" value="true">
                                </form>
                            </div>
                        </div>

                    </div>
                </section>
@endsection

@section('script')
    <script src="<?=asset("asset/js/update-account.js");?>"></script>
@endsection

