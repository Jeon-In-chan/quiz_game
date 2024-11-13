<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
    @include('includes.headers') <!-- 헤더 파일 포함 -->
    <body>
        <div>
            @yield('content') <!-- 각 페이지에서 개별 콘텐츠가 들어갈 자리 -->
        </div>
    </body>
</html>
