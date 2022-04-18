@extends('layout')

@section('title', 'Dashboard')
 
@section('content')
	
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Toolbar-->
		<div class="toolbar" id="kt_toolbar">
			<!--begin::Container-->
			<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
				<!--begin::Page title-->
				<div class="d-flex align-items-center me-3">
					<!--begin::Title-->
					<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Dashboard</h1>
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
						<li class="breadcrumb-item text-dark">Dashboard</li>
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
				<div class="row">
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-4">
						<!--begin::Card widget 2-->
						<div class="card h-lg-75">
							<!--begin::Body-->
							<div class="card-body row">
								<!--begin::Icon-->
								<div class="m-0 col-xl-4">
									<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
									<span class="svg-icon svg-icon-muted svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M8.39961 20.5073C7.29961 20.5073 6.39961 19.6073 6.39961 18.5073C6.39961 17.4073 7.29961 16.5073 8.39961 16.5073H9.89961C11.7996 16.5073 13.3996 14.9073 13.3996 13.0073C13.3996 11.1073 11.7996 9.50732 9.89961 9.50732H8.09961L6.59961 11.2073C6.49961 11.3073 6.29961 11.4073 6.09961 11.5073C6.19961 11.5073 6.19961 11.5073 6.29961 11.5073H9.79961C10.5996 11.5073 11.2996 12.2073 11.2996 13.0073C11.2996 13.8073 10.5996 14.5073 9.79961 14.5073H8.39961C6.19961 14.5073 4.39961 16.3073 4.39961 18.5073C4.39961 20.7073 6.19961 22.5073 8.39961 22.5073H15.3996V20.5073H8.39961Z" fill="currentColor"/>
											<path opacity="0.3" d="M8.89961 8.7073L6.69961 11.2073C6.29961 11.6073 5.59961 11.6073 5.19961 11.2073L2.99961 8.7073C2.19961 7.8073 1.7996 6.50732 2.0996 5.10732C2.3996 3.60732 3.5996 2.40732 5.0996 2.10732C7.6996 1.50732 9.99961 3.50734 9.99961 6.00734C9.89961 7.00734 9.49961 8.0073 8.89961 8.7073Z" fill="currentColor"/>
											<path d="M5.89961 7.50732C6.72804 7.50732 7.39961 6.83575 7.39961 6.00732C7.39961 5.1789 6.72804 4.50732 5.89961 4.50732C5.07119 4.50732 4.39961 5.1789 4.39961 6.00732C4.39961 6.83575 5.07119 7.50732 5.89961 7.50732Z" fill="currentColor"/>
											<path opacity="0.3" d="M17.3996 22.5073H15.3996V13.5073C15.3996 12.9073 15.7996 12.5073 16.3996 12.5073C16.9996 12.5073 17.3996 12.9073 17.3996 13.5073V22.5073Z" fill="currentColor"/>
											<path d="M21.3996 18.5073H15.3996V13.5073H21.3996C22.1996 13.5073 22.5996 14.4073 22.0996 15.0073L21.2996 16.0073L22.0996 17.0073C22.6996 17.6073 22.1996 18.5073 21.3996 18.5073Z" fill="currentColor"/>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="mb-7 col-xl-8 d-flex align-items-end flex-column div-installed-sensors">
									<div id="installed-sensors" class="fw-bold fs-4x text-gray-800 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="372">0</div>
									<div class="m-0">
										<span class="fw-bold fs-6 text-gray-400">Installed Sensors</span>
									</div>
								</div>
								<!--end::Section-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-4">
						<!--begin::Card widget 2-->
						<div class="card h-lg-75">
							<!--begin::Body-->
							<div class="card-body row">
								<!--begin::Icon-->
								<div class="m-0 col-xl-4">
									<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
									<span class="svg-icon svg-icon-muted svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"/>
											<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"/>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="mb-7 col-xl-8 d-flex align-items-end flex-column">
									<!--begin::Number-->
									<div id="institution" class="fw-bold fs-4x text-gray-800 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="372">0</div>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-bold fs-6 text-gray-400">Institution</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-4">
						<!--begin::Card widget 2-->
						<div class="card h-lg-75">
							<!--begin::Body-->
							<div class="card-body row">
								<!--begin::Icon-->
								<div class="m-0 col-xl-4">
									<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
									<span class="svg-icon svg-icon-muted svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 11H18.9C18.5 7.9 16 5.49998 13 5.09998V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V5.09998C7.9 5.49998 5.50001 8 5.10001 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H5.10001C5.50001 16.1 8 18.4999 11 18.8999V21C11 21.6 11.4 22 12 22C12.6 22 13 21.6 13 21V18.8999C16.1 18.4999 18.5 16 18.9 13H21C21.6 13 22 12.6 22 12C22 11.4 21.6 11 21 11ZM12 17C9.2 17 7 14.8 7 12C7 9.2 9.2 7 12 7C14.8 7 17 9.2 17 12C17 14.8 14.8 17 12 17Z" fill="currentColor"/>
										<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" fill="currentColor"/>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="mb-7 col-xl-8 d-flex align-items-end flex-column">
									<!--begin::Number-->
									<div id="sensors" class="fw-bold fs-4x text-gray-800 lh-1 ls-n2" data-kt-countup="true" data-kt-countup-value="4">0</div>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-bold fs-6 text-gray-400">Sensors</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
				</div>
				<!--begin::Card-->
				<div class="card mb-5">
					<!--begin::Card body-->
					<div class="card-body p-0 row">
						<!--begin::Wrapper-->
						<div class="py-10 col-6">
							<div id="div_chart_xy"></div>
						</div>
						<div class="py-10 col-6">
							<div id="div_chart_pie"></div>
						</div>
					</div>
					<!--end::Card body-->
				</div>
				<div class="card">
					<!--begin::Card body-->
					<div class="card-body p-0">
						<!--begin::Wrapper-->
						<div class="card-px py-10">
							<div id="map"></div>
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

	
@endsection

