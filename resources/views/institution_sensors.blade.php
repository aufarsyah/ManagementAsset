@extends('layout')

@section('title', 'Institution Sensors Setup')
 
@section('content')
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    	<!--begin::Toolbar-->
    	<div class="toolbar" id="kt_toolbar">
    		<!--begin::Container-->
    		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    			<!--begin::Page title-->
    			<div class="d-flex align-items-center me-3">
    				<!--begin::Title-->
    				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Institution Sensors Setup</h1>
    				<!--end::Title--> 
    				<!--begin::Separator-->
    				<span class="h-20px border-gray-200 border-start mx-4"></span>
    				<!--end::Separator-->
    				<!--begin::Breadcrumb-->
    				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
    					<!--begin::Item-->
    					<li class="breadcrumb-item text-muted">
    						<a href="/dashboard" class="text-muted text-hover-primary">Menu</a>
    					</li>
    					<!--end::Item-->
    					<!--begin::Item-->
    					<li class="breadcrumb-item">
    						<span class="bullet bg-gray-200 w-5px h-2px"></span>
    					</li>
    					<!--end::Item-->
    					<!--begin::Item-->
    					<li class="breadcrumb-item text-dark">Institution Sensors Setup</li>
    					<!--end::Item--> 
    				</ul>
    				<!--end::Breadcrumb-->
    			</div>
    			<!--end::Page title-->

    			<!--begin::Actions-->
    			<div class="d-flex align-items-center py-1">
    				<!--begin::Button-->
                    <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_area" id="btn_area_add">Create</a>
                    <!--end::Button-->
    			</div>
    			<!--end::Actions-->
    		</div>
    		<!--end::Container-->
    	</div>
    	<!--end::Toolbar-->
    	<!--begin::Post-->
    	<div class="post d-flex flex-column-fluid" id="kt_post">
    		<!--begin::Container-->
    		<div id="kt_content_container" class="container">
    			<!--begin::Card-->
    			<div class="card">
    				<!--begin::Card body-->
    				<div class="card-body p-0">
    					<!--begin::Wrapper-->
    					<div class="card-px py-10">
    						<div class="table-responsive">
    							<table id="table_data" class="table table-rounded table-striped border gy-7 gs-7">
    							    <thead>
    							        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th class="d-none"></th>
    							            <th class="">Institution Name</th>
                                            <th class="">Sensors Name</th>
                                            <th class="">Serial Number</th>
    							            <th class="">Expired Date</th>
    							            <th class="">Action</th>
    							        </tr>
    							    </thead>
    							    <tbody>
    							    </tbody>
    							</table>
    						</div>
    					</div>
    				</div>
    				<!--end::Card body-->
    			</div>
    			<!--end::Card-->
    		</div>
    		<!--end::Container-->
    	</div>
    	<!--end::Post-->
    </div>

    <div class="modal fade" tabindex="-1" id="modal_area">
        <div class="modal-dialog" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Institution Sensors</h5>
 
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <img src="assets/media/icons/stockholm/Navigation/Close.svg"/>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Form-->
                    <form enctype="multipart/form-data" class="form w-100" novalidate="novalidate" id="form_data">

                    	@method("POST")
                    	@csrf
                        <input class="d-none" type="text" name="institution_sensors_id" id="institution_sensors_id" disabled="disabled" />
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Select Institution</label>
                    		<select id="select_institution" class="form-select form-select-lg" data-control="select2" data-allow-clear="true" data-placeholder="Select an option" >
                                <option value="" selected disabled></option>
                            </select>
                    	</div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Sensors Name</label>
                    		<select id="select_sensors" class="form-select form-select-lg text-dark" data-control="select2" data-allow-clear="true" data-placeholder="Select an option" >
                                <option value="" selected disabled></option>
                            </select>
                    	</div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Serial Number</label>
                            <textarea class="form-control form-control-lg form-control-solid" placeholder="" name="serial_number" autocomplete="off" id="serial_number" maxlength="50"></textarea>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Expired Date</label>
                            <input class="form-control form-control-solid" type="text" placeholder="" name="expired_date" autocomplete="off" id="expired_date" maxlength="10" />
                        </div>
                    	
                    </form>
                    <!--end::Form-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" id="btn_close">Close</button>
                    <button type="button" id="btn_submit" class="btn btn-lg btn-primary">
                    	<span class="indicator-label">Submit</span>
                    	<span class="indicator-progress">Please wait...
                    	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@section('javascript')


	{{-- <script src="assets/js/area/general.js"></script> --}}

	<script type="text/javascript">

		var user_id = '{{ Session::get('user_id') }}';
		var email = '{{ Session::get('email') }}';
        var privilege = '{{ implode(",", Session::get('privilege')) }}';
        var arr_privilege = privilege.split(',');
        var priv_institution_sensors_update = arr_privilege.includes('institution_sensors_setup_update');
        var priv_institution_sensors_delete = arr_privilege.includes('institution_sensors_setup_delete');

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        });	

        var table = $('#table_data').DataTable({
                            "language": {
                            "lengthMenu": "Show _MENU_",
                        },
                        "dom":
                            "<'row'" +
                            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                            ">" +

                            "<'table-responsive'tr>" +

                            "<'row'" +
                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                            ">"
                        });

        function initSelectInstitution() {

            var select = $('#select_institution');

            $.ajax({
                dataType: 'JSON',
                type: 'GET',
                url: '/institution/all',
                success: function (data) {

                    $.each(data, function (index, item) {
                        select.append($('<option>', { 
                            value: item.id,
                            text : item.name 
                        }));
                    });
                }
            });
        }

        function initSelectSensors() {

            var select = $('#select_sensors');

            $.ajax({
                dataType: 'JSON',
                type: 'GET',
                url: '/sensors/all',
                success: function (data) {

                    $.each(data, function (index, item) {
                        select.append($('<option>', { 
                            value: item.id,
                            text : item.name 
                        }));
                    });
                }
            });
        }
  
		function initTable()
	    {
            table.destroy();

            table = $('#table_data').DataTable({
                            "language": {
                            "lengthMenu": "Show _MENU_",
                        },
                        "dom":
                            "<'row'" +
                            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                            ">" +

                            "<'table-responsive'tr>" +

                            "<'row'" +
                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                            ">"
                        });
	        var dateNow = '{{ now() }}';
            $("#expired_date").flatpickr();

	        $.ajax({
	            dataType: 'JSON',
	            type: 'GET',
	            url: '/institution_sensors/all',
	            success: function (data) {

	                //console.log(data);

	                //data = JSON.parse(JSON.stringify(data).replace(/null/g, '"- "'));
	                table.clear().draw();

	                for (var i = 0; i < data.length; i++) {

                        var id                  = data[i].id;
                        var institution_id      = data[i].institution_id;
	                  	var institution_name    = data[i].institution_name;
                        var sensors_id          = data[i].sensors_id;
                        var sensors_name        = data[i].sensors_name;
                        var serial_number       = data[i].serial_number;
	                  	var expired_date        = data[i].expired_date;

	                    var element =
	                        //'<td>'+ (i + 1) +'</td>' +
                            '<td data-id="'+id+'" class="d-none"></td>' +
                            '<td data-institution_id="'+institution_id+'">'+institution_name+'</td>' +
	                        '<td data-sensors_id="'+sensors_id+'">'+sensors_name+'</td>' +
                            '<td data-serial_number="'+serial_number+'">'+serial_number+'</td>' +
	                        '<td data-expired_date="'+expired_date+'">'+expired_date+'</td>';

	                    element += '<td>';

                        if (priv_institution_sensors_update) {

        	                element+= '<a class="btn btn-icon btn-success me-2 btn_area_update" data-bs-toggle="modal" data-bs-target="#modal_area" onClick="updateClick(this)"><i class="bi bi-pencil-square fs-4"></i></a>';
                        }

                        if (priv_institution_sensors_delete) {

    	                    element+= '<a class="btn btn-icon btn-danger" id="btn_area_delete" onClick="deleteClick(this)"><i class="bi bi-trash fs-4"></i></a>';
                        }
                        
                        if (!priv_institution_sensors_update && !priv_institution_sensors_delete) {

                            element+= '<p class="text-gray-600 fst-italic fs-8">You don&apos;t have any privileges</p>';
                        }

                        element += '</td>';

	                    var jRow = $('<tr>').append(element);

	                    table.row.add(jRow).draw();
	                }
	            }
	        });
	    }

	    function updateClick(btn){
	    	//console.log(btn.closest('tr'));
	    	
	    	var row = $(btn.closest('tr'));
			
	    	var cells = row.find('td');

            $('.modal-title').text('Update Institution Sensors').change();
 
	    	$.each(cells, function() {  

            	if($(this).data('id')) $('#institution_sensors_id').val($(this).data('id'));
                if($(this).data('institution_id')) $('#select_institution').val($(this).data('institution_id')).change();
                if($(this).data('sensors_id')) $('#select_sensors').val($(this).data('sensors_id')).change();
            	if($(this).data('serial_number')) $('#serial_number').val($(this).data('serial_number'));
            	if($(this).data('expired_date')) $('#expired_date').val($(this).data('expired_date'));
	    	});
	    }

        function deleteClick(btn){
            //console.log(btn.closest('tr'));
            
            var row = $(btn.closest('tr'));
            
            var cells = row.find('td');

            var id = $(cells).data('id');

            Swal.fire({
                text: "Are you sure to delete this data?",
                icon: "warning",
                buttonsStyling: false,
                confirmButtonText: "Yes, sure!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then(function (result) {
                if (result.isConfirmed) { 

                    var formData = new FormData();
                    formData.set('_method', 'DELETE');
                    formData.set('_token', '{{ csrf_token() }}');

                    $.ajax({
                        url: '/institution_sensors/'+id,
                        type:'POST',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        success: function(data) {

                            // console.log(data);

                            if (data.result == 'success') {

                                Swal.fire({
                                    text: data.message,
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(function (result) {
                                    if (result.isConfirmed) { 

                                        initTable();
                                        // window.location.replace("/area");
                                    }
                                });
                            }
                            else{

                                swalWithBootstrapButtons.fire(
                                    'Gagal!',
                                    data.message,
                                    'error'
                                )
                            }
                            
                        }
                    });
                }
            });
        }

		$(document).ready(function() {

			initTable();
            initSelectInstitution();
            initSelectSensors();

            $(".select2-selection__rendered").css("color", "black");


            $('#btn_area_add').click(function() {
                
                $('.modal-title').text('Register Institution Sensors').change();
 
                $('#form_data').trigger("reset");
            });
		});

        var KTGeneral = function() {
            // Elements
            var form;
            var submitButton;
            var validator;
            var passwordMeter;
            var modalHeader;

            // Handle form
            var handleForm  = function(e) {
                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validator = FormValidation.formValidation(
                    form,
                    {
                        fields: {
                            'serial_number': {
                                validators: {
                                    notEmpty: {
                                        message: 'Serial number is required'
                                    }
                                }
                            },
                            'expired_date': {
                                validators: {
                                    notEmpty: {
                                        message: 'Expired date is required'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger({
                                event: {
                                    password: false
                                }  
                            }),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row',
                                eleInvalidClass: '',
                                eleValidClass: ''
                            })
                        }
                    }
                );

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                });

                // Handle form submit
                submitButton.addEventListener('click', function (e) {
                    e.preventDefault();

                    validator.validate().then(function(status) {
                        if (status == 'Valid') {
                            // Show loading indication
                            submitButton.setAttribute('data-kt-indicator', 'on');

                            // Disable button to avoid multiple click 
                            submitButton.disabled = true;

                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            var formData = new FormData($('#form_data')[0]);
                            var institution_sensors_id = $('#institution_sensors_id').val();
                            var institution_id = $('#select_institution').val();
                            var sensors_id = $('#select_sensors').val();

                            formData.append('institution_sensors_id', institution_sensors_id);
                            formData.append('institution_id', institution_id);
                            formData.append('sensors_id', sensors_id);

                            for(var pair of formData.entries()) {
                                //console.log(pair[0]+ ', '+ pair[1]);
                            }

                            modalHeader = $('.modal-title').text();

                            if (modalHeader == 'Register Institution Sensors') {
 
                                $.ajax({
                                    url: '/institution_sensors',
                                    type:'POST',
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    data: formData,
                                    success: function(data) {
                                        //console.log(data.result);

                                        if (data.result == 'success') {

                                            Swal.fire({
                                                text: data.message,
                                                icon: "success",
                                                buttonsStyling: false,
                                                confirmButtonText: "Ok!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                }
                                            }).then(function (result) {
                                                if (result.isConfirmed) { 

                                                    initTable();
                                                    $('#btn_close').click(); 
                                                    // window.location.replace("/area");
                                                }
                                            });
                                        }
                                        else{

                                            console.log(data);

                                            form.reset();  // reset form                    

                                            swalWithBootstrapButtons.fire(
                                                'Gagal!',
                                                data.message,
                                                'error'
                                            )
                                        }
                                        
                                    }
                                });
                            }
                            else{

                                formData.set('_method', 'PATCH');

                                $.ajax({
                                    url: '/institution_sensors/'+institution_sensors_id,
                                    type:'POST',
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    data: formData,
                                    success: function(data) {
                                        console.log(data);

                                        if (data.result == 'success') {

                                            Swal.fire({
                                                text: data.message,
                                                icon: "success",
                                                buttonsStyling: false,
                                                confirmButtonText: "Ok!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                }
                                            }).then(function (result) {
                                                if (result.isConfirmed) { 

                                                    initTable();
                                                    $('#btn_close').click(); 
                                                    // window.location.replace("/area");
                                                }
                                            });
                                        }
                                        else{

                                            // form.reset();  // reset form                    

                                            swalWithBootstrapButtons.fire(
                                                'Gagal!',
                                                data.message,
                                                'error'
                                            )
                                        }
                                        
                                    }
                                });
                            }                         
                        } else {
                            // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    });
                });

            }

            // Public functions
            return {
                // Initialization
                init: function() {
                    // Elements
                    form = document.querySelector('#form_data');
                    submitButton = document.querySelector('#btn_submit');
                    passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

                    handleForm ();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTGeneral.init();
        });
	    
	</script>

@endsection

