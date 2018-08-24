@extends('layouts.full-width')

@section('content')
<div class="container">
<div class="row">
	<!-- BEGIN SEARCH RESULT -->
	<div class="col-md-12">
		<div class="grid search">
			<div class="grid-body">
				<div class="row">
					<!-- BEGIN FILTERS -->
					<div class="col-md-3">
						<h2 class="grid-title"><i class="fa fa-filter"></i> Filters</h2>
						<hr>
						
						<!-- BEGIN FILTER BY CATEGORY -->
						<h4>By category:</h4>
						<div class="checkbox">
							<label><input type="checkbox" class="icheck"> Application</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="icheck"> Design</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="icheck"> Desktop</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="icheck"> Management</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="icheck"> Mobile</label>
						</div>
						<!-- END FILTER BY CATEGORY -->
						
						<div class="padding"></div>
						
						<!-- BEGIN FILTER BY DATE -->
						<h4>By date:</h4>
						From
						<div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
							<input type="text" class="form-control">
							<span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>
						</div>
						<input type="hidden" id="dtp_input1" value="">
						
						To
						<div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2">
							<input type="text" class="form-control">
							<span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>
						</div>
						<input type="hidden" id="dtp_input2" value="">
						<!-- END FILTER BY DATE -->
						
						<div class="padding"></div>
						
						<!-- BEGIN FILTER BY PRICE -->
						<h4>By price:</h4>
						Between <div id="price1">$300</div> to <div id="price2">$800</div>
						<div class="slider-primary">
							<div class="slider slider-horizontal" style="width: 152px;"><div class="slider-track"><div class="slider-selection" style="left: 30%; width: 50%;"></div><div class="slider-handle round" style="left: 30%;"></div><div class="slider-handle round" style="left: 80%;"></div></div><div class="tooltip top hide" style="top: -30px; left: 50.1px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">300 : 800</div></div><input type="text" class="slider" value="" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[300,800]" data-slider-tooltip="hide"></div>
						</div>
						<!-- END FILTER BY PRICE -->
					</div>
					<!-- END FILTERS -->
					<!-- BEGIN RESULT -->
					<div class="col-md-9">
                        <br>
						<div class="row">
							<div class="col-md-6 text-right">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-default active"><i class="fa fa-th"></i>All</button>
									<button type="button" class="btn btn-sm btn-default"><i class="fa fa-list"></i>Posts</button>
									<button type="button" class="btn btn-sm btn-default"><i class="fa fa-th"></i>Pages</button>
									<button type="button" class="btn btn-sm btn-default"><i class="fa fa-th"></i>People</button>
									<button type="button" class="btn btn-sm btn-default"><i class="fa fa-th"></i>Groups</button>
								</div>
							</div>
                        </div>
                        <hr>
						
						<!-- BEGIN TABLE RESULT -->
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody><tr>
									<td class="number text-center">1</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/1" alt=""></td>
									<td class="product"><strong>Product 1</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
									<td class="price text-right">$350</td>
								</tr>
								<tr>
									<td class="number text-center">2</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/2" alt=""></td>
									<td class="product"><strong>Product 2</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></td>
									<td class="price text-right">$1,050</td>
								</tr>
								<tr>
									<td class="number text-center">3</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/3" alt=""></td>
									<td class="product"><strong>Product 3</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></span></td>
									<td class="price text-right">$550</td>
								</tr>
								<tr>
									<td class="number text-center">4</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/4" alt=""></td>
									<td class="product"><strong>Product 4</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span></td>
									<td class="price text-right">$330</td>
								</tr>
								<tr>
									<td class="number text-center">5</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/5" alt=""></td>
									<td class="product"><strong>Product 5</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
									<td class="price text-right">$540</td>
								</tr>
								<tr>
									<td class="number text-center">6</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/6" alt=""></td>
									<td class="product"><strong>Product 6</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
									<td class="price text-right">$870</td>
								</tr>
								<tr>
									<td class="number text-center">7</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/7" alt=""></td>
									<td class="product"><strong>Product 7</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></td>
									<td class="price text-right">$620</td>
								</tr>
								<tr>
									<td class="number text-center">8</td>
									<td class="image"><img src="https://lorempixel.com/400/300/nature/8" alt=""></td>
									<td class="product"><strong>Product 8</strong><br>This is the product description.</td>
									<td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
									<td class="price text-right">$1,550</td>
								</tr>
							</tbody></table>
						</div>
						<!-- END TABLE RESULT -->
						
						<!-- BEGIN PAGINATION -->
						<ul class="pagination">
							<li class="disabled"><a href="#">«</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
						</ul>
						<!-- END PAGINATION -->
					</div>
					<!-- END RESULT -->
				</div>
			</div>
		</div>
	</div>
	<!-- END SEARCH RESULT -->
</div>
</div>
@endsection
