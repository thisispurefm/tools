<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required styles for Material Web -->
<link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
<!-- Required Material Web JavaScript library -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<!-- Instantiate single textfield component rendered in the document -->
<script>
  mdc.textField.MDCTextField.attachTo(document.querySelector<HTMLElement>('.mdc-text-field'));
</script>
</head>
<body>
    


<!-- Render textfield component -->
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label">Label</span>
  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label">
  <span class="mdc-line-ripple"></span>
</label>


    
</body>
</html>