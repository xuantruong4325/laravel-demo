@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20">
		<div class="row">
			<div class="col-xl-2 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class=" align-items-center">
						<div class="weight-600 font-14">Tổng sản phẩm:</div>
						<div class="h4 mb-0">{{ $product }}</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class=" align-items-center">
						<div class="weight-600 font-14">Tổng khách hàng:</div>
						<div class="h4 mb-0">{{ $user }}</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class=" align-items-center">
						<div class="weight-600 font-14">Tổng đơn hàng đã bán:</div>
						<div class="h4 mb-0">{{ $cart }}</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class=" align-items-center">
						<div class="weight-600 font-14">Tổng doanh thu:</div>
						<div class="h4 mb-0">{{ $price }} vnđ</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class=" align-items-center">
						<div class="weight-600 font-14">Tổng đơn hàng đã hủy:</div>
						<div class="h4 mb-0">{{ $cartCancel }}</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class=" align-items-center">
						<div class="weight-600 font-14">Tổng sản phẩm tồn kho:</div>
						<div class="h4 mb-0">{{ $inventory }}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-box mb-30">
			<div class="pb-20">
				<table class="table stripe hover nowrap ">
					<thead>
						<tr>

							<th>#</th>
							<th>Tên</th>
							<th>Ảnh</th>
							<th>Giá</th>
							<th>Đã bán</th>
						</tr>
					</thead>
					<tbody>

						@foreach($products as $key => $product)
						<tr>
							<th style="font-weight: 450;">{{ $key+1 }}</th>
							<th style="font-weight: 450;">{{ $product->content }}</th>
							<th><img src="/image/{{ $product->file }}" alt="" width="50" header="50"></th>
							@if($product->discount != null)
							<th style="font-weight: 450;">{{ $product->price_after_discount }}</th>
							@else
							<th style="font-weight: 450;">{{ $product->old_price }}</th>
							@endif
							<th style="font-weight: 450;">{{ $product->sold }}</th>
						</tr>
						@endforeach

					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
@endsection