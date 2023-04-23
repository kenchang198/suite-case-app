<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex" />
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
            <p>ご利用サイズ 大</p>
            <p>お届け日 2023/04/23</p>
            <p>お引取日 2023/05/07</p>
            <p class="mt-5">ご利用者様情報を入力してください。</p>
        </div>
        <form enctype="multipart/form-data" class="mt-5 entry-form" action="/reserve/confirm" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label">お名前</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-4">
                <label for="kana" class="form-label">お名前（ふりがな）</label>
                <input type="text" name="kana" class="form-control">
            </div>
            <div class="mb-4">
                <label for="tel" class="form-label">お電話番号</label>
                <input type="text" name="tel" class="form-control">
            </div>
            <div class="mb-4">
                <label for="mail" class="form-label">メールアドレス</label>
                <input type="text" name="mail" class="form-control">
            </div>

            <div class="">
                <label for="title" class="form-label">お届け先ご住所</label>
            </div>
            <div class="mb-4 row">
                <div class="col">
                    <input placeholder="郵便番号 上3桁" type="text" name="zip1" class="form-control">
                </div>
                <div class="col">
                    <input placeholder="郵便番号 下4桁" type="text" name="zip2" class="form-control">
                </div>
            </div>
            <div class="mb-4">
                <input placeholder="都道府県 市区町村 番地" type="text" name="address1" class="form-control">
            </div>
            <div class="mb-4">
                <input placeholder="マンション・建物名 部屋番号" type="text" name="address2" class="form-control">
            </div>

            <div class="d-flex justify-content-center complete-btn-grp pt-5 mb-5">
                <div><a class="text-light btn btn-secondary me-3" href="index2.html"><b>戻る</b></a></div>
                <button type="submit" class="btn btn-primary px-3"><b>確認</b></button>
            </div>
        </form>
    </div>
</body>

</html>