@extends('administrator.dashboard')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="basic" class="basic" style="border-top: 4px solid #b331c3;">
            <div class="panel">
                <div class="employee_list_header"
                    style="background: #ededed!important;padding: 5px 5px;margin-bottom: 10px;border-radius: 6px;">
                    <h4 class="text-lg font-semibold dark:text-white-light d-flex" style="margin-top: 5px;margin-left: 6px;">

                        Add Employee
                    </h4>
                    <a class="btn btn-primary" href="{{ route('administrator.employee.list') }}">Employee Lists</a>
                </div>
                <form class="space-y-5" id="employee_create" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-2">
                                <label for="">Employee ID <span class="text-danger">*</span></label>
                                <input type="text" name="employee_code" placeholder="Employee Code" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Full Name" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Username <span class="text-danger">*</span></label>
                                <input type="text" name="username" placeholder="Username" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div class="mt-2">


                            <div class="mt-2">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" placeholder="Email" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>


                            <div class="mt-2">
                                <label for="">Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" placeholder="Phone" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Alternate phone <span class="text-danger">*</span></label>
                                <input type="text" name="alternate_phone" placeholder="Alternate phone"
                                    class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" placeholder="Address" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Job Location <span class="text-danger">*</span></label>
                                <textarea class="form-input" name="job_location" name="" id="" cols="30" rows="3"
                                    placeholder="Job Location"></textarea>
                                <span class="text-danger" id="error"></span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mt-2">
                                <label for="">Department <span class="text-danger">*</span></label>
                                <select name="department_id" class="selectize form-input" style="cursor: pointer">
                                    <option value="">-- Choose Department --</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Designation <span class="text-danger">*</span></label>
                                <select name="designation_id" class="selectize form-input" style="cursor: pointer">
                                    <option value="">-- Choose Designation --</option>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->designation }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Role <span class="text-danger">*</span></label>
                                <select name="role_id" class="selectize form-input" style="cursor: pointer">
                                    <option value="">-- Select Role --</option>
                                    @foreach ($users as $user)
                                        <option value="">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Joining Date <span class="text-danger">*</span></label>
                                <input name="joining_date" type="date" placeholder="Joining date" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Resign date <span class="text-danger">*</span></label>
                                <input name="resign_date" type="date" placeholder="Resign date" class="form-input"/>
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Date of Birth <span class="text-danger">*</span></label>
                                <input name="dob" type="date" placeholder="DOB" class="form-input"/>
                                <span class="text-danger" id="error"></span>
                            </div>

                            <div class="mt-2">
                                <label for="">Choose Photo <span class="text-danger">*</span></label>
                                <input name="image" type="file" class="form-input" />
                                <span class="text-danger" id="error"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input name="status" type="checkbox" class="form-checkbox" />
                            <span class="text-white-dark">Status</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5px" height="5px" viewbox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Create Employee
                    </button>
                </form>
                <div class="file_upload_all mt-4">
                    <h1 class="fileupload_title"
                        style="font-size: 24px;font-weight: 600;border-bottom: 1px solid gray;padding-bottom: 7px;margin-bottom: 5px;">
                        File Upload</h1>
                    <div class="space-y-5">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="mt-2">
                                    <form id="file_upload_1" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label for="">File Upload <b>1</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" name="file_1" class="form-input mr-3" />
                                            <input type="submit" value="Upload-1" class="btn btn-success">
                                        </div>
                                        <span class="text-danger" id="error_1"></span>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form id="file_upload_2" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label for="">File Upload <b>2</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" name="file_2" class="form-input mr-3" />
                                            <input type="submit" value="Upload-2" class="btn btn-success">
                                        </div>
                                        <span class="text-danger" id="error_2"></span>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form id="file_upload_3" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label for="">File Upload <b>3</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" name="file_3" class="form-input mr-3" />
                                            <input type="submit" value="Upload-3" class="btn btn-success">
                                        </div>
                                        <span class="text-danger" id="error_3"></span>
                                    </form>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="mt-2">
                                    <form id="file_upload_4" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label for="">File Upload <b>4</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" name="file_4" class="form-input mr-3" />
                                            <input type="submit" value="Upload-4" class="btn btn-success">
                                        </div>
                                        <span class="text-danger" id="error_4"></span>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form id="file_upload_5" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label for="">File Upload <b>5</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" name="file_5" class="form-input mr-3" />
                                            <input type="submit" value="Upload-5" class="btn btn-success">
                                        </div>
                                        <span class="text-danger" id="error_5"></span>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form id="file_upload_6" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label for="">File Upload <b>6</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" name="file_6" class="form-input mr-3" />
                                            <input type="submit" value="Upload-6" class="btn btn-success">
                                        </div>
                                        <span class="text-danger" id="error_6"></span>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main content section -->





    </div>

