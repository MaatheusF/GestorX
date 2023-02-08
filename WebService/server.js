const express = require('express');
const app = express();

app.get('/WebService', (req, res) => {
    res.send('Teste de Conexão: Conexão efetuada com sucesso!');
});

app.get('/WebService/BuscarDados', (req, res) => {
    const axios = require('axios');
    const cheerio = require('cheerio');
    const url = 'https://globoesporte.globo.com/rj/futebol/campeonato-carioca/';
    axios(url).then(response => {
        const html = response.data;
        const $ = cheerio.load(html);
        const tabelaStatus = $('.ranking-item-wrapper');
        const tabelaJogador = [];
        tabelaStatus.each(function(){
            const nomeJogador = $(this).find('.jogador-nome').text();
            const posicaoJogador = $(this).find('.jogador-posicao').text();
            const numeroGols = $(this).find('.jogador-gols').text();
            const timeJogador = $(this).find('.jogador-escudo > img').attr('alt');
            tabelaJogador.push({
                nomeJogador,
                posicaoJogador,
                numeroGols,
                timeJogador
            });
        });
        res.send(tabelaJogador);
        //console.log(tabelaJogador);
    }).catch(console.error);
    //res.send('teste' + tabelaJogadorExport);
});


// Listen to the App Engine-specified port, or 8080 otherwise
const PORT = process.env.PORT || 8080;
app.listen(PORT, () => {
  console.log(`Server listening on port ${PORT}...`);
});