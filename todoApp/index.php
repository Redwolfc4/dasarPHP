<?php
// total array yang disiapkan untuk disimpan
$file = './todo.txt';
$todos = bacaFile($file) ?: array();

print_r($todos);

function bacaFile($file)
{

    if (file_exists($file)) {
        $data = file_get_contents($file);
        return unserialize($data);
    }
    ;
    return $data = [];

    

}
;

//save ke file
function saveData($file, $data)
{
    file_put_contents($file, serialize($data), 1);
    //redirect
    header('Location: ./');
}

// jika ditemukan todo yang dikirim melalui method post
if (isset($_POST['todo'])) {
    $data = $_POST['todo'];
    // simpan data ke dalam array todos
    $a = ['todo' => $data, 'status' => 0];
    print_r($a);
    array_push($todos, $a);
    saveData($file, $todos);
}
;

// jika ditemukan status yang dikirim melalui method get
if (isset($_GET['status'])) {
    $key = $_GET['key'];
    $status = $_GET['status'];
    $todos[$key]['status'] = $status;
    saveData($file, $todos);
}
;

if (isset($_GET['hapus'])) {
    $key = $_GET['key'];
    array_splice($todos, $key, 1); // gunakan unset
    file_put_contents($file, serialize($todos),1);
    header('Location: ./');

};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todoApp|Kholik</title>
</head>

<body>
    <h1><?= ucwords('todo app') ?></h1>
    <form method="post">
        <label for="todo">Daftar Belanja Hari ini</label><br>
        <input type="text" name="todo" id="todo">
        <button type="submit">Submit</button>
    </form>

    <ul>
        <?php if (!empty($todos)): ?>
            <?php foreach ($todos as $key => $todo): ?>
                <li>
                    <input <?= $todo['status'] ? 'checked' : '' ?> type="checkbox" name="todo" id="todo"
                        onclick="window.location.href='./?status=<?= ($todo['status'] != 1) ? 1 : 0 ?>&key=<?= $key ?>' ">
                    <label for="">
                        <?= $todo['status'] ? '<del>' . $todo['todo'] . '</del>' : $todo['todo'] ?>
                    </label>
                    <a href="<?= '?hapus=1&key=' . $key ?>" onclick="return confirm('apakah anda yakin ingin menghapus?')">hapus</a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>

</html>