// == Configuraçãoes do WebServer
const http = require("http");
const host = 'localhost';
const port = 8080;

// == Importações dos Métodos/Rotas do WebService
const teste3 = require('./teste3');
const info = require('./Rotas/Info');


// == Listenes do WebService
const requestListener = async function (req, res) {

    // == OLD == 
        // Ao utilizar Retorno Direto:
            //res.writeHead(200);
            //res.end("My first server!");
        // Ao Utilizar retorno em JSON
            //res.setHeader("Content-Type", "application/json");
            //res.writeHead(200);
            //res.end(`{"message": "This is a JSON response"}`);

    //Switch de Rotas
    switch (req.url) {

        case "/Info":
            res.writeHead(200);
            res.end(JSON.stringify(await info.Info()));
            break

        //Rota Teste com importação
        case "/teste":
            res.writeHead(200);
            res.end('teste ' + teste3.teste3retorno());
            //res.end(books);
            break
        
        //Retorno Padrão
        default:
            res.writeHead(404);
            res.end(JSON.stringify({error:"Recurso não encontrado, Verifique o método Utilizado!"}));
    }
};


//WebService
const server = http.createServer(requestListener);
server.listen(port, host, () => {
    console.log(`Servidor rodando na Porta http://${host}:${port}`);
});