<!-- 1. 載入 Google 官方 SDK -->
<script src="https://accounts.google.com/gsi/client" async defer></script>

<!-- 2. Google One Tap 自動跳窗設定 -->
<div id="g_id_onload"
     data-client_id="926768432424-sn23ltg79fscgnhpg9lqf6i06anvfpsf.apps.googleusercontent.com"
     data-callback="handleCredentialResponse"
     data-auto_select="true"
     data-use_fedcm_for_prompt="true">
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('assets/letter-e.png') }}" height="32px">彰化數位教學入口網
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"></ul>
            
            <div class="d-flex align-items-center gap-2">
                @if(!empty(session('user_data')))
                    <!-- 已登入狀態：顯示大頭照、姓名與登出按鈕 -->
                    @if(session('user_picture'))
                        <img src="{{ session('user_picture') }}" alt="Profile" style="width:32px; height:32px; border-radius:50%;">
                    @else
                        <i class="bi bi-emoji-smile fs-5"></i>
                    @endif
                    <span class="fw-bold">{{ session('user_data') }}</span>
                    <a class="btn btn-outline-dark btn-sm ms-2" href="{{ route('logout') }}">登出</a>
                @else
                    <!-- 未登入狀態：顯示原本的 OpenID 按鈕 + Google 官方登入按鈕 -->
                    <a class="btn btn-outline-dark" href="{{ route('sso') }}">OpenID 登入</a>
                    
                    <!-- Google 官方標準按鈕 -->
                    <div class="g_id_signin"
                         data-type="standard"
                         data-size="medium"
                         data-theme="outline"
                         data-text="sign_in_with"
                         data-shape="rectangular"
                         data-logo_alignment="left">
                    </div>
                @endif            
            </div>
        </div>
    </div>
</nav>

<!-- 3. JavaScript 接收 Token 並處理登入邏輯 -->
<script>
function parseJwt(token) {
    const base64Url = token.split('.')[1];
    const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    const jsonPayload = decodeURIComponent(
        atob(base64).split('').map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)).join('')
    );
    return JSON.parse(jsonPayload);
}

function handleCredentialResponse(response) {
    const user = parseJwt(response.credential);
    console.log("登入成功：", user);

    // TODO: 將 user.email, user.name, user.picture 傳送到 Laravel 後端儲存到 Session
    // 範例：利用 fetch 送出登入請求
    /*
    fetch('/api/google-login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            token: response.credential,
            name: user.name,
            email: user.email,
            picture: user.picture
        })
    }).then(() => location.reload());
    */
}
</script>