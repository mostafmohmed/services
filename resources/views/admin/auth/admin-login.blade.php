<div>
    <form id="formAuthentication" class="mb-3"  wire:submit.prevent="submit"  >
        <div class="mb-3">
          <label for="email" class="form-label">Email </label>
          <input
          wire:model='email'
            type="text"
            class="form-control"
            id="email"
            name="email-username"
            placeholder="Enter your email or username"
            autofocus
          />
        </div>
        @error('email') <span class="error">{{ $message }}</span> @enderror
        <div class="mb-3 form-password-toggle">
          <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            <a href="auth-forgot-password-basic.html">
              <small>Forgot Password?</small>
            </a>
          </div>
          <div class="input-group input-group-merge">
            <input
            wire:model='password'
              type="password"
              id="password"
              class="form-control"
              name="password"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              aria-describedby="password"
            />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
          </div>
        </div>
        @error('password') <span class="error">{{ $message }}</span> @enderror
        <div class="mb-3">
          <div class="form-check">
            <input 
            wire:model='remmber'
            class="form-check-input" type="checkbox" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
          </div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </div>
      </form>

</div>