@section('scripts')
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });

    document.addEventListener("alpine:init", () => {
        Alpine.data("form", () => ({
            date1: '2022-07-05',
            init() {
                flatpickr(document.getElementById('basic'), {
                    dateFormat: 'Y-m-d',
                    defaultDate: this.date1,
                })
            }
        }));
    });

 </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        {{--  ***************employee_create****************  --}}
        $(document).ready(function() {
            $("#employee_create").submit(function(e) {
                e.preventDefault();
                $("#error").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('employee successfully created!');
                        }
                    },
                    error: function(response) {
                        $("#error").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************employee_create****************  --}}







        {{--  ***************Start-File-upload-1****************  --}}
        $(document).ready(function() {
            $("#file_upload_1").submit(function(e) {
                e.preventDefault();
                $("#error_1").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.fileUpload.1') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('File-1 Uploaded Successfully!');
                        }
                    },
                    error: function(response) {
                        $("#error_1").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************End-File-upload-1****************  --}}

        {{--  ***************Start-File-upload-2****************  --}}
        $(document).ready(function() {
            $("#file_upload_2").submit(function(e) {
                e.preventDefault();
                $("#error_2").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.fileUpload.2') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('File-2 Uploaded Successfully!');
                        }
                    },
                    error: function(response) {
                        $("#error_2").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************End-File-upload-2****************  --}}

        {{--  ***************Start-File-upload-3****************  --}}
        $(document).ready(function() {
            $("#file_upload_3").submit(function(e) {
                e.preventDefault();
                $("#error_3").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.fileUpload.3') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('File-3 Uploaded Successfully!');
                        }
                    },
                    error: function(response) {
                        $("#error_3").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************End-File-upload-3****************  --}}

        {{--  ***************Start-File-upload-4****************  --}}
        $(document).ready(function() {
            $("#file_upload_4").submit(function(e) {
                e.preventDefault();
                $("#error_4").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.fileUpload.4') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('File-4 Uploaded Successfully!');
                        }
                    },
                    error: function(response) {
                        $("#error_4").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************End-File-upload-4****************  --}}

        {{--  ***************Start-File-upload-5****************  --}}
        $(document).ready(function() {
            $("#file_upload_5").submit(function(e) {
                e.preventDefault();
                $("#error_5").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.fileUpload.5') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('File-5 Uploaded Successfully!');
                        }
                    },
                    error: function(response) {
                        $("#error_5").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************End-File-upload-5****************  --}}

        {{--  ***************Start-File-upload-6****************  --}}
        $(document).ready(function() {
            $("#file_upload_6").submit(function(e) {
                e.preventDefault();
                $("#error_6").text('');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('administrator.employee.fileUpload.6') }}",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: (response) => {
                        if (response) {
                            this.reset();
                            alert('File-6 Uploaded Successfully!');
                        }
                    },
                    error: function(response) {
                        $("#error_6").text(response.responseJSON.message);
                    }
                });
            });
        });
        {{--  ***************End-File-upload-6****************  --}}
    </script>












    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            // default
            var els = document.querySelectorAll(".selectize");
            els.forEach(function(select) {
                NiceSelect.bind(select);
            });
        });
    </script>
@endsection
@endsection



{{--  --}}
