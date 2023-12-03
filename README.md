# skin-matuba
## 概要
付箋型のスキン

機能
- 付箋タイプのスキン
- ~~Scrapbox意識~~

てがろぐバージョンはVer 4.1.4 beta版で確認しています。
一部Ver 4.1.4 以降で使用できる`[[IF(条件): ～中身～ :IF]]`、`[[USERINTRO]] `を使用していますので、
最新バージョンでご利用いただくか、該当部分を変更してご利用ください。
CSSで、一部`:has()`を使用しています。[一部のブラウザ](https://caniuse.com/css-has)では正常に動作しない可能性がありますのでご注意ください。
（全体のスクロールの制御に使用しています。効かなくても正直問題ない範囲です）

## デモ
こちらから

## 内容
- skin-cover.html (外側スキン)
- skin-onelog.html (内側スキン)
- style (フォルダ)
    - color.css (カラー変更用)
    - tegalog.css (全体のCSS)
- asset (フォルダ)
    - get_cemoji.php (カスタム絵文字をスキン側に一覧表示するphp)
    - ce_img_iframe.html
    - ce_img_js.html
    - ce_js.html
    - clipboad.html
    - darkmode.html
    - load.html
    - quote.html
- README.md (これ)
- LISENCE
- .gitattributes（削除してください）

## 使い方

## ライセンス
MITライセンス

## 各種使用ライブラリなどのライセンス
### てがろぐ
- 使用CGI
- https://www.nishishi.com/cgi/tegalog/
- [CGI使用条件（ライセンス）](https://www.nishishi.com/cgi/tegalog/#license)

### Normalize.css
- リセットCSS
- http://necolas.github.io/normalize.css
- [MIT License](https://github.com/necolas/normalize.css/blob/master/LICENSE.md)

### new.css
- クラスレスCSSフレームワーク
- 全体のスタイルシートとして使用
- https://newcss.net
- [MIT License](https://github.com/xz/new.css/blob/master/LICENSE)

### Font Awesome
- アイコンフォント
- 各種アイコンに使用
- https://fontawesome.com
- [Font Awesome Free License](https://fontawesome.com/license/free)

### clipboard.js
- テキストをコピーできるスクリプト
- URLのコピーボタンに使用
- https://clipboardjs.com
- [MIT License](https://github.com/zenorocha/clipboard.js/blob/master/LICENSE)
