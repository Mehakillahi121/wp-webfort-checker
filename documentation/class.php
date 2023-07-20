
<head>
    <style>
        .card{
            width:90%;
            margin:0 auto;
        }
        .side-bar{ 
    position: fixed;
    top:20px;
    right:30px;}
    .side-bar ul li a{
        text-decoration:none;
        color:black;
       
    
    }
    .side-bar ul li{
        list-style-type: none;
    
    }
    h5{
        margin:20px;
    }
    #url-section ul li{
        list-style-type: none;
        margin:5px 0;
        padding:5px 0;
    }
        </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<br/>
<div class=container>
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
            
                <section id="url-section" style="max-width: 800px; margin: 0 auto; padding: 20px;">
                        <h3 style="text-align: center;">How to take a Screenshot through your plugin</h3><br>

                        <h5 style="text-align: center;">Suppose you want to take a screenshot of a URL, whether it is live or on your localhost.</h5>
                            <ul>
                                <li>Step 1: Create your plugin.</li>
                                <li>Step 2: Copy the following code into your plugin:</li>
                                <script src="https://gist.github.com/Mehakillahi121/5c199267a101afe6bf13fa2c75f394aa.js"></script>
                                Note: Replace this  <code>   require_once WP_PLUGIN_DIR . '\wp-screenshot-updater-main\screenshotter.php' </code>with this <code>require_once WP_PLUGIN_DIR . '\screenshotter-wp-main\screenshotter.php';</code>
                                <li>Step 3: Change 'YOUR_DESIRED_URL_HERE' in the code to your desired URL.</li>
                                <li>Step 4: Activate your plugin.</li>
                                <li>Step 5: You'll get a screenshot of your desired URL on the following path, shown by the screen and media ID on that screenshot.</li>
                            </ul>
                        <h5 style="text-align: center;">Output</h5>
                        <img style="width: 100%; max-width: 800px; height: auto; margin: 20px auto; border: 1px solid #ddd; border-radius: 5px;" src="screenshot/64affe2f508d1.png" alt="Screenshot Example">
                    </section>

                    <section id="filename-section">
                            <h5>Suppose you want  to take screenshot of url with specific filename   </h5></h5><br>
                            <script src="https://gist.github.com/Mehakillahi121/73923d28af4b4e7f6a41f03b6a5bb71e.js"></script>
                            <h5>Output</h5>
                            <img width="100%" src="screenshot/64affe2f508d1.png" alt="Screenshot Example">  
                    </section>
                    <section id="specific-heightwidth">
                        <h5>Suppose you want to take a screenshot of a URL according to your height and width.</h5><br>
                        <script src="https://gist.github.com/Mehakillahi121/de57baf33bfa2afd1e355656b9f9de01.js"></script>
                        <h5>Output</h5>
                        <img width="100%" src="screenshot/newfile1.png" alt="Screenshot Example">  
                    </section>
                    <section id="specific-viewport">
                        <h5>Suppose you want to take a screenshot of a URL according to your viewport.</h5><br>
                        <script src="https://gist.github.com/Mehakillahi121/48c87cca6145dd99ac8e97622ef15cc5.js"></script>
                        <h5>Output</h5>
                        <img width="100%" src="screenshot/new1.png" alt="Screenshot Example">  
                    </section>
                    <section id="specific-directory">
                        <h5>Suppose you want to take a screenshot of a URL in  specific directory.</h5><br>
                        <script src="https://gist.github.com/Mehakillahi121/4572641658d4e59df728c10496c44868.js"></script>
                        <h5>Output</h5>
                        <img width="100%" src="screenshot/new1.png" alt="Screenshot Example">  
                    </section>
            </div> 
        </div>
        <div class="col-lg-3 side-bar">
            <ul>
                <li><a  href="#url-section"> How it works? </a></li><br>
                <li><a  href="#filename-section"> how to take screenshot of url with specific filename?</a></li><br>
                <li><a  href="#specific-heightwidth"> how to take screenshot of url with specific height and width?</a></li><br>
                <li><a  href="#specific-viewport"> how to take screenshot of a URL according to your viewport?</a></li><br>
                <li><a  href="#specific-directory"> how to take screenshot of url with specific directory?</a></li><br>
            </ul>
        </div>
    </div>
</div>
