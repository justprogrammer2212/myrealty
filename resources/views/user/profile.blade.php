@extends('layouts.main')

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="../images/page-top-bg.jpg">
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
                        <img class="user-profile" src="../images/user_profile.png" alt="">
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
                {{--                Рндагування контенту--}}
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <h3 class="text-center h3 mt-4 mb-5">Мої оголошення</h3>
                        <table class="table">
                            <thead>
                            <tr class="table-info">
{{--                                @foreach($user_offer as $user)--}}
                                <th scope="col">Оголошення</th>
                                <th scope="col">Переглянути</th>
                                <th scope="col">Редагувати</th>
                                <th scope="col">Видалити</th>
{{--                                    @endforeach--}}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Show</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
