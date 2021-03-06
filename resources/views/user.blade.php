@extends('layout')

@section('title', 'User Setup')

@section('content')
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    	<!--begin::Toolbar-->
    	<div class="toolbar" id="kt_toolbar">
    		<!--begin::Container-->
    		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    			<!--begin::Page title-->
    			<div class="d-flex align-items-center me-3">
    				<!--begin::Title-->
    				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">User Setup</h1>
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
    					<li class="breadcrumb-item text-dark">User Setup</li>
    					<!--end::Item-->
    				</ul>
    				<!--end::Breadcrumb-->
    			</div>
    			<!--end::Page title-->

    			<!--begin::Actions-->
    			<div class="d-flex align-items-center py-1">
    				<!--begin::Button-->
    				@if(in_array("user_setup_create", Session::get('privilege')))
    				<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_user" id="btn_user_add">Create</a>
    				@endif
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
    							<table id="table_user" class="table table-rounded table-striped border gy-7 gs-7">
    							    <thead>
    							        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                            <th class="d-none"></th>
    							            <th class="min-w-80px">Username</th>
    							            <th class="min-w-80px">First Name</th>
    							            <th class="min-w-80px">Last Name</th>
    							            <!-- <th class="min-w-80px">Email</th> -->
                                            <!-- <th class="min-w-80px">Phone</th> -->
                                            <th class="min-w-100px">Birth of Date</th>
    							            <!-- <th class="min-w-200px">Address</th> -->
    							            <th class="min-w-80px">Group</th>
    							            <th class="min-w-100px">Action</th>
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

    <div class="modal fade" tabindex="-1" id="modal_user">
        <div class="modal-dialog" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register User</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <img src="assets/media/icons/stockholm/Navigation/Close.svg"/>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Form-->
                    <form enctype="multipart/form-data" class="form w-100" novalidate="novalidate" id="form_user">

                    	@method("POST")
                    	@csrf
                    	<!--begin::Action-->
                    	{{-- <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                    	<img alt="Logo" src="assets/media/svg/social-icons/google.svg" class="h-20px me-3" />Sign in with Google</button>
                    	<!--end::Action-->
                    	<!--begin::Separator-->
                    	<div class="d-flex align-items-center mb-10">
                    		<div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    		<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                    		<div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    	</div> --}}
                    	<!--end::Separator-->
                    	<!--begin::Input group-->
                        <input class="d-none" type="text" name="user_id" id="user_id" disabled="disabled" />
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Employee Number</label>
                    		<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="employee_number" autocomplete="off" id="employee_number"/>
                    	</div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Username</label>
                    		<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="username" autocomplete="off" id="username"/>
                    	</div>
                    	<div class="row fv-row mb-7">
                    		<!--begin::Col-->
                    		<div class="col-xl-6">
                    			<label class="form-label fw-bolder text-dark fs-6">First Name</label>
                    			<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="first_name" autocomplete="off" id="first_name" />
                    		</div>
                    		<!--end::Col-->
                    		<!--begin::Col-->
                    		<div class="col-xl-6">
                    			<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                    			<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="last_name" autocomplete="off" id="last_name" />
                    		</div>
                    		<!--end::Col-->
                    	</div>
                    	<!--end::Input group-->
                    	<!--begin::Input group-->
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Email</label>
                    		<input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" id="email"/>
                    	</div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Phone</label>
                    		<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone" autocomplete="off" id="phone" maxlength="14" />
                    	</div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Birth of Date</label>
                    		<input class="form-control form-control-solid" type="text" placeholder="" name="birth_of_date" autocomplete="off" id="birth_of_date" maxlength="10" />
                    	</div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Address</label>
                    		<textarea class="form-control form-control-lg form-control-solid" placeholder="" name="address" autocomplete="off" id="address" maxlength="100"></textarea>
                    	</div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Select Group</label>
                    		<select id="select_group" class="form-select form-select-lg" data-control="select2" data-allow-clear="true" data-placeholder="Select an option" >
                    			<option value="" selected disabled></option>
                    		</select>
                    	</div>
                    	<!--end::Input group-->
                        <div class="mb-5 info-password" style="display: none;">
                            <span class="badge badge-light-danger"><i class="bi bi-info-circle text-danger"></i> Fill the fields below will reset the password</span>
                        </div>
                    	<!--begin::Input group-->
                    	<div class="mb-10 fv-row" data-kt-password-meter="true">
                    		<!--begin::Wrapper-->
                    		<div class="mb-1">
                    			<!--begin::Label-->
                    			<label class="form-label fw-bolder text-dark fs-6">Password</label>
                    			<!--end::Label-->
                    			<!--begin::Input wrapper-->
                    			<div class="position-relative mb-3">
                    				<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" id="password" />
                    				<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    					<i class="bi bi-eye-slash fs-2"></i>
                    					<i class="bi bi-eye fs-2 d-none"></i>
                    				</span>
                    			</div>
                    			<!--end::Input wrapper-->
                    			<!--begin::Meter-->
                    			<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    				<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    				<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    				<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    				<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    			</div>
                    			<!--end::Meter-->
                    		</div>
                    		<!--end::Wrapper-->
                    		<!--begin::Hint-->
                    		<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                    		<!--end::Hint-->
                    	</div>
                    	<!--end::Input group=-->
                    	<!--begin::Input group-->
                    	<div class="fv-row mb-5">
                    		<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                    		<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off" />
                    	</div>
                    	<!--end::Input group-->
                    </form>
                    <!--end::Form-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" id="btn_close">Close</button>
                    <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
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


	{{-- <script src="assets/js/user/validator.js"></script> --}}

	<script type="text/javascript">

		var user_id = '{{ Session::get('user_id') }}';
		var email = '{{ Session::get('email') }}';
        var privilege = '{{ implode(",", Session::get('privilege')) }}';
        var arr_privilege = privilege.split(',');
        var priv_user_update = arr_privilege.includes('user_setup_update');
        var priv_user_delete = arr_privilege.includes('user_setup_delete');
		$("#birth_of_date").flatpickr();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        });

		function initSelectGroup() {

			var select = $('#select_group');

			$.ajax({
		        dataType: 'JSON',
		        type: 'GET',
		        url: '/group/all',
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
	        var table = $('#table_user').DataTable();
	        var dateNow = '{{ now() }}';

	        $.ajax({
	            dataType: 'JSON',
	            type: 'GET',
	            url: '/user/all',
	            success: function (data) {

	                //console.log(data);

	                //data = JSON.parse(JSON.stringify(data).replace(/null/g, '"- "'));
	                table.clear().draw();

	                for (var i = 0; i < data.length; i++) {

                        var id              	= data[i].id;
	                  	var employee_number     = data[i].employee_number;
	                  	var username     		= data[i].username;
	                  	var first_name      	= data[i].first_name;
	                  	var last_name       	= data[i].last_name;
	                  	var email      			= data[i].email;
                        var phone           	= data[i].phone;
                        var birth_of_date   	= data[i].birth_of_date;
	                  	var address 			= data[i].address;
                        var group_id        	= data[i].group_id;
	                  	var group_name   		= data[i].group_name;

	                    var element =
	                        //'<td>'+ (i + 1) +'</td>' +
                            '<td data-id="'+id+'" class="d-none"></td>' +
	                        '<td data-employee_number="'+employee_number+'" class="d-none">'+employee_number+'</td>' +
	                        '<td data-username="'+username+'">'+username+'</td>' +
	                        '<td data-first_name="'+first_name+'">'+first_name+'</td>' +
	                        '<td data-last_name="'+last_name+'">'+last_name+'</td>' +
	                        '<td class="d-none" data-email="'+email+'">'+email+'</td>' +
                            '<td class="d-none" data-phone="'+phone+'">'+phone+'</td>' +
                            '<td data-birth_of_date="'+birth_of_date+'">'+birth_of_date+'</td>' +
	                        '<td class="d-none" data-address="'+address+'">'+address+'</td>' +
	                        '<td data-group_id="'+group_id+'">'+group_name+'</td>';

	                    element += '<td>';

	                    if (priv_user_update) {

		                    element+= '<a class="btn btn-icon btn-success me-2 btn_user_update" data-bs-toggle="modal" data-bs-target="#modal_user" onClick="updateClick(this)"><i class="bi bi-pencil-square fs-4"></i></a>';
	                    }

	                    if (priv_user_delete) {

	                    	if (id != user_id) {
	                    		
			                    element+= '<a class="btn btn-icon btn-danger" id="btn_user_delete" onClick="deleteClick(this)"><i class="bi bi-trash fs-4"></i></a>';
	                    	}

	                    } 

                        if (!priv_user_update && !priv_user_delete) {

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

            $('.modal-title').text('Update User').change();

            $('.info-password').css('display', 'block');

            $('#employee_number').attr('disabled', true);
            $('#username').attr('disabled', true);

	    	$.each(cells, function() {  

                if($(this).data('id')) $('#user_id').val($(this).data('id'));
                if($(this).data('employee_number')) $('#employee_number').val($(this).data('employee_number'));
                if($(this).data('username')) $('#username').val($(this).data('username'));
                if($(this).data('first_name')) $('#first_name').val($(this).data('first_name'));
                if($(this).data('last_name')) $('#last_name').val($(this).data('last_name'));
                if($(this).data('email')) $('#email').val($(this).data('email'));
                if($(this).data('phone')) $('#phone').val($(this).data('phone'));
                if($(this).data('birth_of_date')) $('#birth_of_date').val($(this).data('birth_of_date'));
                if($(this).data('address')) $('#address').val($(this).data('address'));
                if($(this).data('group_id')) $('#select_group').val($(this).data('group_id')).change();
	    	});
	    }

        function deleteClick(btn){
            //console.log(btn.closest('tr'));
            
            var row = $(btn.closest('tr'));
            
            var cells = row.find('td');

            var id = $(cells).data('id');

            $.each(cells, function() {  

                //if($(this).data('id')) $('#user_id').val($(this).data('id'));
                // if($(this).data('first_name')) $('#first_name').val($(this).data('first_name'));
                // if($(this).data('last_name')) $('#last_name').val($(this).data('last_name'));
                // if($(this).data('email')) $('#email').val($(this).data('email'));
                // if($(this).data('phone')) $('#phone').val($(this).data('phone'));
                // if($(this).data('birth_of_date')) $('#birth_of_date').val($(this).data('birth_of_date'));
                // if($(this).data('address')) $('#address').val($(this).data('address'));
                // if($(this).data('group_id')) $('#select_group').val($(this).data('group_id')).change();
                // if($(this).data('area_id')) $('#select_area').val($(this).data('area_id')).change();
                // if($(this).data('division_id')) $('#select_division').val($(this).data('division_id')).change();
            });

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
                        url: '/user/'+id,
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
                                        // window.location.replace("/user");
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
			initSelectGroup();

			$(".select2-selection__rendered").css("color", "black");


            $('#btn_user_add').click(function() {

                $('.info-password').css('display', 'none');
                
                $('.modal-title').text('Register User').change();

                $('#form_user').trigger("reset");

            	$('#employee_number').attr('disabled', false);
            	$('#username').attr('disabled', false);


                $("#select_group").val("").change();
            });
		});

		// Class definition
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
							'employee_number': {
								validators: {
									notEmpty: {
										message: 'Employee number is required'
									}
								}
		                    },
		                    'Username': {
								validators: {
									notEmpty: {
										message: 'Username is required'
									}
								}
		                    },
							'first_name': {
								validators: {
									notEmpty: {
										message: 'First Name is required'
									}
								}
		                    },
		                    'last_name': {
								validators: {
									notEmpty: {
										message: 'Last Name is required'
									}
								}
							},
							'email': {
		                        validators: {
									notEmpty: {
										message: 'Email address is required'
									},
		                            emailAddress: {
										message: 'The value is not a valid email address'
									}
								}
							},
		                    'phone': {
		                        validators: {
		                            notEmpty: {
		                                message: 'Phone is required'
		                            },
		                            regexp: {
		                                regexp: /^[0-9]{8,14}$/i,
		                                message: 'The phone number consist of 8 -14 digit number only'
		                            }
		                        }
		                    },
		                    'birth_of_date': {
		                        validators: {
		                            notEmpty: {
		                                message: 'Birth of date is required'
		                            }
		                        }
		                    },
		                    'address': {
		                        validators: {
		                            notEmpty: {
		                                message: 'Address is required'
		                            }
		                        }
		                    },
		                    'password': {
		                        validators: {
		                            notEmpty: {
		                                message: 'The password is required'
		                            },
		                            callback: {
		                                message: 'Please enter valid password',
		                                callback: function(input) {
		                                    if (input.value.length > 0) {
		                                        return validatePassword();
		                                    }
		                                }
		                            }
		                        }
		                    },
		                    'confirm-password': {
		                        validators: {
		                            notEmpty: {
		                                message: 'The password confirmation is required'
		                            },
		                            identical: {
		                                compare: function() {
		                                    return form.querySelector('[name="password"]').value;
		                                },
		                                message: 'The password and its confirm are not the same'
		                            }
		                        }
		                    },
		                    'toc': {
		                        validators: {
		                            notEmpty: {
		                                message: 'You must accept the terms and conditions'
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

		            validator.revalidateField('password');

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

	                        var formData = new FormData($('#form_user')[0]);
	                        var group_id = $('#select_group').val();
	                        var user_id = $('#user_id').val();

	                        formData.append('user_id', user_id);
	                        formData.append('group_id', group_id);

	                        for(var pair of formData.entries()) {
	                            //console.log(pair[0]+ ', '+ pair[1]);
	                        }

	                        modalHeader = $('.modal-title').text();

	                        if (modalHeader == 'Register User') {

	                            $.ajax({
	                                url: '/user',
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
	                                                // window.location.replace("/user");
	                                            }
	                                        });
	                                    }
	                                    else{

	                                        form.reset();  // reset form                    
	                                        passwordMeter.reset();  // reset password meter

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
	                                url: '/user/'+user_id,
	                                type:'POST',
	                                cache: false,
	                                contentType: false,
	                                processData: false,
	                                data: formData,
	                                success: function(data) {
	                                    //console.log(data);

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
	                                                // window.location.replace("/user");
	                                            }
	                                        });
	                                    }
	                                    else{

	                                        form.reset();  // reset form                    
	                                        passwordMeter.reset();  // reset password meter

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

		        // Handle password input
		        form.querySelector('input[name="password"]').addEventListener('input', function() {
		            if (this.value.length > 0) {
		                validator.updateFieldStatus('password', 'NotValidated');
		            }
		        });

		        if ($('#password').val() == '') {
		            validator.disableValidator('password');
		            validator.disableValidator('confirm-password');
		        }else{
		            validator.enableValidator('password');
		            validator.enableValidator('confirm-password');
		        }
		    }

		    // Password input validation
		    var validatePassword = function() {
		        return  (passwordMeter.getScore() === 100);
		    }

		    // Public functions
		    return {
		        // Initialization
		        init: function() {
		            // Elements
		            form = document.querySelector('#form_user');
		            submitButton = document.querySelector('#kt_sign_up_submit');
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

