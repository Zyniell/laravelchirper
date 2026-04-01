<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>

                    <form method="POST" action="/register">
                        @csrf

                        <div class="form-control w-full mb-4">
                            <label class="floating-label">
                                <input type="text"
                                       name="name"
                                       placeholder="John Doe"
                                       value="{{ old('name') }}"
                                       class="input input-bordered w-full @error('name') input-error @enderror"
                                       required>
                                <span>Name</span>
                            </label>
                            @error('name')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-4">
                            <label class="floating-label">
                                <input type="email"
                                       name="email"
                                       placeholder="mail@example.com"
                                       value="{{ old('email') }}"
                                       class="input input-bordered w-full @error('email') input-error @enderror"
                                       required>
                                <span>Email</span>
                            </label>
                            @error('email')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-4">
                            <label class="floating-label">
                                <input type="password"
                                       name="password"
                                       placeholder="••••••••"
                                       class="input input-bordered w-full @error('password') input-error @enderror"
                                       required>
                                <span>Password</span>
                            </label>
                            @error('password')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-control w-full mb-6">
                            <label class="floating-label">
                                <input type="password"
                                       name="password_confirmation"
                                       placeholder="••••••••"
                                       class="input input-bordered w-full"
                                       required>
                                <span>Confirm Password</span>
                            </label>
                        </div>

                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-primary btn-sm w-full">
                                Register
                            </button>
                        </div>
                    </form>

                    <div class="divider">OR</div>
                    
                    <p class="text-center text-sm">
                        Already have an account?
                        <a href="/login" class="link link-primary">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>