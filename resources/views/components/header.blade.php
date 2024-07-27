<nav class="app-header navbar navbar-expand bg-body">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="fa fa-bars"></i>
        </a>
      </li>
    </ul>
    <div class="input-group rounded" style="width: 300px">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="search-addon"
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </div>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown user-menu"></li>
      <div class="col-md-12">
        <div class="card card-primary collapsed-card">
          <div
            class="bg-white text-dark card-header d-flex flow-row align-items-center justify-content-between"
            style="height: 40px; width: 200px"
          >
            <img
              style="height: 30px"
              src="{{ url('./image/profile.jpg') }}"
              class="user-image rounded-circle shadow"
              alt="User Image"
            />
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            <div class="card-tools">
              <button
                type="button"
                class="btn btn-tool text-dark"
                data-lte-toggle="card-collapse"
              >
                <i data-lte-icon="expand" class="fa fa-plus"></i>
                <i data-lte-icon="collapse" class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm float-right">
                Logout
              </button>
            </form>
          </div>
        </div>
      </div>
    </ul>
  </div>
</nav>
