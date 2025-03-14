@extends('app')

@section('title', 'Create Account')

@section('Component')
    <section class="section">
        <div class="row">

            <div class="pagetitle">
                <h1>@yield('title')</h1>
                <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
                </nav>
            </div>

            <div class="col-xl-12">

                @if (session('success'))
                    <div class="alert alert-success m-2">
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <form method="POST" action="{{ route('create.user') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h2>User Profile</h2>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="user_number" id="user_number" placeholder="User Number" required>
                                    <label for="user_number">User Number</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" required>
                                    <label for="first_name">First Name</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input  class="form-control" type="text" name="middle_name" id="middle_name" placeholder="Middle Name" required>
                                    <label for="middle_name">Middle Name</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="number" name="age" id="age" placeholder="Age" required>
                                    <label for="age">Age</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="date" name="birthdate" id="birthdate">
                                    <label for="birthdate">Birthdate</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="email" name="email_address" id="email_address" placeholder="Email Address" required>
                                    <label for="email_address">Email Address</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="number" name="contact" id="contact" placeholder="Contact Number" required>
                                    <label for="contact">Contact Number</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <h2>Account Information</h2>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="user_email" id="user_email" placeholder="User Email" required>
                                    <label for="user_email">User Email</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                <select class="form-select" id="department" name="department" aria-label="State">
                                    <option value="CCS" selected>CCS</option>
                                    <option value="BHM">BHM</option>
                                    <option value="DC">DC</option>
                                </select>
                                <label for="department">Department</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                <select class="form-select" id="role" name="role" aria-label="State">
                                    <option value="teachers" selected>Teachers</option>
                                    <option value="head">Head</option>
                                    <option value="superadmin">SuperAdmin</option>
                                </select>
                                <label for="role">Roles</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Create User</button>
                            </div>
                            @if ($errors->any())
                                <div>
                                    <strong>{{ $errors->first() }}</strong>
                                </div>
                            @endif

                            
                        </div>
                        </form>
                        
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
