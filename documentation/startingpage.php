<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Screenshot Plugin Setup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      /* max-width: 800px;
      margin: 0 auto; */
      border: 1px solid #dee2e6;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .heading {
      text-align: center;
      padding: 20px;
      margin-bottom: 20px;
      background: linear-gradient(#2271b1, #2271b1);
      color: white;
      border-radius: 5px;
    }
    .sub-heading {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .step-container {
      background-color: #f8f9fa;
      border: 1px solid #ced4da;
      border-radius: 5px;
      padding: 10px 20px;
      margin-bottom: 20px;
    }
    .step-icon {
      font-size: 24px;
      color: #2271b1;
      margin-right: 10px;
    }
    .step {
      margin-bottom: 10px;
    }
    .alert {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: linear-gradient(#2271b1, #2271b1);
      padding: 20px;
      color: white;
      margin: 25px auto;
      border-radius: 12px;
    }
    .btn-secondary {
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 5px;
      background:#2c3338;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="heading">
      <h1>Screenshot Plugin</h1>
    </div>
    <div class="sub-heading">Set up for Screenshot Plugin</div>
    <div class="step-container">
      <div class="step">
        <span class="step-icon">&#128187;</span>Open your terminal or command prompt.
      </div>
      <div class="step">
        <span class="step-icon">&#128187;</span>Navigate to the root directory of the plugin. For example, if your plugin is located in 
        <code>
          <?php $file_path = __FILE__;
            $parts = explode('\\', $file_path);
            $dirpath=$parts[0].'\\'.$parts[1].'\\'.$parts[2].'\\'.$parts[3].'\\'.$parts[4].'\\'.$parts[5].'\\'.$parts[6];
            echo $dirpath;
           ?>
        </code>, you need to navigate to that directory using the cd command in your terminal.
      </div>
      <div class="step">
        <span class="step-icon">&#128187;</span>Run the command <code>npm i</code> to install the package.
      </div>
      <div class="step">
        <span class="step-icon">&#128187;</span>After the installation is complete, go to the XAMPP control panel and restart the Apache server to apply any changes made by the plugin.
      </div>
      Note:If the attachment_id is returning 0, it means the screenshot image was not uploaded successfully to the media library.
    </div>
    <div class="alert alert-primary">
      <strong>Take screenshot through "REST API"</strong>
      <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo plugin_dir_url( __FILE__ ) . 'restapi.php'; ?>'">
        Get Started
      </button>
    </div>
    <div class="alert alert-primary" >
      <strong>Take screenshot through "CLASS OBJECT"</strong>
      <button type="button" class="btn btn-secondary"  onclick="window.location.href = '<?php echo plugin_dir_url( __FILE__ ) . 'class.php'; ?>'">
        Get Started
      </button>
    </div>
  </div>
</body>
</html>
