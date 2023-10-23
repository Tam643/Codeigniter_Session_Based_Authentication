<div class="container">
  <div class="row mt-5 pt-5 justify-content-center">
    <div class="col-4">
      <div class="card">
        <article class="card-body">
          <h4 class="card-title text-center mb-4 mt-1"><strong>Sign in</strong></h4>
          <form method="post" action="/signin">
            <div class="form-group">
              <label class="mb-1">Email</label>
              <input
                name="email"
                class="form-control mb-1"
                placeholder="Email"
                type="email"
              />
            </div>
            <!-- form-group// -->
            <div class="form-group">
              <label class="mb-1">Password</label>
              <input
                name="password"
                class="form-control mb-1"
                placeholder="*********"
                type="password"
              />
            </div>
            <!-- form-group// -->
            <div class="form-group row mb-3">
              <div class="col-6">
                <div class="checkbox">
                    <label> <input type="checkbox" name="savepassword" /> Save password </label>
                </div>
              </div>
              <div class="col-6">
                <a class="float-end" href="/forgotpassword">Forgot password</a>
              </div>
              <!-- checkbox .// -->
            </div>
            <!-- form-group// -->
            <div class="row">
                <div class="col-6 d-grid">
                    <button type="submit" class="btn btn-primary">
                        Sign in
                    </button>
                </div>
                <div class="col-6">
                    <a href="/signup" class="btn d-block btn-outline-secondary">Sign up</a>
                </div>
            </div>
            <!-- form-group// -->
          </form>
        </article>
      </div>
      <!-- card.// -->
    </div>
  </div>
</div>
