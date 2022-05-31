
<!DOCTYPE html>
<html>

<head>
<title>Create A Post</title>
<link rel="stylesheet" ref="stylesheet2" href="index.css"/>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>

<header>
<?php include_once 'header.php'; ?>
</header>


<body>
<div class="create-post">
        <div class="post-title">
            <h1>Create Post</h1>
<?php 
    if(isset($_REQUEST['post'])){
        if($_GET['post']=='failedtooLong'){
            echo "<h3>Error! Title Must Not Exceed 100 Characters</h3>";
        }else if($_GET['post']=='failed'){
            echo "<h3>Error! You must complete all the fields</h3>";
        }else if($_GET['post']=='failedNoLogin'){
            echo "<h3>Error! You must be logged in to post</h3>";
        }
    } 
        ?>
        </div>
</div>
<div class="make-post">
<form action="submitpost.php" method="POST">
    <span>Title:</span>
    <textarea id="title" type="text" name="title" placeholder="Title"></textarea>
    <br>
    <br>
    <label for="subtopic">Choose a Subtopic</label>
    <select name="subtopic" id="subtopic">Subtopics
    <option value="potato">Potato</option>
    <option value="gaming">Gaming</option>
    <option value="lifestyle">Lifestyle</option>
    </select>
    <br>
    <br>
    <p>Post Content</p>
    <textarea type="text" name="content" id="content" placeholder="Speak Your Mind..."></textarea>
    <br>    
    <button type="submit" name="submit">Post</button>
</div>
</form>
</body>

<?php include_once 'footer.php';?>
</html>
