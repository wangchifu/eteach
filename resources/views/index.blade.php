@extends('layouts.app')

@section('title','首頁')

@section('header')
    @if(empty(session('user_data')))
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">歡迎使用數位教學入口網</h1>
                    <p class="lead fw-normal text-white-50 mb-0">請先由上方登入，再點選下方圖示</p>
                </div>
            </div>
        </header>            
    @else        
        <div class="container px-4 px-lg-5 my-2 text-center">
            <div id="session-timer">剩餘時間: -- 分鐘</div>
        </div>
        <form id="logout-form" action="/logout" method="get"></form>
    @endif
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
// 每分鐘 ping 一次，檢查是否過期
setInterval(() => {
    fetch('/ping', {credentials: 'same-origin'})
        .then(res => {
            if (res.status === 401 || res.status === 419) {
                // 401 未授權 / 419 session 過期
                window.location.href = '/logout'; // 直接導向登出
            }
        })
        .catch(err => {
            console.error('Ping 失敗:', err);
        });
}, 60000); // 60000 毫秒 = 1 分鐘

// Laravel session.lifetime 單位是分鐘
let sessionLifetime = {{ config('session.lifetime') }};
let remainingSeconds = sessionLifetime * 60;

const timerEl = document.getElementById('session-timer');

function formatTime(sec) {
    let m = Math.floor(sec / 60);
    let s = sec % 60;
    return `${m.toString().padStart(2,'0')}:${s.toString().padStart(2,'0')}`;
}

function updateTimer() {
    if (remainingSeconds <= 0) {
        // 倒數結束，用 form submit 登出
        document.getElementById('logout-form').submit();
        clearInterval(timerInterval);
    } else {
        timerEl.textContent = `剩餘時間: ${formatTime(remainingSeconds)}`;
        remainingSeconds--;
    }
}

// 每秒更新
updateTimer();
let timerInterval = setInterval(updateTimer, 1000);
</script>
@endsection