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
                    <!-- 【已通過 OpenID 登入】顯示 OpenID 姓名 -->
                    <i class="bi bi-emoji-smile me-1"></i>  
                    <span class="fw-bold me-2">{{ session('user_data') }}</span>

                    <!-- 已連結 Google 時顯示 Google 大頭照與 Email -->
                    @if(session('google_user'))
                        <div class="d-flex align-items-center border-start ps-2 ms-1 border-secondary">
                            <img src="{{ session('google_user.picture') }}" alt="Google Profile" style="width:28px; height:28px; border-radius:50%;" class="me-1">
                            <small class="text-muted">{{ session('google_user.email') }}</small>
                        </div>
                    @else
                        <!-- 尚未連結 Google：顯示 Google One Tap 跳窗與按鈕 -->
                        <script src="https://accounts.google.com/gsi/client" async defer></script>
                        
                        <div id="g_id_onload"
                             data-client_id="926768432424-sn23ltg79fscgnhpg9lqf6i06anvfpsf.apps.googleusercontent.com"
                             data-callback="handleCredentialResponse"
                             data-auto_select="true"
                             data-use_fedcm_for_prompt="true">
                        </div>

                        <div class="g_id_signin"
                             data-type="standard"
                             data-size="small"
                             data-theme="outline"
                             data-text="signin_with"
                             data-shape="rectangular">
                        </div>
                    @endif

                    <!-- 登出按鈕 -->
                    <a class="btn btn-outline-dark btn-sm ms-2" href="{{ route('logout') }}">登出</a>
                @else
                    <!-- 【未登入】僅顯示 OpenID 登入按鈕 -->
                    <a class="btn btn-outline-dark" href="{{ route('sso') }}">OpenID 登入</a>
                @endif            
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript 接收 Google 帳號資訊 -->
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
    const googleUser = parseJwt(response.credential);
    console.log("連結的 Google 帳號：", googleUser);

    // TODO: 發送 AJAX 將 googleUser (email, picture, name) 傳回後端寫入 Session 或資料庫
}
</script>