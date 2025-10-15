<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xml Reader Form</title>

    <link rel="stylesheet" href="app/pages/xml-reader-form.css">
</head>
<body>
    <div id="app">
        <h1>Selecione um XML</h1>
        
        <form>
            <div>
                <label for="cnpj-input">CNPJ</label>
                <input
                    type="text"
                    id="cnpj-input"
                    placeholder="00623904000173"
                >
            </div>
            <div>
                <label for="xml-input">Selecione um XML</label>
                <input
                    type="file"
                    id="xml-input"
                >
            </div>
            <button
                type="submit"
            >
                Gerar query
            </button>
        </form>
    </div>
</body>
</html>