<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World amb Nom</title>
</head>
<body>

<script>

    const urlParams = new URLSearchParams(window.location.search);
    const elmeunom = urlParams.get('elmeunom');

    
    if (elmeunom) {
        
        document.body.innerHTML = '<h1>Hola, ' + elmeunom + '! Benvingut al meu món.</h1>';
    } else {
        
        document.body.innerHTML = '<h1>Hola, visitant! Benvingut al meu món.</h1>';
    }
</script>

</body>
</html>

