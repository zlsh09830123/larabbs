<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 三個判斷：
        // 1. 如果用戶已經登入
        // 2. 並且還未認證 Email
        // 3. 並且訪問的不是 email 驗證相關 URL 或者登出的 URL
        if ($request->user() && !$request->user()->hasVerifiedEmail() && !$request->is('email/*', 'logout')) {
            // 根據客戶端返回對應的內容
            return $request->expectsJson() ? abort(403, 'Your email address is not verified.') : redirect()->route('verification.notice');
        }

        return $next($request);
    }
}
