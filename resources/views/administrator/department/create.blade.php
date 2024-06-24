@extends('administrator.dashboard')
@section('content')

<div class="animate__animated p-6" :class="[$store.app.animation]">
    <!-- start main content section -->
    <div x-data="basic" class="basic" style="border-top: 4px solid #b331c3;">
        <div class="panel">
            <div class="employee_list_header" style="background: #ededed!important;padding: 5px 5px;margin-bottom: 10px;border-radius: 6px;">
                <h4 class="text-lg font-semibold dark:text-white-light d-flex" style="margin-top: 5px;margin-left: 6px;">

                    Add New Department
                </h4>
                <a class="btn btn-primary" href="{{ route('administrator.department.list') }}">Department Lists</a>
            </div>
            <form class="space-y-5">
               <div class="row">

                <div class="col-md-12">


                    <div class="mt-2">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Name" class="form-input"/>
                    </div>
                    <div class="mt-2">
                        <label for="">Description <span class="text-danger">*</span></label>
                        <textarea name="" placeholder="Description.." class="form-input" cols="30" rows="5"></textarea>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="5px" height="5px" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Create Department
                </button>
            </form>
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
