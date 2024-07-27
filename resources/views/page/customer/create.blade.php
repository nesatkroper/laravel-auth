<x-layout>
    <div class="container-fluid">
        <div class="app-content mt-4">
            <div class="card card-info card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Add New Employee</div>
                </div>
                <form
                    action="{{ route('cus.store') }}"
                    class="needs-validation"
                    novalidate
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label
                                    for="validationCustom01"
                                    class="form-label"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom01"
                                    value=""
                                    name="name"
                                    required
                                />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom04"
                                    class="form-label"
                                    >Gender</label
                                >
                                <select
                                    class="form-select"
                                    id="validationCustom04"
                                    value=""
                                    name="gender"
                                    required
                                >
                                    <option selected disable value="Male">
                                        Male
                                    </option>
                                    <option value="Female">Female</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid gender.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom02"
                                    class="form-label"
                                    >Mobile</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom02"
                                    value=""
                                    name="mobile"
                                    required
                                />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom02"
                                    class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="validationCustom02"
                                    value=""
                                    name="email"
                                    required
                                />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom02"
                                    class="form-label"
                                    >Address</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="validationCustom02"
                                    value=""
                                    name="address"
                                    required
                                />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom04"
                                    class="form-label"
                                    >Status</label
                                >
                                <select
                                    class="form-select"
                                    id="validationCustom04"
                                    value=""
                                    name="status"
                                    required
                                >
                                    <option selected disable value="0">
                                        True
                                    </option>
                                    <option value="1">False</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid gender.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img
                                    src=""
                                    class="rounded-3 float-start"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info" type="submit">
                            Submit form
                        </button>
                        <a href="{{ url('cus') }}" class="btn btn-danger"
                            >Back to Customer Page</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
