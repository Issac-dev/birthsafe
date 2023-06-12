<form method="POST" action="/functions" enctype='multipart/form-data'>
<label for="title">Title</label>
<input type="text" name="title" required>
<label for="body">Text</label>
<textarea name="body" id="" cols="30" rows="10" required></textarea>
<label for="image">Image</label>
<input type="file" name="img" required>
<center>
    <input type="submit" value="Submit" name="create" class="btn btn-primary btn-sm mt-3">
</center>
</form>


<form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
<label for="title">Title</label>
<input type="text" name="title" required>
<label for="body">Text</label>
<textarea name="body" id="" cols="30" rows="10" required></textarea>
<label for="image">Image</label>
<input type="file" name="img" required>
<label for="date">Date</label>
<input type="date" name="date" required>
<input type="submit" value="Submit" name="create" class="">
</form>

<form class="feed mb-4 pb-2" method="POST" action="/topics">
<input type="hidden" name="title" value="<?php echo "$title"; ?>">
<button type="submit">
    <div class="row p-3">
        <i class="fa fa-calendar-days"> Posted: <?php echo "$date"; ?></i>
        <h3 class=""><?php echo "$title"; ?></h3>
    </div>
    <div class="row">
        <img class="mt-1 mb-5" src="/birthsafegit/app/backend/images/<?php echo "$image"; ?>" class="img-fluid" alt="...">
    </div>
</button>
</form>


<div class="row">
<div id="nav">
    <p class="dropdown-toggl lead mt-3">Create a Post <i class="fa fa-image"></i></p>
    <div class="dropdown">
        <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
            <label for="title">Title</label><br>
            <input type="text" name="task" required><br>
            <label for="image">Image</label><br>
            <input type="file" name="img" required><br>
            <label for="date">Date</label><br>
            <input type="date" name="date" required>
            <input type="submit" value="Submit" name="createtask" class="">
        </form>
    </div>
</div>
</div>



<form action="/profile" method="POST">
            <?php
            $sql = "SELECT `likes` AS likes FROM `topics` WHERE `id`='$id'";
            $result = mysqli_query($con, $sql);
            $fetch = mysqli_fetch_assoc($result);
            $counter = $fetch['likes'];
            ?>
            <input type="hidden" name="id" value="<?php echo "$id"; ?>">
            <input type="hidden" name="count" value="<?php echo "$counter"; ?>">
            <button class="bt2" type="submit" name="like">
            <i class="fa fa-heart fa-1x"></i> <?php echo $counter; ?>
            </button>
        </form>
        <?php
        if (isset($_POST['like'])) {
            $userid = $_POST['id'];
            $userlikes = $_POST['count'];
            $update = $userlikes + 1;
            $sql = "UPDATE `topics` SET `likes` = '$update' WHERE `id`=$userid";
            $updatelikes = mysqli_query($con, $sql);
            if ($updatelikes) {
        ?>
            <script>
                var delay = ms => new Promise(res => setTimeout(res, ms));
                var hold = async () => {
                await delay(1000);
                window.location.href = "/profile";
                };
                hold();
            </script>






<div class="row">
    <div id="nav">
        <p class="dropdown-toggl lead mt-3 set">Create a Post <i class="fa fa-image"></i></p>
        <div class="dropdown">
            <form class="form" method="POST" action="/functions" enctype='multipart/form-data'>
            <label for="title">Title</label><br>
            <input type="text" name="title" required><br>
            <label for="body">Text</label><br>
            <textarea name="body" id="" cols="30" rows="10" required></textarea><br>
            <label for="image">Image</label><br>
            <input type="file" name="img" required><br>
            <label for="date">Date</label><br>
            <input type="date" name="date" required>
            <input type="submit" value="Submit" name="create" class="">
            </form>
        </div>
    </div>
</div>