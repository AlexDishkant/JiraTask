<?php
use yii\helpers\Html;

?>

<p><h1>You successfully created jira task</h1></p>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Kод задачи</th>
        <th scope="col">Название задачи</th>
        <th scope="col">Статус</th>
        <th scope="col">Приоритет</th>
        <th scope="col">Тип</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">
            <div id="task"></div>
            <script>
                    localStorage.setItem('TaskCode', '123');
                    document.getElementById("task").innerHTML = localStorage.getItem("TaskCode");
            </script>
        </th>
        <td>
            <div id="name"></div>
            <script>
                localStorage.setItem('name', '<?= Html::encode($model->jiraProject) ?>';
                document.getElementById("name").innerHTML = localStorage.getItem("name");
            </script>
        </td>
        <td><label for="Status">
                <div id="status"></div>
                <script>
                        localStorage.setItem('Status', '<select>\n' +
                            '                    <option>To do</option>\n' +
                            '                    <option>At work</option>\n' +
                            '                    <option>Done</option>\n' +
                            '                    <option>In review</option>\n' +
                            '                </select>');
                        document.getElementById("status").innerHTML = localStorage.getItem("Status");
                </script>

            </label></td>

        <td>
            <div id="priority"></div>
            <script>
                    localStorage.setItem('Priority', '<?= Html::encode($model->priority) ?>');
                    document.getElementById("priority").innerHTML = localStorage.getItem("Priority");
            </script>
        </td>
        <td>
            <div id="type"></div>
            <script>
                    localStorage.setItem('type', '<?= Html::encode($model->type) ?>');
                    document.getElementById("type").innerHTML = localStorage.getItem("type");
            </script>
        </td>
    </tr>
    </tbody>
    <a href = "javascript:history.back()">Back to previous page</a>
</table>
