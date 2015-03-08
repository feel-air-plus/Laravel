お問い合わせがありました。<br>
以下、お問い合わせ内容↓<br>
<div>
-------------------------------------------<br>
お名前 　：{{$name}}<br>
Ｅメール ：{{$email}}<br>
件名 　　：{{\Config::get('const.OTOIAWASE_SUBJECT.'.$subject)}}<br>
お問い合わせ内容：<br>
{!! str_replace(PHP_EOL, "<br>", e($body)) !!}<br>

-------------------------------------------<br>
</div>
