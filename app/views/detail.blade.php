@extends('layout')

@section('breadcrumb')
<li><a href="/districts">Home</a></li>	
<li><a href="/districts/{{{$district->id}}}">{{{$district->name}}}</a></li>
<li><a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}">{{{$subdiv->name}}}</a></li>
<li><a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}">{{{$circle->name}}}</a></li>
<li><a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}">{{{$mouza->name}}}</a></li>
<li><a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}">Lot - {{{$lot->name}}}</a></li>
<li><a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}/villages/{{{$village->id}}}">{{{$village->name}}}</a></li>
<li>Detail {{{$detail->sl}}}</li>
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">List of Land Owners</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
						@foreach ($pattadars as $pattadar)
							<a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}/villages/{{{$village->id}}}/details/{{{$detail->id}}}/pattadars/{{{$pattadar->id}}}" class="list-group-item">{{{$pattadar->sl}}}) {{{$pattadar->name}}}<br/>{{{$pattadar->relation}}} {{{$pattadar->gurdian}}}</a>
						@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">List of Awards</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
						@foreach ($awards as $award)
							<a href="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}/villages/{{{$village->id}}}/details/{{{$detail->id}}}/awards/{{{$award->id}}}" class="list-group-item">{{{$award->sl}}}</a>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">New Land Owner</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<form class="form-horizontal" action="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}/villages/{{{$village->id}}}/details/{{{$detail->id}}}/pattadars" method="POST">
								<div class="form-group">
									<label for="sl" class="col-sm-6 control-label">Sl. No.</label>
									<div class="col-sm-6">
										<input type="number" class="form-control" id="sl" name="sl" placeholder="Sl. No." tabindex="1" required min=1>
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-6 control-label">Name</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="2" required>
									</div>
								</div>
								<div class="form-group">
									<label for="relation" class="col-sm-6 control-label">Relation</label>
									<div class="col-sm-6">
										<select type="text" class="form-control" id="relation" name="relation" tabindex="3">
											<option value='S/o'>Son Of</option>
											<option value='D/o'>Daughter Of</option>
											<option value='W/o'>Wife Of</option>
											 
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="gurdianName" class="col-sm-6 control-label">Gurdian Name</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="gurdianName" name="gurdianName" placeholder="Gurdian Name" tabindex="4">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-6">
										<button type="submit" class="btn btn-primary btn-block" tabindex="5">SUBMIT</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">New Award</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}/villages/{{{$village->id}}}/details/{{{$detail->id}}}/awards" method="POST">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-6">
									<button type="submit" class="btn btn-primary btn-block" tabindex="5">ADD AWARD</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<form method="POST" action="/districts/{{{$district->id}}}/subdivs/{{{$subdiv->id}}}/circles/{{{$circle->id}}}/mouzas/{{{$mouza->id}}}/lots/{{{$lot->id}}}/villages/{{{$village->id}}}/details/{{{$detail->id}}}/delete">
						<div class="form-group">
							
							<div class="col-sm-offset-3 col-sm-6">
								<input type="password" class="form-control" id="pin" name="pin" placeholder="PIN" >
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-danger btn-block" tabindex="4">DELETE DETAIL</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
</div> 
@stop