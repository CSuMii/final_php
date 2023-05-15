<html lang="zh-TW">
<meta charset="UTF-8"></meta>
<form action="index.php" method="POST">
    <table>
        <tr>
            <td>寄件人:</td>
            <td><input type="text" size="30" name="sendname"></td>
        </tr>
        <tr>
            <td>寄件人信箱:</td>
            <td><input type="text" size="30" name="sendmail"></td>
        </tr>
        <tr>
            <td>收件人:</td>
            <td><input type="text" size="30" name="getname"></td>
        </tr>
        <tr>
            <td>收件人信箱:</td>
            <td><input type="text" size="30" name="getmail"></td>
        </tr>
        <tr>
            <td>信件標題:</td>
            <td><input type="text" size="40" name="subject"></td>
        </tr>
        <tr>
            <td>訊息:</td>
            <td>
                <textarea rows="5" cols="40" name="message"></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" name="send" value="Send" />
</form>
</html>
