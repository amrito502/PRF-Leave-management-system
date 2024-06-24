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
                <form class="space-y-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-2">
                                <label for="">Employee ID <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Employee Code" class="form-input" />
                            </div>

                            <div class="mt-2">
                                <label for="">Full Name <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Full Name" class="form-input" />
                            </div>

                            <div class="mt-2">
                                <label for="">Username <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Username" class="form-input" />
                            </div class="mt-2">


                            <div class="mt-2">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Email" class="form-input" />
                            </div>


                            <div class="mt-2">
                                <label for="">Phone <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Phone" class="form-input" />
                            </div>

                            <div class="mt-2">
                                <label for="">Alternate phone <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Alternate phone" class="form-input" />
                            </div>

                            <div class="mt-2">
                                <label for="">Address <span class="text-danger">*</span></label>
                                <input type="text" placeholder="Address" class="form-input" />
                            </div>

                            <div class="mt-2">
                                <label for="">Job Location <span class="text-danger">*</span></label>
                                <textarea class="form-input" name="" id="" cols="30" rows="3" placeholder="Job Location"></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mt-2">
                                <label for="">Department <span class="text-danger">*</span></label>
                                <select class="selectize form-input" style="cursor: pointer">
                                    <option value="">-- Choose Department --</option>
                                    <option value="orange">MBBS</option>
                                    <option value="White">Nurse</option>
                                    <option value="Purple">BCS</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="">Designation <span class="text-danger">*</span></label>
                                <select class="selectize form-input" style="cursor: pointer">
                                    <option value="">-- Choose Designation --</option>
                                    <option value="orange">Dg-1</option>
                                    <option value="White">DG-2</option>
                                    <option value="Purple">Dg-3</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="">Role <span class="text-danger">*</span></label>
                                <select class="selectize form-input" style="cursor: pointer">
                                    <option value="">-- Select Role --</option>
                                    <option value="orange">HR</option>
                                    <option value="White">Supervisor</option>
                                    <option value="Purple">Employee</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="">Joining Date <span class="text-danger">*</span></label>
                                <input type="date" placeholder="Joining Date" class="form-input"
                                    style="cursor: pointer" />
                            </div>

                            <div class="mt-2">
                                <label for="">Resign date <span class="text-danger">*</span></label>
                                <input type="date" placeholder="Resign date" class="form-input"
                                    style="cursor: pointer" />
                            </div>

                            <div class="mt-2">
                                <label for="">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" placeholder="DOB" class="form-input" style="cursor: pointer" />
                            </div>

                            <div class="mt-2">
                                <label for="">Choose Photo <span class="text-danger">*</span></label>
                                <input type="file" class="form-input" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox" />
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
                                    <form action="" method="post">
                                        <label for="">File Upload <b>1</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" class="form-input mr-3" />
                                            <input type="submit" value="Upload-1" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form action="" method="post">
                                        <label for="">File Upload <b>2</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" class="form-input mr-3" />
                                            <input type="submit" value="Upload-2" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form action="" method="post">
                                        <label for="">File Upload <b>3</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" class="form-input mr-3" />
                                            <input type="submit" value="Upload-3" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="mt-2">
                                    <form action="" method="post">
                                        <label for="">File Upload <b>4</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" class="form-input mr-3" />
                                            <input type="submit" value="Upload-4" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form action="" method="post">
                                        <label for="">File Upload <b>5</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" class="form-input mr-3" />
                                            <input type="submit" value="Upload-5" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <form action="" method="post">
                                        <label for="">File Upload <b>6</b> <span
                                                class="text-danger">*</span></label>
                                        <div class="d-flex">
                                            <input type="file" class="form-input mr-3" />
                                            <input type="submit" value="Upload-6" class="btn btn-success">
                                        </div>
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



{{--  --}}
