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
        <form enctype="multipart/form-data" class="mt-5 entry-form" action="/reserve/user" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label">スーツケースのサイズを選択してください。</label>
                <select class="form-select">
                    <option selected value="1">小</option>
                    <option value="2">中</option>
                    <option value="3">大</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="start_day" class="form-label">お届け日</label>
                <input type="date" name="start_day" class="form-control">
            </div>

            <div class="mb-4">
                <label for="end_day" class="form-label">お引き取り日</label>
                <input type="date" name="end_day" class="form-control">
            </div>

            <div class="d-flex justify-content-center complete-btn-grp pt-3 mb-5">
                <button type="submit" class="btn btn-primary px-3"><b>次へ</b></button>
            </div>
        </form>
    </div>
</body>

</html>