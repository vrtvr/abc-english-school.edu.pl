<?php

session_start();

if (!isset($_SESSION['logged']))
{
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="32x32" rel="icon" href="assets/image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Zarządzanie użytkownikami</title>

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/users.css">
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <!-- Ajax library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <script>
    $(document).ready(function(){
        $('.editBtn').on('click',function(){
            //hide edit span
            $(this).closest("tr").find(".editSpan").hide();

            //show edit input
            $(this).closest("tr").find(".editInput").show();

            //hide edit button
            $(this).closest("tr").find(".editBtn").hide();

            //hide delete button
            $(this).closest("tr").find(".deleteBtn").hide();
            
            //show save button
            $(this).closest("tr").find(".saveBtn").show();

            //show cancel button
            $(this).closest("tr").find(".cancelBtn").show();
            
        });
        
        $('.saveBtn').on('click',function(){
            $('#userData').css('opacity', '.5');

            var trObj = $(this).closest("tr");
            var ID = $(this).closest("tr").attr('id');
            var inputData = $(this).closest("tr").find(".editInput").serialize();
            $.ajax({
                type:'POST',
                url:'userAction.php',
                dataType: "json",
                data:'action=edit&id='+ID+'&'+inputData,
                success:function(response){
                    if(response.status == 1){
                        trObj.find(".editSpan.name").text(response.data.name);
                        trObj.find(".editSpan.last_name").text(response.data.last_name);
                        trObj.find(".editSpan.mail").text(response.data.mail);
                        trObj.find(".editSpan.role").text(response.data.role);
                        trObj.find(".editSpan.type").text(response.data.type);
                        trObj.find(".editSpan.lvl").text(response.data.lvl);
                        trObj.find(".editSpan.age").text(response.data.age);
                        
                        trObj.find(".editInput.name").val(response.data.name);
                        trObj.find(".editInput.last_name").val(response.data.last_name);
                        trObj.find(".editInput.mail").val(response.data.mail);
                        trObj.find(".editInput.role").val(response.data.role);
                        trObj.find(".editInput.type").val(response.data.type);
                        trObj.find(".editInput.lvl").val(response.data.lvl);
                        trObj.find(".editInput.age").val(response.data.age);
                        
                        trObj.find(".editInput").hide();
                        trObj.find(".editSpan").show();
                        trObj.find(".saveBtn").hide();
                        trObj.find(".cancelBtn").hide();
                        trObj.find(".editBtn").show();
                        trObj.find(".deleteBtn").show();
                    }else{
                        alert(response.msg);
                    }
                    $('#userData').css('opacity', '');
                }
            });
        });

        $('.cancelBtn').on('click',function(){
            //hide & show buttons
            $(this).closest("tr").find(".saveBtn").hide();
            $(this).closest("tr").find(".cancelBtn").hide();
            $(this).closest("tr").find(".confirmBtn").hide();
            $(this).closest("tr").find(".editBtn").show();
            $(this).closest("tr").find(".deleteBtn").show();

            //hide input and show values
            $(this).closest("tr").find(".editInput").hide();
            $(this).closest("tr").find(".editSpan").show();
        });
        
        $('.deleteBtn').on('click',function(){
            //hide edit & delete button
            $(this).closest("tr").find(".editBtn").hide();
            $(this).closest("tr").find(".deleteBtn").hide();
            
            //show confirm & cancel button
            $(this).closest("tr").find(".confirmBtn").show();
            $(this).closest("tr").find(".cancelBtn").show();
        });
        
        $('.confirmBtn').on('click',function(){
            $('#userData').css('opacity', '.5');

            var trObj = $(this).closest("tr");
            var ID = $(this).closest("tr").attr('id');
            $.ajax({
                type:'POST',
                url:'userAction.php',
                dataType: "json",
                data:'action=delete&id='+ID,
                success:function(response){
                    if(response.status == 1){
                        trObj.remove();
                    }else{
                        trObj.find(".confirmBtn").hide();
                        trObj.find(".cancelBtn").hide();
                        trObj.find(".editBtn").show();
                        trObj.find(".deleteBtn").show();
                        alert(response.msg);
                    }
                    $('#userData').css('opacity', '');
                }
            });
        });
    });
    </script>

</head>
<body>

    <nav>
        <a href="adminpanel.php"><img class="logo" src="assets/image/logo.png" alt="schools logo"></a>
        <ul>
            <li><a href="admincalendar.php">Plan zajęć edit</a></li>
            <li><a href="users.php">Użytkownicy</a></li>
            <li><a href="adminpanel.php">Powiadomienia</a></li>
            <li><a href="logout.php">Wyloguj</a></li>
 
        </ul>
        <button class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>

    </nav>

    <h1>Zarządzanie użytkownikami </h1>

    <table lang="pl" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
            <th>Typ dostępu</th>
            <th>Funkcja</th>
            <th>Poziom</th>
            <th>Wiek</th>
            <th>Opcje</th>
        </tr>
    </thead>
    <tbody id="userData">
    <?php 
        // Load and initialize database class 
        require_once 'DB.class.php'; 
        $db = new DB(); 
 
        // Get users data from database 
        $users = $db->getRows(); 
 
        if(!empty($users)){ 
            foreach($users as $row){ 
        ?>
            <tr id="<?php echo $row['id']; ?>">
                <td><?php echo $row['id']; ?>
                </td>
                <td>
                    <span class="editSpan name"><?php echo $row['name']; ?></span>
                    <input class="form-control editInput name" type="text" name="name" value="<?php echo $row['name']; ?>" 
                    style="display: none;">
                </td>
                <td>
                    <span class="editSpan last_name"><?php echo $row['last_name']; ?></span>
                    <input class="form-control editInput last_name" type="text" name="last_name" value="<?php echo $row['last_name']; ?>" 
                    style="display: none;">
                </td>
                <td>
                    <span class="editSpan mail"><?php echo $row['mail']; ?></span>
                    <input class="form-control editInput mail" type="text" name="mail" value="<?php echo $row['mail']; ?>" 
                    style="display: none;">
                </td>
                <td>
                    <span class="editSpan role"><?php echo $row['role']; ?></span>
                    <select class="form-control editInput role" name="role" style="display: none;">
                        <option value="Admin" <?php echo $row['role'] == 'Admin'?'selected':''; ?>>Admin</option>
                        <option value="User" <?php echo $row['role'] == 'User'?'selected':''; ?>>User</option>
                    </select>
                </td>
                <td>
                    <span class="editSpan type"><?php echo $row['type']; ?></span>
                    <select class="form-control editInput type" name="type" style="display: none;">
                        <option value="Dyrektor" <?php echo $row['type'] == 'Dyrektor'?'selected':''; ?>>Dyrektor</option>
                        <option value="Nauczyciel" <?php echo $row['type'] == 'Nauczyciel'?'selected':''; ?>>Nauczyciel</option>
                        <option value="Uczeń" <?php echo $row['type'] == 'Uczeń'?'selected':''; ?>>Uczeń</option>
                    </select>
                </td>
                <td>
                    <span class="editSpan lvl"><?php echo $row['lvl']; ?></span>
                    <select class="form-control editInput lvl" name="lvl" style="display: none;">
                        <option value="A1" <?php echo $row['lvl'] == 'A1'?'selected':''; ?>>A1</option>
                        <option value="A2" <?php echo $row['lvl'] == 'A2'?'selected':''; ?>>A2</option>
                        <option value="B1" <?php echo $row['lvl'] == 'B1'?'selected':''; ?>>B1</option>
                        <option value="B2" <?php echo $row['lvl'] == 'B2'?'selected':''; ?>>B2</option>
                        <option value="C1" <?php echo $row['lvl'] == 'C1'?'selected':''; ?>>C1</option>
                        <option value="C2" <?php echo $row['lvl'] == 'C2'?'selected':''; ?>>C2</option>
                    </select>
                </td>
                <td>
                    <span class="editSpan age"><?php echo $row['age']; ?></span>
                    <input class="form-control editInput age" type="text" name="age" value="<?php echo $row['age']; ?>" 
                    style="display: none;">
                </td>
                <td>
                    <button type="button" class="btn btn-default editBtn"><i class="pencil">
                    <img src="(assets/image/edit-icon.png" /></i></button>
                    <button type="button" class="btn btn-default deleteBtn">
                    <img src="(assets/image/delete-icon.png" /><i class="trash"></i></button>
                    
                    <button type="button" class="btn btn-success saveBtn" style="display: none;">Zapisz</button>
                    <button type="button" class="btn btn-danger confirmBtn" style="display: none;">Potwierdź</button>
                    <button type="button" class="btn btn-secondary cancelBtn" style="display: none;">Anuluj</button>
                </td>
            </tr>
        <?php 
            } 
        }else{ 
            echo '<tr><td colspan="6">Nie znaleziono żadnych rekordów...</td></tr>'; 
        } 
    ?>
    </tbody>
</table>

</body>
</html>