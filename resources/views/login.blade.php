@extends('layout.master')
@section('content')

<div class="row g-0" style="no-padding;">
    <div class="col-xl-4">&nbsp;</div>
    <div class="col-xl-4" style="margin-top:60px;">
        <div class="container" style="background-color:whitesmoke; height: 600px; border-radius: 15px; box-shadow: 0 2px 20px #18bbe4, 0 2px 20px #ab04cc; no-padding;">
            <div class="" style="justify-content: center;">
                <div class="row" style="height: 150px;">
                <h1 class="text-center" style="margin-top: 40px">Login</h1>
                </div>
                <div class="row">
                    <form action="" class="text-center">
                        <div class="row">
                            <div class="col-xl-4"><label for="username">Username: &nbsp;&nbsp;</label></div>
                            <div class="col-xl-8"><input type="text" style="width: 80%;" name="username"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-xl-4"><label for="password">Username: &nbsp;&nbsp;</label></div>
                            <div class="col-xl-8"><input type="password" style="width: 80%;" name="password"></div>
                        </div><br>
                        <button class="btn btn-primary" style="width: 75px;">Login</button>
                    </form>
                </div>
                <div class="row">&nbsp;</div>
                
            </div>
        </div>
    </div>
    <div class="col-xl-4">&nbsp;</div>
</div>
@endsection