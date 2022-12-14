<?php
// ârequire 'lib/password.php';ð¡ãã¡ã¤ã«ãå­å¨ããªãããï¼ð¡
require 'dbconnect.php';
// ã»ãã·ã§ã³éå§ ð¡ãã®ä½ç½®ã§ã¯ééãï¼ð¡
// session_start();
// âinclude_once("dbInfo.php");ð¡ãã¡ã¤ã«ãå­å¨ããªãããï¼ð¡

// ã¨ã©ã¼ã¡ãã»ã¼ã¸ãç»é²å®äºã¡ãã»ã¼ã¸ã®åæå
$errorMessage = "";
$signUpMessage = "";

// ã»ãã·ã§ã³éå§ ð¡ãã®ä½ç½®ãæ­£è§£ï¼ï¼ã­ã°ã¤ã³æå ±ãå¥åãããç´åã«è¨è¿°ãããã®ãªã®ã§ããããï¼ï¼ð¡
session_start();

// ã­ã°ã¤ã³ãã¿ã³ãæ¼ãããå ´å
if (isset($_POST["signUp"])) {
    // 1. ã¦ã¼ã¶IDã®å¥åãã§ãã¯
    if (empty($_POST)) {  // å¤ãç©ºã®ã¨ã
        $errorMessage = 'ã¦ã¼ã¶ã¼IDãæªå¥åã§ãã';
    } else if (empty($_POST["password"])) {
        $errorMessage = 'ãã¹ã¯ã¼ããæªå¥åã§ãã';
    } else if (empty($_POST["password2"])) {
        $errorMessage = 'ãã¹ã¯ã¼ããæªå¥åã§ãã';
    }

    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["password2"]) && $_POST["password"] === $_POST["password2"]) {
        // å¥åããã¦ã¼ã¶IDã¨ãã¹ã¯ã¼ããæ ¼ç´
        $username = $_POST["username"];
        $password = $_POST["password"];

        // 2. ã¦ã¼ã¶IDã¨ãã¹ã¯ã¼ããå¥åããã¦ãããèªè¨¼ãã
        $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
        // 3. ã¨ã©ã¼å¦ç
        try {
            $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // ð¡INSERT INTOã®VALUESã®å¤ããï¼ãã§æ­£è§£ãªã®ã¯ä½æãªã®ãåãããªãã§ããð¡
            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");

            $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));  // ãã¹ã¯ã¼ãã®ããã·ã¥åãè¡ãï¼ä»åã¯æå­åã®ã¿ãªã®ã§bindValue(å¤æ°ã®åå®¹ãå¤ãããªã)ãä½¿ç¨ãããç´æ¥excuteã«æ¸¡ãã¦ãåé¡ãªãï¼
            $userid = $pdo->lastinsertid();  // ç»é²ãã(DBå´ã§auto_incrementãã)IDã$useridã«å¥ãã

            $signUpMessage = 'ç»é²ãå®äºãã¾ãããããªãã®ç»é²IDã¯ ' . $userid . ' ã§ãããã¹ã¯ã¼ãã¯ ' . $password . ' ã§ãã';  // ã­ã°ã¤ã³æã«ä½¿ç¨ããIDã¨ãã¹ã¯ã¼ã
        } catch (PDOException $e) {
            $errorMessage = 'ãã¼ã¿ãã¼ã¹ã¨ã©ã¼';
            // $e->getMessage() ã§ã¨ã©ã¼åå®¹ãåç§å¯è½ï¼ãããã¯æã®ã¿è¡¨ç¤ºï¼
            echo $e->getMessage();
        }
    } else if ($_POST["password"] != $_POST["password2"]) {
        $errorMessage = 'ãã¹ã¯ã¼ãã«èª¤ããããã¾ãã';
    }
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>æ°è¦ç»é²</title>
    </head>
    <body>
        <h1>æ°è¦ç»é²ç»é¢</h1>
        <form id="loginForm" name="loginForm" action="" method="POST">
            <fieldset>
                <legend>æ°è¦ç»é²ãã©ã¼ã </legend>
                <div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
                <div><font color="#0000ff"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
                <label for="username">ã¦ã¼ã¶ã¼å</label><input type="text" id="username" name="username" placeholder="ã¦ã¼ã¶ã¼åãå¥å" value="<?php if (!empty($_POST["username"])) {
    echo htmlspecialchars($_POST["username"], ENT_QUOTES);
} ?>">
                <br>
                <label for="password">ãã¹ã¯ã¼ã</label><input type="password" id="password" name="password" value="" placeholder="ãã¹ã¯ã¼ããå¥å">
                <br>
                <label for="password2">ãã¹ã¯ã¼ã(ç¢ºèªç¨)</label><input type="password" id="password2" name="password2" value="" placeholder="ååº¦ãã¹ã¯ã¼ããå¥å">
                <br>
                <input type="submit" id="signUp" name="signUp" value="ç»é²">
            </fieldset>
        </form>
    </body>
</html>
