@extends('administrator.dashboard')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="basic" class="basic" style="border-top: 4px solid #b331c3;">
            <div class="panel">
                <div class="employee_list_header"
                    style="background: #ededed!important;padding: 5px 5px;margin-bottom: 10px;border-radius: 6px;">
                    <h4 class="text-lg font-semibold dark:text-white-light" style="margin-top: 5px;margin-left: 6px;">Reports</h4>
                </div>
                <div class="row my-4">
                    <div class="col-md-5">
                        <label for="">Start Date</label>
                        <input type="date" name="" class="form-input">
                    </div>
                    <div class="col-md-5">
                        <label for="">End Date</label>
                        <input type="date" name="" class="form-input">
                    </div>
                    <div class="col-md-1">
                        <a href="" class="btn btn-success mt-4">Search</a>
                    </div>
                    <div class="col-md-1">
                        <a href="" class="btn btn-info mt-4">Print</a>
                    </div>
                </div>
                <table class="space-y-5 table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee</th>
                            <th>Leave Type</th>
                            <th>Date Start</th>
                            <th>Date End</th>
                            <th>Reason</th>
                            <th>Supervisior Comment</th>
                            <th>Total Days</th>
                            <th>Approved By</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sakib</td>
                            <td>[2] - Sick Leave</td>
                            <td><b>24-06-2024</b></td>
                            <td><b>28-06-2024</b></td>
                            <td>Leave type for calling sick with pay</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, consequuntur.</td>
                            <td><b>14</b></td>
                            <td><b>Admin</b></td>
                            <td><a href="" class="btn btn-outline-success" style="width: 50%;">Active</a></td>
                        </tr>
                    </tbody>
                </table>
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
