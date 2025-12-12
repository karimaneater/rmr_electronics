<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 360px;">

        <h4 class="text-center mb-4">Login</h4>

        <form method="POST" action="">
            @csrf
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password" required>
            </div>

            <!-- Login + Registered Link -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="#" class="text-decoration-none">Don't have an account?</a>
                <button class="btn btn-primary px-4">Login</button>
            </div>
        </form>
    </div>
</div>

