//Função chamada no WebService
async function Info(){
    var retorno = await BuscaDados();    //Chama o método BuscaDados
    return retorno;                      //Retorna o valor do Método
    
}

async function BuscaDados(){
    const { Pool } = require('pg')
    const pool = new Pool({
        host: 'localhost',
        user: 'postgres',     
        password: 'favero10',
        database: 'gestorxdb',
        port: 5432
    })

    //Cria um Promise retornando o valor do Select
    return new Promise((resolve, reject) => pool.query('SELECT * from sysconfig_configuracao_sistema', (err, res) => {
      resolve(res.rows);        //Define o valor da variavel resolve do Promise
      pool.end()                //Fecha o Pool de conexão
      return resolve;           //Retorna o Valor do Resolve
    }));
}

/*
function zxpromise() {
    return new Promise((resolve, reject) => zxapi.programs({ region: "DE" }, function(err, result) {
        if (err != null) {
            reject(err);
        }
        console.log(result, "before return");
        resolve(result);
        console.log(result, "after return");
    }));
}*/

module.exports = {
    Info: Info,
};