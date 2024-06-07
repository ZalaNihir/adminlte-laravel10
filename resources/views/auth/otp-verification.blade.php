<x-guest-layout>
    @section('title', 'Login With OTP')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">
                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Verify Your OTP !</h5>
                        <p class="text-muted">Sign in to continue to {{ config('app.name') }}.</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @if (session('error'))
                            <div class="text-danger">{{ session('success') }}</div>
                        @endif
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('otp.loginWithOtp') }}">
                            @csrf
                            <input type="hidden" value="{{ $userId }}" name="user_id">
                            <div class="mb-3">
                                <label for="otp" class="form-label">Enter Your otp</label>
                                <x-text-input id="otp" class="form-control" type="otp" name="otp"
                                    :value="old('otp')" required autofocus autocomplete="otp" />
                                <x-input-error :messages="$errors->get('otp')" class="mt-2" />
                            </div>
                            <x-error>otp</x-error>
                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>