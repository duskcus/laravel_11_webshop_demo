<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-control mt-4">
        <label class="label" for="email">
            <span class="label-text">Email</span>
        </label>
        <input type="email" name="email" id="email" class="input input-bordered w-full" placeholder="you@example.com" required>
    </div>

    <div class="form-control mt-4">
        <label class="label" for="password">
            <span class="label-text">Password</span>
        </label>
        <input type="password" name="password" id="password" class="input input-bordered w-full" placeholder="Enter your password" required>
    </div>

    <div class="form-control mt-4">
        <label class="cursor-pointer flex items-center">
            <input type="checkbox" name="remember" class="checkbox">
            <span class="label-text ml-2">Remember me</span>
            <a href="#" class="link ml-auto">Forgot your password?</a>
        </label>
    </div>

    <div class="mt-6">
        <button type="submit" class="btn btn-primary w-full">Login</button>
    </div>

</form>
