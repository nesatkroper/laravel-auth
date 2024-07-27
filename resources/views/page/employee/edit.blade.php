<x-layout>
  <div class="container-fluid">
    <div class="app-content mt-4">
      <div class="card card-info card-outline mb-4">
        <div class="card-header">
          <div class="card-title">Update Employee Information</div>
        </div>
        <form
          action="{{route('emp.update', $emp->id)}}"
          class="needs-validation"
          novalidate
          method="POST"
          enctype="multipart/form-data"
        >
          @csrf @method('PUT')
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label"
                  >First Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  value="{{$emp->fname}}"
                  name="fname"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label"
                  >Last Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  value="{{$emp->lname}}"
                  name="lname"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label"
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
                  <option selected disable value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                  @elseif($emp->gender == 'Female')
                  <option selected disable value="Female">Female</option>
                  <option value="Male">Male</option>
                  <option value="Others">Others</option>
                  @else
                  <option selected disable value="Others">Others</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  @endif
                </select>
                <div class="invalid-feedback">
                  Please select a valid gender.
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label"
                  >Mobile</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom02"
                  value="{{$emp->mobile}}"
                  name="mobile"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="validationCustom02"
                  value="{{$emp->email}}"
                  name="email"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label"
                  >Address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="validationCustom02"
                  value="{{$emp->address}}"
                  name="address"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label"
                  >Date of Birth</label
                >
                <input
                  type="date"
                  class="form-control today"
                  id="today"
                  value="{{$emp->dob}}"
                  name="dob"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label"
                  >Place of Birth</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  value="{{$emp->pob}}"
                  name="pob"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label"
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
                  <option selected disable value="Work">Work</option>
                  <option value="Fired">Fired</option>
                  <option value="Others">Others</option>
                  @elseif($emp->status == 'Fired')
                  <option selected disable value="Fired">Fired</option>
                  <option value="Work">Work</option>
                  <option value="Others">Others</option>
                  @else
                  <option selected disable value="Others">Others</option>
                  <option value="Work">Work</option>
                  <option value="Fired">Fired</option>
                  @endif
                </select>
                <div class="invalid-feedback">
                  Please select a valid gender.
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Photo</label>
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
                <label for="validationCustom01" class="form-label"
                  >Old Photo</label
                >
                <img
                  src="{{url('uploads/employee/'.$emp->photo)}}"
                  class="rounded-3 form-control"
                  style="max-width: 200px; max-height: 200px"
                  alt="Image"
                />
              </div>
              <div class="col-md-6">
                <img src="" class="rounded-3 float-start" alt="" />
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-info" type="submit">Submit form</button>
            <a href="{{ url('emp') }}" class="btn btn-danger"
              >Back to Employee Page</a
            >
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>
