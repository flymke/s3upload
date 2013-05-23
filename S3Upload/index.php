<html>
<head>
 <link rel="stylesheet" type="text/css" href="styles.css" />
 <script type="text/javascript" src="app.js"></script>
</head>
 
<body>
  <table>
    <tr>
      <td>File selection:</td>
      <td><input type="file" id="files" name="files[]" multiple /></td>
    </tr>
    <tr>
      <td>Progress:</td>
      <td><div id="progress_bar"><div class="percent">0%</div></div></td>
    </tr>
    <tr>
      <td>Status:</td>
      <td><span id="status"></span></td>
    </tr>
  </table>
 
  <script type="text/javascript">
    document.getElementById('files').addEventListener('change', handleFileSelect, false);
    setProgress(0, 'Waiting for upload.');
  </script>
 
</body>
 
</html>