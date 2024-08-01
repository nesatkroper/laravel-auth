<x-layout>
    <div class="container-fluid">
        <div class="app-content mt-4">
            <div class="card card-info card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Update Employee Information</div>
                </div>
                <form
                    action="{{route('cus.update', $cus->id)}}"
                    class="needs-validation"
                    novalidate
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf @method('PUT')
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
                                    value="{{$cus->name}}"
                                    name="fname"
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
                                    @if($emp->gender == 'Male')
                                    <option selected disable value="Male">
                                        Male
                                    </option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                    @elseif($emp->gender == 'Female')
                                    <option selected disable value="Female">
                                        Female
                                    </option>
                                    <option value="Male">Male</option>
                                    <option value="Others">Others</option>
                                    @endif
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
                                    value="{{$cus->mobile}}"
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
                                    value="{{$cus->email}}"
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
                                    value="{{$cus->address}}"
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
                                    @if($emp->status == 'Work')
                                    <option selected disable value="Work">
                                        Work
                                    </option>
                                    <option value="Fired">Fired</option>
                                    <option value="Others">Others</option>
                                    @elseif($emp->status == 'Fired')
                                    <option selected disable value="Fired">
                                        Fired
                                    </option>
                                    <option value="Work">Work</option>
                                    <option value="Others">Others</option>
                                    @else
                                    <option selected disable value="Others">
                                        Others
                                    </option>
                                    <option value="Work">Work</option>
                                    <option value="Fired">Fired</option>
                                    @endif
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
                            >Back to Employee Page</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
