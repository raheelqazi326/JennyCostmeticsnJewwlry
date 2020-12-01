<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form wire:submit.prevent="save">
            @include('layouts.messages')
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Email" wire:model.lazy="form.email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('form.email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group mt-3">
                <input type="password" class="form-control" placeholder="Password" wire:model.lazy="form.password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('form.password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="row mt-3">
                <div class="col-8">
                    {{-- <a href="#">forgot password</a> --}}
                    {{-- <div class="icheck-primary">
                        <input type="checkbox" id="remember" wire:model="form.remember_me" value='on'>
                        <label for="remember">
                            Remember Me
                        </label>
                    </div> --}}
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>