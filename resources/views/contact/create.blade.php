<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>お問い合わせフォーム</h1>

        @if (session('status'))
            <div class="status">{{ session('status') }}</div>
        @endif

        <form action="/contact" method="POST">
            @csrf
            <div class="form-group">
                <span class="required">必須</span>
                <label for="company_name">会社名:</label>
                <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="例）株式会社〇〇">
                @error('company_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="name">氏名:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="例）山田太郎">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="phone">電話番号:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="例）000-0000-0000">
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="例）example@gmail.com">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="birthdate">生年月日:</label>
                <input type="date" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" placeholder="yyyy/mm/dd">
                @error('birthdate')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="gender">性別:</label>
                <select id="gender" name="gender">
                    <option value="male">男性</option>
                    <option value="female">女性</option>
                </select>
                @error('gender')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="occupation">職業:</label>
                <input type="text" id="occupation" name="occupation" value="{{ old('occupation') }}" placeholder="例）会社員">
                @error('occupation')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <span class="required">必須</span>
                <label for="message">お問い合わせ内容:</label>
                <textarea id="message" name="message" placeholder="例）ご質問やご相談内容を記載してください">{{ old('message') }}</textarea>
                @error('message')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">送信</button>
        </form>
    </div>
</body>
</html>
