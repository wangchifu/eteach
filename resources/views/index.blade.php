@extends('layouts.app')

@section('title','首頁')

@section('header')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">歡迎使用數位教學入口網</h1>
            <p class="lead fw-normal text-white-50 mb-0">請先右上角登入，再點選下方圖示</p>
        </div>
    </div>
</header>
@endsection

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://drive.google.com/a/chc.edu.tw" target="_blank"><img src="{{ asset('assets/drive.png') }}" /></a>
                            <h5 class="fw-bolder">Google Drive雲端硬碟</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://mail.google.com/a/chc.edu.tw" target="_blank"><img src="{{ asset('assets/gmail.png') }}" /></a>
                            <h5 class="fw-bolder">Gmail信箱</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://www.google.com/a/chc.edu.tw/ServiceLogin?continue=https://meet.google.com" target="_blank"><img src="{{ asset('assets/meet.png') }}" /></a>
                            <h5 class="fw-bolder">Meet線上會議</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://www.google.com/a/chc.edu.tw/ServiceLogin?continue=https://classroom.google.com" target="_blank"><img src="{{ asset('assets/classroom.png') }}" /></a>
                            <h5 class="fw-bolder">Classroom線上教室</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>     
        </div>
    </div>
</section>
@endsection