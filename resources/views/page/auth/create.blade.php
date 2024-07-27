<x-layout>
  <div class="container-fluid">
    <div class="app-content mt-4">
      <div class="card card-info card-outline mb-4">
        <div class="card-header">
          <div class="card-title">Add New Users</div>
        </div>
        <form
          action="{{ route('auth.store') }}"
          class="needs-validation"
          novalidate
          method="POST"
          enctype="multipart/form-data"
        >
          @csrf
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label"> Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  value=""
                  name="name"
                  required
                />
                @error('name')
                <div
                  class="alert alert-danger d-flex align-items-center fs-7"
                  style="height: 10px !important"
                >
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label"
                  >Username</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom02"
                  value=""
                  placeholder="must stat with @"
                  name="username"
                  required
                />
                @error('username')
                <div
                  class="alert alert-danger d-flex align-items-center fs-7"
                  style="height: 10px !important"
                >
                  {{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="validationCustom02"
                  value=""
                  name="email"
                  required
                />
                @error('email')
                <div
                  class="alert alert-danger d-flex align-items-center fs-7"
                  style="height: 10px !important"
                >
                  {{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label"
                  >Password</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom02"
                  value=""
                  name="password"
                  required
                />
                @error('password')
                <div
                  class="alert alert-danger d-flex align-items-center fs-7"
                  style="height: 10px !important"
                >
                  {{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-success" type="submit">Submit form</button>
            <a href="{{ url('emp') }}" class="btn btn-danger"
              >Back to Employee Page</a
            >
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>
