<x-guest-layout>
    @section('title', 'Login With OTP')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">
                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p class="text-muted">Sign in to continue to {{ config('app.name') }}.</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @if (session('error'))
                            <div class="text-danger">{{ session('success') }}</div>
                        @endif
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('otp.generate') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="phonenumber" class="form-label">Enter Your phonenumber</label>
                                <x-text-input id="phonenumber" class="form-control" type="phonenumber" name="phonenumber"
                                    :value="old('phonenumber')" required autofocus autocomplete="phonenumber" />
                                <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="submit">Generate OTP</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Login With <a href="{{ route('login') }}"
                                class="fw-semibold text-primary text-decoration-underline"> Email </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>