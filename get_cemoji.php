<?php
// ここに許可するドメイン（自分のサイトのURL）を追加してください
$allowedDomain = 'https://example.com';

// Refererヘッダーを取得
$referer = $_SERVER['HTTP_REFERER'];

// Refererヘッダーが許可するドメインで始まるかどうかを確認
if (strpos($referer, $allowedDomain) === 0) {
    // 許可するドメインからのアクセスの場合、処理を続行

    // カスタム絵文字ディレクトリの、PHPの場所からの相対パス（デフォルトはemoji）
    $imgDir = '../emoji/';

    // ディレクトリ内のファイル一覧を取得
    $files = scandir($imgDir);
    // 余分な要素を削除
    $files = array_diff($files, array('.', '..'));
    // JSON形式でファイルリストを返す
    header('Content-Type: application/json');
    echo json_encode($files);
    // ここまで　カスタム絵文字ピッカーについての記述

} else {
    // 許可しないドメインからのアクセスの場合、エラーを返すなどの処理を行う
    http_response_code(403); // 403 Forbiddenを返す
    echo "アクセスが許可されていません。";
    exit;
}
?>