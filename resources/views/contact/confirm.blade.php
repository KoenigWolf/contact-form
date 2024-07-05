<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容確認</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>お問い合わせ内容確認</h1>
        <form action="/contact/submit" method="POST">
            @csrf
            <div class="form-group">
                <label for="company_name">会社名:</label>
                <p>{{ $input['company_name'] }}</p>
                <input type="hidden" name="company_name" value="{{ $input['company_name'] }}">
            </div>
            <div class="form-group">
                <label for="name">氏名:</label>
                <p>{{ $input['name'] }}</p>
                <input type="hidden" name="name" value="{{ $input['name'] }}">
            </div>
            <div class="form-group">
                <label for="phone">電話番号:</label>
                <p>{{ $input['phone'] }}</p>
                <input type="hidden" name="phone" value="{{ $input['phone'] }}">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <p>{{ $input['email'] }}</p>
                <input type="hidden" name="email" value="{{ $input['email'] }}">
            </div>
            <div class="form-group">
                <label for="birthdate">生年月日:</label>
                <p>{{ $input['birthdate'] }}</p>
                <input type="hidden" name="birthdate" value="{{ $input['birthdate'] }}">
            </div>
            <div class="form-group">
                <label for="gender">性別:</label>
                <p>{{ $input['gender'] == 'male' ? '男性' : '女性' }}</p>
                <input type="hidden" name="gender" value="{{ $input['gender'] }}">
            </div>
            <div class="form-group">
                <label for="occupation">職業:</label>
                <p>{{ $input['occupation'] }}</p>
                <input type="hidden" name="occupation" value="{{ $input['occupation'] }}">
            </div>
            <div class="form-group">
                <label for="message">お問い合わせ内容:</label>
                <p>{{ $input['message'] }}</p>
                <input type="hidden" name="message" value="{{ $input['message'] }}">
            </div>
            <button type="submit">送信する</button>
        </form>
        <form action="/contact" method="GET">
            <button type="submit">戻る</button>
        </form>
    </div>
</body>
</html>
