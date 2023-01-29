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
						<p class="text-mute mt-20 mb-0 font-size-16">Zarejestrowani użytkownicy</p>
						<h3 class="text-white mb-0 font-weight-500">{{$users}} </h3>
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
						<h3 class="text-white mb-0 font-weight-500">{{$products_count}}</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-6">
			<div class="box overflow-hidden pull-up">
				<div class="box-body">
					<div class="icon badge-success-light rounded w-60 h-60">
						<i class="badge-success-light mr-0 font-size-24 mdi mdi-chart-line"></i>
					</div>
					<div>
						<p class="text-mute mt-20 mb-0 font-size-16">Przychód w ostatnim miesiącu</p>
						<h3 class="text-white mb-0 font-weight-500">{{$total_orders}} zł</h3>
					</div>
				</div>
			</div>
		</div>


		<div class="">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">
						Podsumowanie przychodów
					</h4>
				</div>
				<div class="box-body py-0">
					<div class="row">
                        <div class="box-body">
                            <div class="icon badge-success-light rounded w-60 h-60">
                                <i class="badge-success-light mr-0 font-size-24 mdi mdi-cash-multiple"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Największe zamówienie</p>
                                <h3 class="text-white mb-0 font-weight-500">{{$max_order}} zł</h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-primary mr-0 font-size-24 mdi mdi-chart-arc"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Średnio na zamówienie</p>
                                <h3 class="text-white mb-0 font-weight-500">{{$avg_order}} zł</h3>
                            </div>
                        </div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title align-items-start flex-column">
						Ostatnie zamówienia
					</h4>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-border">
							<thead>
								<tr class="text-uppercase bg-lightest">
									<th style="min-width: 250px"><span class="text-white">Nr zamówienia</span></th>
									<th style="min-width: 100px"><span class="text-fade">Data</span></th>
									<th style="min-width: 100px"><span class="text-fade">Zamawiający</span></th>
									<th style="min-width: 150px"><span class="text-fade">Wartość</span></th>
									<th style="min-width: 130px"><span class="text-fade">Status</span></th>
									<th style="min-width: 120px"></th>
								</tr>
							</thead>
							<tbody>
                            @foreach($orders as $item)
                                <tr>
                                    <td> {{ $item->nr_order }}  </td>
                                    <td> {{ $item->created_at }}  </td>
                                    <td> {{ $item->name }}  </td>
                                    <td> {{ $item->amount }}  </td>
                                    <td> <span class="badge badge-pill badge-primary">{{ $item->status }} </span>  </td>
                                    <td class="text-right">
                                        <a href="{{ route('order.detail',$item->id) }}" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                            @endforeach
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
