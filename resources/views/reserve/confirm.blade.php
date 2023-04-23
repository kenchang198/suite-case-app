<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>管理者画面</title>
</head>

<body>
    <header class="navbar text-light bg-dark">
        <div class="container-fluid">
            <b class="fs-4">日本レンタルケース</b>
        </div>
    </header>
    <div class="container-fluid">
        <div class="rent-info">
            <p class="mb-4">以下の内容でご予約を受け付けます。</p>
            <p>ご利用サイズ 大</p>
            <p>お届け日 2023/04/23</p>
            <p>お引取日 2023/05/07</p>
        </div>
        <form class="mt-5 entry-form confirm" action="/reserve/complete" method="POST">
            @csrf
            <div class="mb-4">
                <label class="form-label" for="title">お名前 :</label>
                <p class="ps-4">笹本健 様</p>
            </div>
            <div class="mb-4">
                <label class="form-label" for="title">お名前（ふりがな） :</label>
                <p class="ps-4">ささもとけん 様</p>
            </div>
            <div class="mb-4">
                <label class="form-label" for="title">お電話番号 :</label>
                <p class="ps-4">09073707665</p>
            </div>
            <div class="mb-4">
                <label class="form-label" for="title">メールアドレス :</label>
                <p class="ps-4">kssmt1957@yahoo.co.jp</p>
            </div>
            <div class="mb-4">
                <label class="form-label" for="title">ご住所 :</label>
                <p class="ps-4">〒154-0024<br>
                    東京都世田谷区三軒茶屋1-11-18<br>
                    ファイブスポットナガイ102
                </p>
            </div>

            <div class="d-flex justify-content-center complete-btn-grp pt-5 mb-5">
                <div><a class="text-light btn btn-secondary me-3" href="user.html"><b>戻る</b></a></div>
                <button type="submit" class="btn btn-primary px-3"><b>予約する</b></button>
            </div>
        </form>
    </div>
</body>

</html>