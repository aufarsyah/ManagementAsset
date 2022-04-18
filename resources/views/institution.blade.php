@extends('layout')

@section('title', 'Institution Setup')

@section('content')
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    	<!--begin::Toolbar-->
    	<div class="toolbar" id="kt_toolbar">
    		<!--begin::Container-->
    		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    			<!--begin::Page title-->
    			<div class="d-flex align-items-center me-3">
    				<!--begin::Title-->
    				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Institution Setup</h1>
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
    					<li class="breadcrumb-item text-dark">Institution Setup</li>
    					<!--end::Item-->
    				</ul>
    				<!--end::Breadcrumb-->
    			</div>
    			<!--end::Page title-->

    			<!--begin::Actions-->
    			<div class="d-flex align-items-center py-1">
    				<!--begin::Button-->
                    <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_area" id="btn_add">Create</a>
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
                                            <th class="">Name</th>
    							            <th class="">Type</th>
                                            <th class="">Location</th>
                                            <th class="d-none"></th>
    							            <th class="d-none"></th>
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

    <div class="modal fade" id="modal_area">
        <div class="modal-dialog" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Institution</h5>

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
                        <input class="d-none" type="text" name="institution_id" id="institution_id" disabled="disabled" />
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Name</label>
                    		<input class="form-control form-control-lg form-control-solid" type="text" placeholder="input name" name="name" autocomplete="off" id="name" maxlength="20" />
                    	</div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Select Type</label>
                            <select id="select_type" class="form-select form-select-lg" data-control="select2" data-allow-clear="true" data-placeholder="Select an option" >
                                <option value="" selected disabled></option>
                            </select>
                        </div>
                        <div class="fv-row mb-7">
                            <div>   
                                <label class="form-label fw-bolder text-dark fs-6">Location</label>
                            </div>
                            <div class="btn-group w-100 w-lg-50" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success domestic" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" id="domestic" name="location" value="domestic"/>
                                    <!--end::Input-->
                                    Domestic
                                </label>
                                <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success overseas" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" id="overseas" name="location" value="overseas"/>
                                    <!--end::Input-->
                                    Overseas
                                </label>
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Coordinate</label>
                            <!-- <div id="map"></div> -->
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="ex. -6.17533899880896, 106.826879190268" name="coordinate" autocomplete="off" id="coordinate" maxlength="100" />
                        </div>
                    	<div class="fv-row mb-7">
                    		<label class="form-label fw-bolder text-dark fs-6">Description</label>
                    		<textarea class="form-control form-control-lg form-control-solid" placeholder="input description" name="description" autocomplete="off" id="description" maxlength="100"></textarea>
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

    <!-- leaflet js  -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

	<script type="text/javascript">

		var user_id = '{{ Session::get('user_id') }}';
		var email = '{{ Session::get('email') }}';
        var privilege = '{{ implode(",", Session::get('privilege')) }}';
        var arr_privilege = privilege.split(',');
        var priv_institution_update = arr_privilege.includes('institution_setup_update');
        var priv_institution_delete = arr_privilege.includes('institution_setup_delete');
        let map;

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

		
        function initSelectType() {

            var select = $('#select_type');

            $.ajax({
                dataType: 'JSON',
                type: 'GET',
                url: '/institution_type/all',
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

	        $.ajax({
	            dataType: 'JSON',
	            type: 'GET',
	            url: '/institution/all',
	            success: function (data) {

	                //console.log(data);

	                //data = JSON.parse(JSON.stringify(data).replace(/null/g, '"- "'));
	                table.clear().draw();

	                for (var i = 0; i < data.length; i++) {

                        var id                      = data[i].id;
                        var name                    = data[i].name;
                        var institution_type_id     = data[i].institution_type_id;
	                  	var institution_type_name   = data[i].institution_type_name;
                        var location                = data[i].location;
                        var coordinate              = data[i].coordinate;
	                  	var description             = data[i].description;

	                    var element =
	                        //'<td>'+ (i + 1) +'</td>' +
                            '<td data-id="'+id+'" class="d-none"></td>' +
                            '<td data-name="'+name+'">'+name+'</td>' +
	                        '<td data-institution_type_id="'+institution_type_id+'">'+institution_type_name+'</td>' +
                            '<td data-location="'+location+'">'+location+'</td>' +
	                        '<td data-coordinate="'+coordinate+'" class="d-none">'+coordinate+'</td>' +
                            '<td data-description="'+description+'" class="d-none">'+description+'</td>';

	                    element += '<td>';

                        if (priv_institution_update) {

        	                element+= '<a class="btn btn-icon btn-success me-2 btn_area_update" data-bs-toggle="modal" data-bs-target="#modal_area" onClick="updateClick(this)"><i class="bi bi-pencil-square fs-4"></i></a>';
                        }

                        if (priv_institution_delete) {
                            
    	                    element+= '<a class="btn btn-icon btn-danger" id="btn_area_delete" onClick="deleteClick(this)"><i class="bi bi-trash fs-4"></i></a>';
                        }
                        
                        if (!priv_institution_update && !priv_institution_delete) {

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

            $('.modal-title').text('Update Institution').change();

	    	$.each(cells, function() {  

            	if($(this).data('id')) $('#institution_id').val($(this).data('id'));
                if($(this).data('name')) $('#name').val($(this).data('name'));

                if($(this).data('institution_type_id')) $('#select_type').val($(this).data('institution_type_id')).change();
                
                if($(this).data('location') == 'domestic'){
                    $("#domestic").attr('checked', true);
                    $(".domestic").addClass('active');
                    $(".overseas").removeClass('active');
                }

                if($(this).data('location') == 'overseas'){
                    $("#overseas").attr('checked', true);
                    $(".overseas").addClass('active');
                    $(".domestic").removeClass('active');
                }

            	if($(this).data('coordinate')) $('#coordinate').val($(this).data('coordinate'));
            	if($(this).data('description')) $('#description').val($(this).data('description'));
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
                        url: '/institution/'+id,
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
            initSelectType();
            //initMap();

            $(".select2-selection__rendered").css("color", "black");


            $('#btn_add').click(function() {
                
                $('.modal-title').text('Register Institution').change();

                $('#form_data').trigger("reset");

                $("#domestic").attr('checked', true);
                $(".domestic").removeClass('active');
                $(".overseas").removeClass('active');
                $(".domestic").addClass('active');

                $("#select_type").val("").change();
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
                            'name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Name is required'
                                    }
                                }
                            },
                            'coordinate': {
                                validators: {
                                    notEmpty: {
                                        message: 'Coordinate is required'
                                    }
                                }
                            },
                            'description': {
                                validators: {
                                    notEmpty: {
                                        message: 'Description is required'
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
                            var institution_type_id = $('#select_type').val();
                            var institution_id = $('#institution_id').val();

                            formData.append('institution_type_id', institution_type_id);

                            for(var pair of formData.entries()) {
                                //console.log(pair[0]+ ', '+ pair[1]);
                            }

                            modalHeader = $('.modal-title').text();

                            if (modalHeader == 'Register Institution') {

                                $.ajax({
                                    url: '/institution',
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
                                    url: '/institution/'+institution_id,
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

