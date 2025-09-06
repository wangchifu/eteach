@extends('layouts.app')

@section('title','首頁')

@section('header')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">歡迎使用數位教學入口網</h1>
            <p class="lead fw-normal text-white-50 mb-0">請先由上方登入，再點選下方圖示</p>
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
                            <h5 class="fw-bolder">Gmail 信箱</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://www.google.com/a/chc.edu.tw/ServiceLogin?continue=https://meet.google.com" target="_blank"><img src="{{ asset('assets/meet.png') }}" /></a>
                            <h5 class="fw-bolder">Meet 線上會議</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://www.google.com/a/chc.edu.tw/ServiceLogin?continue=https://classroom.google.com" target="_blank"><img src="{{ asset('assets/classroom.png') }}" /></a>
                            <h5 class="fw-bolder">Classroom 線上教室</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>     
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://oidc.tanet.edu.tw/a/chc.sso.edu.tw/ServiceLogin?service=coolenglish" target="_blank"><img src="{{ asset('assets/cool.png') }}" /></a>
                            <h5 class="fw-bolder">酷英網</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div> 
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://oidc.tanet.edu.tw/a/chc.sso.edu.tw/ServiceLogin?service=adaptivelearning" target="_blank"><img src="{{ asset('assets/adl.png') }}" /></a>
                            <h5 class="fw-bolder">因材網</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div> 
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://oidc.tanet.edu.tw/a/chc.sso.edu.tw/ServiceLogin?service=junyiacademy" target="_blank"><img src="{{ asset('assets/junyiacademy.png') }}" /></a>
                            <h5 class="fw-bolder">均一教育平台</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://oidc.tanet.edu.tw/a/chc.sso.edu.tw/ServiceLogin?service=pagamo" target="_blank"><img src="{{ asset('assets/pagamo.png') }}" /></a>
                            <h5 class="fw-bolder">pagamo</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://oidc.tanet.edu.tw/a/chc.sso.edu.tw/ServiceLogin?service=oidcebook" target="_blank"><img src="{{ asset('assets/ebook.png') }}" /></a>
                            <h5 class="fw-bolder">教育雲電子書</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div> 
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://cloud.edu.tw/oauth/eduCloud/index.php" target="_blank"><img src="{{ asset('assets/cloud.png') }}" /></a>
                            <h5 class="fw-bolder">教育雲數位學習入口</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://www.canva.com/zh_tw/login/" target="_blank"><img src="{{ asset('assets/canva.png') }}" /></a>
                            <h5 class="fw-bolder">canva</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-40">
                    <div class="card-body p-4">
                        <div class="text-center">                            
                            <a href="https://auth.openai.com/log-in-or-create-account" target="_blank"><img src="{{ asset('assets/chatgpt.png') }}" /></a>
                            <h5 class="fw-bolder">chatgpt</h5>                                                        
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
</section>
<script>
// Laravel session.lifetime 單位是分鐘
let sessionLifetime = {{ config('session.lifetime') }}; // 例如 120
let remaining = sessionLifetime;

const timerEl = document.getElementById('session-timer');

function updateTimer() {
    remaining--;
    if (remaining <= 0) {
        // 時間到，導回登入頁
        window.location.href = '/login';
    } else {
        timerEl.textContent = `剩餘時間: ${remaining} 分鐘`;
    }
}

// 每分鐘更新一次
updateTimer(); // 先顯示初始時間
setInterval(updateTimer, 60000);
</script>
@endsection