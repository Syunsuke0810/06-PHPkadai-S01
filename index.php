<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>会員登録フォーム</title>
</head>
<body>
  
</body>
</html>
<body>
 	<form action="confirm.php" method="post">
 		<h2>会員登録フォーム</h2>
	 	<div class="input-area">
		 	<p>名前</p>
		 	<input type="text" name="name" placeholder="例）田中　太郎" required>
		</div>

		<div class="input-area">
		 	<p>メール</p>
		 	<input type="email" name="email" placeholder="例）abc@abc.com" required>
	 	</div>

	 	<div class="input-area">
		 	<p>性別</p>
		 	<label><input type="radio" name="sex" value="男性" checked>男性</label>
		 	<label><input type="radio" name="sex" value="女性">女性</label>
	 	</div>

	 	<div class="input-area">
		 	<p>お住まいの地域</p>
		 	<select name="pref" required>
		 		<option value="">-選択-</option>
         <option value="北海道">北海道</option>
         <option value="青森県">青森県</option>
         <option value="秋田県">秋田県</option>
         <option value="岩手県">岩手県</option>
         <option value="宮城県">宮城県</option>
         <option value="福島県">福島県</option>
         <option value="新潟県">新潟県</option>
         <option value="山形県">山形県</option>
         <option value="茨城県">茨城県</option>
         <option value="栃木県">栃木県</option>
         <option value="群馬県">群馬県</option>
         <option value="千葉県">千葉県</option>
         <option value="東京都">東京都</option>
         <option value="神奈川県">神奈川県</option>
          <option value="埼玉県">埼玉県</option>
          <option value="長野県">長野県</option>
         <option value="山梨県">山梨県</option>
         <option value="静岡県">静岡県</option>
         <option value="愛知県">愛知県</option>
         <option value="岐阜県">岐阜県</option>
         <option value="石川県">石川県</option>
         <option value="富山県">富山県</option>
         <option value="滋賀県">滋賀県</option>
         <option value="三重県">三重県</option>
         <option value="京都県">京都県</option>
         <option value="奈良県">奈良県</option>
         <option value="兵庫県">兵庫県</option>
         <option value="和歌山県">和歌山県</option>
         <option value="大阪府">大阪府</option>
         <option value="奈良県">奈良県</option>
         <option value="奈良県">奈良県</option>
         <option value="その他">その他</option>

		 		
		 	</select>
	 	</div>

     <div class="input-area">
		 	<p>お勤めの施設種類</p>
		 	<select name="genre" required>
		 		<option value="">-選択-</option>
         <option value="認可保育園">認可保育園</option>
         <option value="小規模保育園">小規模保育園</option>
         <option value="認定こども園">認定こども園</option>
         <option value="企業主導型保育園">企業主導型保育園</option>
         <option value="幼稚園">幼稚園</option>
         <option value="児童発達支援">児童発達支援</option>
         <option value="放課後デイサービス">放課後デイサービス</option>
         <option value="ベビーシッター">ベビーシッター</option>
         <option value="その他">その他</option>
        
		 	</select>
	 	</div>

	 	<div class="input-area">
		 	<p>希望する働き方 ※何個でも</p>
		 	<label><input type="checkbox" name="reason[]" value="高時給">高時給</label>
		 	<label><input type="checkbox" name="reason[]" value="評価の高い施設">評価の高い施設</label>
		 	<label><input type="checkbox" name="reason[]" value="激短">激短</label>
		 	<label><input type="checkbox" name="reason[]" value="社宅あり">社宅あり</label>
		 	<label><input type="checkbox" name="reason[]" value="リゾート地">リゾート地</label>
       <label><input type="checkbox" name="reason[]" value="サバサバしている">人間関係サバサバしている</label><br>
       <label><input type="checkbox" name="reason[]" value="午前中のみ">午前中のみ</label>
       <label><input type="checkbox" name="reason[]" value="午後のみ">午後のみ</label>
       <label><input type="checkbox" name="reason[]" value="社員登用あり">社員登用あり</label>
       <label><input type="checkbox" name="reason[]" value="その他">その他</label>
	 	</div>

		<div class="input-area">
	 		<p>お問い合わせ内容</p>
	 		<textarea name="contact_body" rows="5" placeholder="例）具体的な内容を記載" required></textarea>
		</div>
	 	<div class="input-area">
	 		<input type="submit" name="submit" value="確認画面へ" class="btn-border">
	 	</div>
	</form>
</body>
</html>
