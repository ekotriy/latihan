@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" id="name" placeholder="Name" name="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="username" placeholder="Username" name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="name@example.com"
                            name="email">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="floatingPassword"
                            placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login">login!</a></small>
            </main>
        </div>
    </div>
@endsection
