<x-layout>
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Dashboard</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-primary">
                            <div class="inner">
                                <h3>{{ $cemp }} People</h3>
                                <p>New Employee</p>
                            </div>

                            <a
                                href="{{ route('emp.index') }}"
                                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                            >
                                More info <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-success">
                            <div class="inner">
                                <h3>{{ $ccus }} Persons</h3>
                                <p>New Customer</p>
                            </div>
                            <a
                                href="{{ route('cus.index') }}"
                                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                            >
                                More info <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>User Registrations</p>
                            </div>
                            <a
                                href="#"
                                class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                            >
                                More info <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <a
                                href="#"
                                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                            >
                                More info <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
