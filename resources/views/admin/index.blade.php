@extends('admin.admin')
@section('admin')
<div class="container-full">

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xl-2 col-6">
			<div class="box overflow-hidden pull-up">
				<div class="box-body">							
					<div class="icon bg-primary-light rounded w-60 h-60">
						<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
					</div>
					<div>
						<p class="text-mute mt-20 mb-0 font-size-16">Nowi użytkownicy</p>
						<h3 class="text-white mb-0 font-weight-500">700 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-6">
			<div class="box overflow-hidden pull-up">
				<div class="box-body">							
					<div class="icon bg-warning-light rounded w-60 h-60">
						<i class="text-warning mr-0 font-size-24 mdi mdi-cellphone-iphone"></i>
					</div>
					<div>
						<p class="text-mute mt-20 mb-0 font-size-16">Sprzedane smartfony</p>
						<h3 class="text-white mb-0 font-weight-500">5100 <small class="text-success"><i class="fa fa-caret-up"></i> +5%</small></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-6">
			<div class="box overflow-hidden pull-up">
				<div class="box-body">							
					<div class="icon bg-light rounded w-60 h-60">
						<i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
					</div>
					<div>
						<p class="text-mute mt-20 mb-0 font-size-16">Przychód w ostatnim miesiącu</p>
						<h3 class="text-white mb-0 font-weight-500">85 000 zł <small class="text-success"><i class="fa fa-caret-up"></i> +21%</small></h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xl-6 col-12">
			<div class="row">						
				<div class="col-lg-6 col-12">
					<div class="box overflow-hidden">
						<div class="box-body pb-0">	
							<div>
								<h2 class="text-white mb-0 font-weight-500">18k</h2>
								<p class="text-mute mb-0 font-size-20">Zarejestrowanych użytkowników</p>
							</div>
						</div>
						<div class="box-body p-0">
							<div id="revenue1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">
						Podsumowanie przychodów
					</h4>
				</div>
				<div class="box-body py-0">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="box no-shadow mb-0">
								<div class="box-body px-0">
									<div class="d-flex justify-content-start align-items-center">
										<div>
											<div id="chart41"></div>
										</div>
										<div>
											<h5>Największe zamówienie</h5>
											<h4 class="text-white my-0 font-weight-500">13 000 zł</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="box no-shadow mb-0">
								<div class="box-body px-0">
									<div class="d-flex justify-content-start align-items-center">
										<div>
											<div id="chart42"></div>
										</div>
										<div>
											<h5>Średnio na zamówienie</h5>
											<h4 class="text-white my-0 font-weight-500">1 200 zł</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="charts_widget_43_chart"></div>							
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title align-items-start flex-column">
						Nowe zamówienia
					</h4>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-border">
							<thead>
								<tr class="text-uppercase bg-lightest">
									<th style="min-width: 250px"><span class="text-white">products</span></th>
									<th style="min-width: 100px"><span class="text-fade">pruce</span></th>
									<th style="min-width: 100px"><span class="text-fade">deposit</span></th>
									<th style="min-width: 150px"><span class="text-fade">agent</span></th>
									<th style="min-width: 130px"><span class="text-fade">status</span></th>
									<th style="min-width: 120px"></th>
								</tr>
							</thead>
							<tbody>
								<tr>										
									<td class="pl-0 py-8">
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0 mr-20">
												<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
											</div>

											<div>
												<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</div>
										</div>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45,800k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Sophia
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											Pharetra
										</span>
									</td>
									<td>
										<span class="badge badge-primary-light badge-lg">Approved</span>
									</td>
									<td class="text-right">
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
									</td>
								</tr>
								<tr>										
									<td class="pl-0 py-8">
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0 mr-20">
												<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
											</div>

											<div>
												<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</div>
										</div>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45,800k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Sophia
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											Pharetra
										</span>
									</td>
									<td>
										<span class="badge badge-warning-light badge-lg">In Progress</span>
									</td>
									<td class="text-right">
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
									</td>
								</tr>
								<tr>										
									<td class="pl-0 py-8">
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0 mr-20">
												<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
											</div>

											<div>
												<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</div>
										</div>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45,800k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Sophia
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											Pharetra
										</span>
									</td>
									<td>
										<span class="badge badge-success-light badge-lg">Success</span>
									</td>
									<td class="text-right">
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
									</td>
								</tr>
								<tr>										
									<td class="pl-0 py-8">
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0 mr-20">
												<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
											</div>

											<div>
												<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</div>
										</div>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45,800k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Sophia
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											Pharetra
										</span>
									</td>
									<td>
										<span class="badge badge-danger-light badge-lg">Rejected</span>
									</td>
									<td class="text-right">
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
									</td>
								</tr>
								<tr>										
									<td class="pl-0 py-8">
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0 mr-20">
												<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
											</div>

											<div>
												<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
											</div>
										</div>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45,800k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Paid
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											$45k
										</span>
									</td>
									<td>
										<span class="text-fade font-weight-600 d-block font-size-16">
											Sophia
										</span>
										<span class="text-white font-weight-600 d-block font-size-16">
											Pharetra
										</span>
									</td>
									<td>
										<span class="badge badge-warning-light badge-lg">In Progress</span>
									</td>
									<td class="text-right">
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
										<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>  
		</div>
	</div>
</section>
<!-- /.content -->
</div>
@endsection