@section('javascript')


	{{-- <script src="assets/js/area/general.js"></script> --}}

	<script type="text/javascript">

		var user_id = '{{ Session::get('user_id') }}';
		var email = '{{ Session::get('email') }}';
		var privilege = '{{ implode(",", Session::get('privilege')) }}';
		var arr_privilege = privilege.split(',');
		var priv_area_update = arr_privilege.includes('area_setup_update');
		var priv_area_delete = arr_privilege.includes('area_setup_delete');

		var map = L.map('map').setView([51.505, -0.09], 13);


		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
		});	

		function initCharts() {

			var arr_sensors = [{
				sensors_name: "test",
				value: 0
			}];

			var arr_location = [{
				location_name: "test",
				value: 0
			}];

			var arr_institution = [{
				institution_name: "test"
			}];

			$.ajax({
				dataType: 'JSON',
				type: 'GET',
				url: '/institution_sensors/all',
				success: function (data) {

					//console.log(data);
					let count_is = new countUp.CountUp('installed-sensors', data.length);
					if (!count_is.error) { count_is.start(); } 
					else { console.error(count_is.error);}

					for (var i = 0; i < data.length; i++) {

						var id          			= data[i].id;
						var institution_name		= data[i].institution_name;
						var institution_location	= data[i].institution_location;
						var sensors_name        	= data[i].sensors_name;

						if (arr_sensors.some(e => e.sensors_name === 'test')) {

							objIndex = arr_sensors.findIndex((obj => obj.sensors_name == 'test'));
							arr_sensors[objIndex].sensors_name = sensors_name;
							arr_sensors[objIndex].value = 1;
						}
						else if (!arr_sensors.some(e => e.sensors_name === sensors_name)) {

							arr_sensors.push({sensors_name : sensors_name, value : 1});
						}
						else{

							objIndex = arr_sensors.findIndex((obj => obj.sensors_name == sensors_name));
							arr_sensors[objIndex].value += 1;
						}

						if (arr_location.some(e => e.location_name === 'test')) {

							objIndex = arr_location.findIndex((obj => obj.location_name == 'test'));
							arr_location[objIndex].location_name = institution_location;
							arr_location[objIndex].value = 1;
						}
						else if (!arr_location.some(e => e.location_name === institution_location)) {

							arr_location.push({location_name : institution_location, value : 1});
						}
						else{

							objIndex = arr_location.findIndex((obj => obj.location_name == institution_location));
							arr_location[objIndex].value += 1;
						}

						if (arr_institution.some(e => e.institution_name === 'test')) {

							objIndex = arr_institution.findIndex((obj => obj.institution_name == 'test'));
							arr_institution[objIndex].institution_name = institution_name;
						}
						else if (!arr_institution.some(e => e.institution_name === institution_name)) {

							arr_institution.push({institution_name : institution_name});
						}
					}

					// let count_it = new countUp.CountUp('institution', arr_institution.length);
					// if (!count_it.error) { count_it.start(); } 
					// else { console.error(count_it.error);}

					// let count_ss = new countUp.CountUp('sensors', arr_sensors.length);
					// if (!count_ss.error) { count_ss.start(); } 
					// else { console.error(count_ss.error);}
					
					// Create root pie chart
					var rootPie = am5.Root.new("div_chart_pie");

					rootPie.setThemes([
						am5themes_Animated.new(rootPie)
					]);

					var chartPie = rootPie.container.children.push(
						am5percent.PieChart.new(rootPie, {})
					);

					// Create series
					var seriesPie = chartPie.series.push(
						am5percent.PieSeries.new(rootPie, {
							name: "Series",
							valueField: "value",
							categoryField: "location_name",
							alignLabels: true
						})
					);
					
					// seriesPie.get("colors").set("colors", [
					//   	am5.color("#ec555c"),
					//   	am5.color("#199ec7"),
					//   	am5.color("#40bc86"),
					//   	am5.color("#fcb410")
					// ]);

					seriesPie.data.setAll(arr_location);

					seriesPie.labels.template.setAll({
						fontSize: 12,
						text: "{category} ({value})",
						textType: "adjusted",
						radius: 10
					});

					seriesPie.ticks.template.setAll({
					  	location: 0.8
					});

					var rootXY = am5.Root.new("div_chart_xy"); 
					var chart = rootXY.container.children.push( 
					  am5xy.XYChart.new(rootXY, {
					    panY: false,
					    layout: rootXY.verticalLayout
					  }) 
					);

					// Define data
					var data = [{ 
					  category: "Research", 
					  value1: 1000, 
					  value2: 588 
					}, { 
					  category: "Marketing", 
					  value1: 1200, 
					  value2: 1800 
					}, { 
					  category: "Sales", 
					  value1: 850, 
					  value2: 1230 
					}];

					// Craete Y-axis
					var yAxis = chart.yAxes.push( 
					  am5xy.ValueAxis.new(rootXY, { 
					    renderer: am5xy.AxisRendererY.new(rootXY, {}) 
					  }) 
					);

					// Create X-Axis
					var xAxis = chart.xAxes.push(
					  am5xy.CategoryAxis.new(rootXY, {
					    renderer: am5xy.AxisRendererX.new(rootXY, {}),
					    categoryField: "sensors_name"
					  })
					);
					xAxis.data.setAll(arr_sensors);

					// Create series
					var series1 = chart.series.push( 
					  am5xy.ColumnSeries.new(rootXY, { 
					    name: "Sensors", 
					    xAxis: xAxis, 
					    yAxis: yAxis, 
					    valueYField: "value", 
					    categoryXField: "sensors_name" 
					  }) 
					);
					series1.data.setAll(arr_sensors);

					series1.columns.template.setAll({
					  tooltipText: "{sensors_name}: {value}"
					});

					// Add legend
					var legend = chart.children.push(am5.Legend.new(rootXY, {})); 
					legend.data.setAll(chart.series.values);

					// Add cursor
					chart.set("cursor", am5xy.XYCursor.new(rootXY, {}));
				}
			});

			$.ajax({
				dataType: 'JSON',
				type: 'GET',
				url: '/institution/all',
				success: function (data) {

					//console.log(data);
					let count_it = new countUp.CountUp('institution', data.length);
					if (!count_it.error) { count_it.start(); } 
					else { console.error(count_it.error);}
				}
			});

			$.ajax({
				dataType: 'JSON',
				type: 'GET',
				url: '/sensors/all',
				success: function (data) {

					//console.log(data);
					let count_ss = new countUp.CountUp('sensors', data.length);
					if (!count_ss.error) { count_ss.start(); } 
					else { console.error(count_ss.error);}
				}
			});

			
		}

		function initMap() {
			// set lokasi latitude dan longitude, lokasinya kota palembang 
			map.remove();

			map = L.map('map').setView([-2.9547949, 104.6929233], 5);   
			//setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoiYXVmYXJzeWFoIiwiYSI6ImNsMW13NXlxeDBvdDAzcG82eDQ2ejVoMW4ifQ.sOJQY5T3FSYdWAc26v_BYg', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				maxZoom: 18,
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1,
				accessToken: 'sk.eyJ1IjoiYXVmYXJzeWFoIiwiYSI6ImNsMW13NXlxeDBvdDAzcG82eDQ2ejVoMW4ifQ.sOJQY5T3FSYdWAc26v_BYg'
			}).addTo(map);
		}

		function initMapMarkers(){

			$.ajax({
				dataType: 'JSON',
				type: 'GET',
				url: '/institution_sensors/all',
				success: function (data) {

					//console.log(data);
					

					for (var i = 0; i < data.length; i++) {

						var id          = data[i].id;
						var name        = data[i].institution_name;
						var coordinate  = data[i].coordinate;
						var description = data[i].description;
						var serial_number = data[i].serial_number;
						var expired_date = data[i].expired_date;

						coordinate = coordinate.split(',');
						long = parseFloat(coordinate[0]);
						lat  = parseFloat(coordinate[1]);

						var arr_coordinate = [];

						arr_coordinate.push(long);
						arr_coordinate.push(lat);

						//console.log(arr_coordinate);
						L.marker(arr_coordinate).bindTooltip(name +'<br>Serial Number : '+serial_number+'<br>Expired date : '+expired_date).addTo(map);
						
					}
				}
			});
		}

		$(document).ready(function() {

			initCharts();
			initMap();
			initMapMarkers();
		});
		
	</script>

@endsection

