
<?php 
include "./adminQuery.php";
// session_start();
?>
<div class="container">
<form action="addPost.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title">News Title: </label>
      <input type="text" class="form-control" id="title" placeholder="Enter News Title" name="title">
    </div>
    <div class="mb-3">
      <label for="token">News Title in English: </label>
      <input type="text" class="form-control" id="token" placeholder="Enter News Title" name="token">
    </div>
    <div class="mb-3">
    <label for="text">Text: </label>
    <textarea class="form-control" rows="5" id="text" name="text"></textarea>
    </div>
    <div class="mb-3">
      <label for="yt">Video embeded link: </label>
      <input type="url" class="form-control" id="yt" placeholder="Enter embeded url" name="yt">
    </div>
    <div class="mb-3" style="display:flex;">
      <label for="imagefile">Image: </label>
      <input type="file" style="width:20%" class="form-control" id="imagefile" placeholder="select image" name="imagefile">
      
      <label for="imagealt" style="margin-left:5%;">Image Alt: </label>
      <input type="text" style="width:20%" class="form-control" id="imagealt" placeholder="Enter image alt" name="imagealt" title="alt must be less then 20 character">
    </div>
    <div class="mb-3 " style="display:flex;">
      <!-- <label for="date">Date: </label>
      <input type="date" style="width:20%" class="form-control " id="date" placeholder="select date" name="date">
       -->
      <label for="categories" >Categories: </label>
      <select class="form-select" style="width:20%" name="categories" id="categories">
      <option value="select one" selected>select one</option>
        <option value="business">बिज़नेस</option>
        <option value="education">एजुकेशन</option>
        <option value="entertenment">मनोरंजन</option>
        <option value="viralNews">वायरल न्यूज</option>
        <option value="travell">ट्रैवल</option>
        <option value="fashion">फैशन</option>
        <option value="food">फूड</option>
        <option value="health">हैल्थ & ब्यूटी</option>
        <option value="national">राष्टीय समाचार</option>
        <option value="regional">प्रादेशिक</option>
        <option value="politics">राजनिती</option>
        <option value="automobile">ऑटोमोबाइल</option>
        <option value="technology">टेक्नोलॉजी</option>
        <option value="religion">धर्म</option>
        <option value="crime">जुर्म</option>
        <option value="world">वर्ल्ड</option>
        <option value="sports">स्पोर्ट्स</option>
        <option value="agriculture">कृषि</option>
        <option value="horoscope">राशिफल</option>
        <option value="science">साइंस</option>
        
      </select>
    </div>
    <button name="newPost" class="btn btn-outline-primary" onclick="return newsPost()">POST</button>
  </form>
  </div>