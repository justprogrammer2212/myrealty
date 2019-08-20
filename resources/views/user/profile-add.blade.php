@extends('layouts.main')

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('images/page-top-bg.jpg')}}">
        <div class="container text-white">
            <h2>Особистий кабінет користувача</h2>
        </div>
    </section>
    <!--  Page top end -->
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="row justify-content-center">

                    <div class="col-sm-3">
                        {{--                Фото користувача--}}
                        <img class="user-profile" src="{{asset('images/user_profile.png')}}" alt="">
                    </div>
                    {{--                Контент--}}
                    <div class="col-sm-7 offset-sm-1">
                        <h6 class="text-primary h5">Логін</h6>
                        <h4 class="text-muted h3">{{Auth::user()->name}}</h4>
                        <hr>
                        <h6 class="text-primary h5">E-mail</h6>
                        <h4 class="text-muted h3">{{Auth::user()->email}}</h4>
                        <hr>
                        <h6 class="text-primary h5">Телефон</h6>
                        <h4 class="text-muted h3">{{Auth::user()->phone}}</h4>
                        <hr>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-4 offset-sm-4">
                        <h3 class="text-center h3 mt-4 mb-5">Додати оголошення</h3>
                        <form action="{{route('addOffer', ['user-id' => Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">title</label>
                                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Enter title">
                                @if ($errors->has('title'))
                                    <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                                @endif
                                <small id="emailHelp" class="form-text text-muted">title</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="text"
                                       class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" name="price" placeholder="Enter price">
                                @if ($errors->has('price'))
                                    <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                                @endif
                                <small id="emailHelp" class="form-text text-muted">price</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Currency</label>
                                <select name="currency" class="form-control">
                                    @foreach(\App\Models\Offer::$offer_currency as $currency)
                                        <option value="{{$currency}}" name="currency">{{$currency}}</option>
                                    @endforeach
                                </select>
                                <small id="emailHelp" class="form-text text-muted">currency</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status" class="form-control">
                                    @foreach(\App\Models\Offer::$sale as $status)
                                        <option value="{{$status}}" name="status">{{$status}}</option>
                                    @endforeach
                                </select>
                                <small id="emailHelp" class="form-text text-muted">currency</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description"
                                          class="form-control {{$errors->has('description') ? 'is-invalid' : '' }}"></textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger"><strong>{{ $errors->first('description') }}</strong></span>
                                @endif
                                <small id="emailHelp" class="form-text text-muted">description</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Location</label>
                                <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" name="location" placeholder="Enter location">
                                @if ($errors->has('price'))
                                    <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                                @endif
                                <small id="emailHelp" class="form-text text-muted">location</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Street</label>
                                <input type="text" class="form-control" name="street" placeholder="Enter street">
                                <span class="text-danger"><strong></strong></span>
                                <small class="form-text text-muted">Street</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Square</label>
                                <input type="text" class="form-control" name="square" placeholder="Enter square">
                                <span class="text-danger"><strong></strong></span>
                                <small class="form-text text-muted">Square</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Garage</label>
                                <input type="text" class="form-control" name="garage" placeholder="Enter garage">
                                <span class="text-danger"><strong></strong></span>
                                <small class="form-text text-muted">Garages</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bathroom</label>
                                <input type="text" class="form-control" name="bathroom" placeholder="Enter bathroom">
                                <span class="text-danger"><strong></strong></span>
                                <small class="form-text text-muted">Bathroom</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bedroom</label>
                                <input type="text" class="form-control" name="bedroom" placeholder="Enter bedroom">
                                <span class="text-danger"><strong></strong></span>
                                <small class="form-text text-muted">Bedroom</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Age-build</label>
                                <input type="number" class="form-control" name="age" placeholder="Enter Age build">
                                <span class="text-danger"><strong></strong></span>
                                <small class="form-text text-muted">Age</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category</label>
                                <select name="category" class="form-control">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Categories</small>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file">
                                    <label class="custom-file-label" for="customFile">Завантажити фото</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Додати оголошення</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
