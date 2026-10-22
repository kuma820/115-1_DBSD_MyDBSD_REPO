<?php
// 初始化變數
$hours_input = '';
$message = '';
$status_type = ''; // 用於設定顯示樣式 (success, error, info)

// 檢查是否收到 POST 表單提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 取得使用者輸入並清除前後空白
    $hours_input = isset($_POST['hours']) ? trim($_POST['hours']) : '';

    // 全形數字轉半形數字處理 (針對測試表第 7 列)
    $hours_converted = mb_convert_kana($hours_input, 'n', 'UTF-8');

    // 驗證 1：檢查是否為空白 (針對測試表第 3 列)
    if ($hours_converted === '') {
        $message = '請輸入有效的數字，不可留空！';
        $status_type = 'error';
    } 
    // 驗證 2：檢查是否為有效數字 (針對測試表第 5、6 列，阻止文字及帶單位的輸入)
    elseif (!is_numeric($hours_converted)) {
        $message = '輸入無效！請輸入純數字（請勿包含單位或非數字文字）。';
        $status_type = 'error';
    } 
    else {
        // 轉為浮點數進行數值判斷
        $hours = (float)$hours_converted;

        // 驗證 3：檢查是否為負數 (針對測試表第 4 列)
        if ($hours < 0) {
            $message = '靠泊時間不可為負數，請輸入大於或等於 0 的數值。';
            $status_type = 'error';
        } 
        // 業務邏輯判斷 (針對測試表第 1、2 列)
        elseif ($hours >= 20) {
            $message = "靠泊時間：{$hours} 小時 ── 【長時間靠泊】";
            $status_type = 'warning';
        } 
        else {
            $message = "靠泊時間：{$hours} 小時 ── 【一般靠泊】";
            $status_type = 'success';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船舶靠泊時間查詢系統</title>
    <style>
        body {
            font-family: "Microsoft JhengHei", Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }
        h2 {
            margin-top: 0;
            color: #1a252f;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            background-color: #2c3e50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #34495e;
        }
        .result-box {
            margin-top: 20px;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>船舶靠泊時間查詢</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="hours">請輸入靠泊時間（小時）：</label>
            <!-- 使用 htmlspecialchars 防止 XSS 攻擊 (針對測試表第 8 列) -->
            <input type="text" id="hours" name="hours" value="<?php echo htmlspecialchars($hours_input, ENT_QUOTES, 'UTF-8'); ?>" placeholder="例如：20" required>
        </div>
        <button type="submit">開始判斷</button>
    </form>

    <?php if (!empty($message)): ?>
        <div class="result-box <?php echo $status_type; ?>">
            <!-- 輸出時一律進行 HTML 轉義處理 -->
            <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>