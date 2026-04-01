<x-layout>
    <x-slot:title>
        Sign In
    </x-slot:title>

    <div class="hero min-h-[calc(100vh-16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Welcome Back</h1>

                    <form method="POST" action="/login">
                        @csrf

                        <div class="form-control w-full mb-4">
                            <label class="floating-label">
                                <input type="email"
                                       name="email"
                                       placeholder="mail@example.com"
                                       value="{{ old('email') }}"
                                       class="input input-bordered w-full @error('email') input-error @enderror"
                                       required
                                       autofocus>
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

                        <div class="form-control">
                            <label class="label cursor-pointer justify-start gap-2">
                                <input type="checkbox" name="remember" class="checkbox checkbox-primary checkbox-sm">
                                <span class="label-text">Remember me</span>
                            </label>
                        </div>

                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-primary btn-sm w-full">
                                Sign In
                            </button>
                        </div>
                    </form>

                    <div class="divider">OR</div>
                    
                    <p class="text-center text-sm">
                        Don't have an account?
                        <a href="/register" class="link link-primary">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>