<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css'>
    <link rel="stylesheet" href="/frameworks/semantic.min.css"/>
    <link rel="shortcut icon" href="/images/ugatu_logo.png" type="image/x-icon">
    <script src="/frameworks/jquery.min.js"></script>
    <script src="/frameworks/semantic.min.js"></script>
    <title>Группы</title>
</head>
<body style="background-image: url(/images/bg.jpg)">
<div class="ui container">
    <div class="field">
        <a href="/administrator/lk.php" class="ui floated small blue labeled icon button">
            <i class="arrow left icon"></i>Назад
        </a>
    </div>


    <div class="ui search fluid" style="margin-top: 20px">
        <div class="ui icon input fluid">
            <input class="prompt" type="text" placeholder="Введите название группы">
            <i class="search icon"></i>
        </div>
        <div class="results"></div>
    </div>


    <h2 class="ui header attached top red center aligned">Группы</h2>
    <table class="ui attached top sortable celled table scrolling center aligned">
        <thead>
        <tr>
            <th>Название</th>
            <th>Специализация</th>
            <th>Преподаватель</th>
            <th>Количество студентов</th>
            <th>Удаление</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>"Группа"</td>
            <td>"Специализация"</td>
            <td>"Фамилия Имя Отчество"</td>
            <td>"720"</td>
            <td>
                <button class="ui red icon button" onclick="openModalWindowForRemoveGroup()">
                    <i class="icon trash" style="color: white"></i>
                </button>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th colspan="5">
                <div class="ui teal label">
                    <i class="list icon"></i>"22"
                </div>
            </th>
        </tr>
        </tfoot>
    </table>
</div>

<div class="ui modal horizontal flip tiny" id="modalRemoveGroup">
    <h2 class="ui header center aligned">
        Вы уверены, что хотите удалить данную группу? Все данные студентов и преподавателей, привязанные
        к этой группе будут очищены!
    </h2>
    <div class="actions">
        <button class="ui right labeled icon red button" onclick="hideModalWindowForRemoveGroup()">
            Отклонить
            <i class="close icon"></i>
        </button>
        <button class="ui right labeled icon green button">
            Подтвердить
            <i class="check icon"></i>
        </button>
    </div>
</div>

<script>
    function openModalWindowForRemoveGroup() {
        $('#modalRemoveGroup')
            .modal({
                inverted: true
            })
            .modal('setting', 'closable', false)
            .modal('show')
        ;
    }

    function hideModalWindowForRemoveGroup() {
        $('#modalRemoveGroup')
            .modal('hide')
        ;
    }
</script>
</body>
</html>
