<?php
    $f = dirname(__FILE__) . '/save-bar-text.conf';

    if (!file_exists($f)) {
        die('File not found');
    }

    $data = unserialize(file_get_contents($f));

    $enText = '';
    $cnText = '';
    $enabled = false;

    if (isset($data['en-bar-text'])) {
        $enText = $data['en-bar-text'];
    }

    if (isset($data['cn-bar-text'])) {
        $cnText = $data['cn-bar-text'];
    }

    if (isset($data['enabled']) and $data['enabled'] == true) {
        $enabled = true;
    }

    if (!empty($_POST)) {
        $data = [];
        foreach (['en-bar-text', 'cn-bar-text', 'enabled'] as $key) {
            if (!empty($_POST[$key])) {
                $data[$key] = $_POST[$key];
            } else {
                $data[$key] = '';
            }
        }

        if (file_put_contents($f, serialize($data)) !== false) {
            $saveStatus = 'Saved!';
        } else {
            $saveStatus = 'Text could not be saved!';
        }

        if (!isset($_POST['enabled']) or $_POST['enabled'] == false) {
            $enabled = false;
        } else {
            $enabled =  true;
        }
    }

?>
<html>
<head><title>Bar text</title></head>
<body>
<form method="POST" action="bar-text.php">

    <?php if (isset($saveStatus)):?>
        <h3><?php echo htmlspecialchars($saveStatus);?></h3>
    <?php endif;?>

    <div style="margin-bottom:14px">
        <label for="en-bar-text">EN bar text
            <input type="text" name="en-bar-text" id="en-bar-text" style="width:400px" value="<?php echo htmlspecialchars($enText);?>">
        </label>
    </div>
    <div style="margin-bottom:14px">
        <label for="cn-bar-text">CN bar text
            <input type="text" name="cn-bar-text" id="cn-bar-text" style="width:400px" value="<?php echo htmlspecialchars($cnText);?>">
        </label>
    </div>
    <div style="margin-bottom:14px">
        <label for="cn-bar-text">Text bar is enabled
            <input type="checkbox" name="enabled" id="enabled" <?php if ($enabled):?>checked<?php endif;?>>
        </label>
    </div>
    <div><input type="submit" value="Save"></div>
</form>
</body>
</html>
