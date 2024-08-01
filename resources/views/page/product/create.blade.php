<x-layout>
    <div class="container-fluid">
        <div class="app-content mt-4">
            <div class="card card-info card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Add New Employee</div>
                </div>
                <form
                    action="{{ route('emp.store') }}"
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
                                    >Product Name</label
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
                                    >Category</label
                                >
                                <select
                                    class="form-select"
                                    id="validationCustom04"
                                    value=""
                                    name="category"
                                    required
                                >
                                    <option selected disable value="Male">
                                        Male
                                    </option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid gender.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom02"
                                    class="form-label"
                                    >Price</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom02"
                                    value=""
                                    name="price"
                                    required
                                />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="validationCustom05"
                                    class="form-label"
                                    >Photo</label
                                >
                                <input
                                    type="file"
                                    class="form-control custom-file-input"
                                    id="image"
                                    name="photo"
                                    accept=".jpg, .jpeg, .png"
                                />
                                <div class="invalid-feedback">
                                    Please provide a valid image.
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
                        <a href="{{ url('pro') }}" class="btn btn-danger"
                            >Back to Employee Page</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
