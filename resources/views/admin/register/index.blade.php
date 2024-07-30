@include('admin.layouts.includes.head');
@section('title', 'Admin Register')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.signup') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input value="{{old('name')}}" class="form-control" id="inputFirstName" name="name"
                                                    type="text" placeholder="Enter your name"
                                                     required />
                                                <label for="inputFirstName">Name</label>
                                            </div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->get("name") as $message)
                                                    <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input value="{{old('email')}}" class="form-control" id="inputEmail" name="email" type="email"
                                            placeholder="name@example.com"  required />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get("email") as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" name="password"
                                                    type="password" placeholder="Create a password" required value="{{old('password')}}"/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get("password") as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="isAdmin" name="isAdmin" type="checkbox"
                                            >
                                        <label class="form-check-label" for="isAdmin">Admin</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block"
                                                type="submit">Create Account</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('admin.layouts.includes.foot')
