@extends('layouts.admin')

@section('content')
<div class="content">
	<div class="card">
        <div class="card-body">
            <form action="{{route('ticket.update',$tickets->id)}}" method="POST">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Edit</legend>
                    <a href="{{ url('admin/ticket') }}" class="btn btn-sm btn-outline-secondary btn-sm my-2 my-sm-0 ml-1">Back to Menu</a>
                    <div class="form-group row">
                        @csrf
                        <label class="col-form-label col-lg-2">Event</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                    <select class="form-control" name="event_id">
                                       @forelse($events as $ev)
                                       <option value="{{$ev->id}}" @if ($tickets->event_id == $ev->id) selected @endif>{{$ev->name}}</option>
                                       @empty
                                       @endforelse
                                   </select>
                            </div>
                                    @error('event_id')
                                    <div class="alert alert-danger alert-sm">{{ $message }}</div>
                                    @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" placeholder="Input Event Name Here" value="{{$tickets->name}}">
                            </div>
                            @error('name')
                                  <div class="alert alert-danger alert-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Description</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="description" placeholder="Input Description Here" value="{{$tickets->description}}">
                            </div>
                                @error('description')
                                  <div class="alert alert-danger alert-sm">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Term & Conditions</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="termsconds" placeholder="Input Term & Conditions Here" value="{{$tickets->termsconds}}">
                            </div>
                                @error('termsconds')
                                  <div class="alert alert-danger alert-sm">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Price</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </span>
                                <input type="text" class="form-control" name="price" placeholder="Input Price Here" value="{{$tickets->price}}">
                            </div>
                                @error('price')
                                  <div class="alert alert-danger alert-sm">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Discount</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </span>
                                <input type="text" class="form-control" name="disc" placeholder="Input Discount Here" value="{{$tickets->disc}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Limit</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="limit" placeholder="Input Limit Here" value="{{$tickets->limit}}">
                            </div>
                        </div>
                    </div>

                </fieldset>
                    <div class="form-group row">
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <button class="btn btn-light" type="submit" value="submit">Save</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </form>
@endsection